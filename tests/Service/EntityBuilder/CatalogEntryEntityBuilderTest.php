<?php

declare(strict_types=1);

namespace Hastegan\Sattrak\Tests\Service\EntityBuilder;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;
use Hastegan\Sattrak\DTO\CatalogEntryDTO;
use Hastegan\Sattrak\Entity\LaunchSite;
use Hastegan\Sattrak\Entity\Source;
use Hastegan\Sattrak\Service\EntityBuilder\CatalogEntryEntityBuilder;
use Hastegan\Sattrak\Service\EntityBuilder\LaunchSiteBuilder;
use Hastegan\Sattrak\Service\EntityBuilder\SourceBuilder;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class CatalogEntryEntityBuilderTest extends TestCase
{
    /** @var CatalogEntryEntityBuilder */
    private $catalogEntryEntityBuilder;

    /** @var ObjectRepository|MockObject */
    private $sourceRepository;

    /** @var ObjectRepository|MockObject */
    private $launchSiteRepository;

    /** @var SourceBuilder|MockObject */
    private $sourceBuilder;

    /** @var LaunchSiteBuilder|MockObject */
    private $launchSiteBuilder;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        $this->sourceRepository = $this->createMock(ObjectRepository::class);
        $this->launchSiteRepository = $this->createMock(ObjectRepository::class);
        $this->sourceBuilder = $this->createMock(SourceBuilder::class);
        $this->launchSiteBuilder = $this->createMock(LaunchSiteBuilder::class);

        $this->catalogEntryEntityBuilder = new CatalogEntryEntityBuilder(
            $this->getPreparedEntityManager(),
            $this->sourceBuilder,
            $this->launchSiteBuilder
        );
    }

    /**
     * @dataProvider buildHandlesMissingSourceOrSiteProvider
     *
     * @param bool $sourceIsFound
     * @param bool $launchSiteIsFound
     */
    public function testBuildHandlesMissingSourceOrSite(
        bool $sourceIsFound,
        bool $launchSiteIsFound
    ): void {
        $dto = (new CatalogEntryDTO())
            ->setSource('foo')
            ->setLaunchSite('bar')
            ->setRaw('raw')
            ->setInternalDesignator('intl')
            ->setNoradCatalogNumber('00001')
            ->setNames('lorem')
            ->setHasPayload(false)
            ->setLaunchDate('2020-01-01')
        ;

        $sourceIsFound
            ? $this->prepareSourceIsFound($dto->getSource())
            : $this->prepareSourceIsNotFound($dto->getSource());
        ;

        $launchSiteIsFound
            ? $this->prepareLaunchSiteIsFound($dto->getLaunchSite())
            : $this->prepareLaunchSiteIsNotFound($dto->getLaunchSite())
         ;

        $this->catalogEntryEntityBuilder->build($dto);
    }

    /**
     * @return array
     */
    public function buildHandlesMissingSourceOrSiteProvider(): array
    {
        return [
            [
                'sourceIsFound' => true,
                'launchSiteIsFound' => true,
            ],
            [
                'sourceIsFound' => false,
                'launchSiteIsFound' => true,
            ],
            [
                'sourceIsFound' => false,
                'launchSiteIsFound' => false,
            ],
        ];
    }

    /**
     * @param string $code
     */
    private function prepareLaunchSiteIsFound(string $code): void
    {
        $this->launchSiteRepository
            ->expects($this->once())
            ->method('findOneBy')
            ->with([
                'code' => $code,
            ])
            ->willReturn($this->getPreparedLaunchSite($code))
        ;

        $this->launchSiteBuilder
            ->expects($this->never())
            ->method('buildFromCode')
        ;
    }

    /**
     * @param string $code
     */
    private function prepareLaunchSiteIsNotFound(string $code): void
    {
        $this->launchSiteRepository
            ->expects($this->once())
            ->method('findOneBy')
            ->with([
                'code' => $code,
            ])
            ->willReturn(null)
        ;

        $this->launchSiteBuilder
            ->expects($this->once())
            ->method('buildFromCode')
            ->with($code)
            ->willReturn($this->getPreparedLaunchSite($code))
        ;
    }

    /**
     * @param string $code
     */
    private function prepareSourceIsFound(string $code): void
    {
        $this->sourceRepository
            ->expects($this->once())
            ->method('findOneBy')
            ->with([
                'code' => $code,
            ])
            ->willReturn($this->getPreparedSource($code))
        ;

        $this->sourceBuilder
            ->expects($this->never())
            ->method('buildFromCode')
        ;
    }

    /**
     * @param string $code
     */
    private function prepareSourceIsNotFound(string $code): void
    {
        $this->sourceRepository
            ->expects($this->once())
            ->method('findOneBy')
            ->with([
                'code' => $code,
            ])
            ->willReturn(null)
        ;

        $this->sourceBuilder
            ->expects($this->once())
            ->method('buildFromCode')
            ->with($code)
            ->willReturn($this->getPreparedSource($code))
        ;
    }

    /**
     * @param string $code
     *
     * @return LaunchSite|MockObject
     */
    private function getPreparedLaunchSite(string $code): LaunchSite
    {
        return $this->createConfiguredMock(
            LaunchSite::class,
            [
                'getCode' => $code,
            ]
        );
    }

    /**
     * @param string $code
     *
     * @return Source|MockObject
     */
    private function getPreparedSource(string $code): Source
    {
        return $this->createConfiguredMock(
            Source::class,
            [
                'getCode' => $code,
            ]
        );
    }

    /**
     * @return EntityManagerInterface|MockObject
     */
    private function getPreparedEntityManager(): EntityManagerInterface
    {
        $entityManager = $this->createMock(EntityManagerInterface::class);
        $entityManager
            ->method('getRepository')
            ->with($this->logicalOr(
                $this->equalTo(LaunchSite::class),
                $this->equalTo(Source::class)
            ))
            ->willReturnCallback(function ($class) {
                if (LaunchSite::class === $class) {
                    return $this->launchSiteRepository;
                }

                return $this->sourceRepository;
            })
        ;

        return $entityManager;
    }
}
