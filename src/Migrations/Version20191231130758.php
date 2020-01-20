<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20191231130758 extends AbstractMigration
{
    /**
     * @inheritDoc
     */
    public function getDescription() : string
    {
        return 'Initial data';
    }

    /**
     * @inheritDoc
     */
    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('AFETR', 'Air Force Eastern Test Range, Florida, USA') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('AFWTR', 'Air Force Western Test Range, California, USA') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('CAS', 'Canaries Airspace') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('DLS', 'Dombarovskiy Launch Site, Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('ERAS', 'Eastern Range Airspace') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('FRGUI', 'Europe''s Spaceport, Kourou, French Guiana') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('HGSTR', 'Hammaguira Space Track Range, Algeria') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('JSC', 'Jiuquan Space Center, PRC') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('KODAK', 'Kodiak Launch Complex, Alaska, USA') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('KSCUT', 'Uchinoura Space Center (Fomerly Kagoshima Space Center—University of Tokyo, Japan)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('KWAJ', 'US Army Kwajalein Atoll (USAKA)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('KYMSC', 'Kapustin Yar Missile and Space Complex, Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('NSC', 'Naro Space Complex, Republic of Korea') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('PLMSC', 'Plesetsk Missile and Space Complex, Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('RLLB', 'Rocket Lab Launch Base') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('SEAL', 'Sea Launch Platform (mobile)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('SEMLS', 'Semnan Satellite Launch Site, Iran') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('SNMLP', 'San Marco Launch Platform, Indian Ocean (Kenya)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('SRILR', 'Satish Dhawan Space Centre, India (Formerly Sriharikota Launching Range)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('SUBL', 'Submarine Launch Platform (mobile), Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('SVOBO', 'Svobodnyy Launch Complex, Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('TAISC', 'Taiyuan Space Center, PRC') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('TANSC', 'Tanegashima Space Center, Japan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('TYMSC', 'Tyuratam Missile and Space Center, Kazakhstan (Also known as Baikonur Cosmodrome)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('UNK', 'Unknown') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('VOSTO', 'Vostochny Cosmodrome, Russia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('WLPIS', 'Wallops Island, Virginia, USA') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('WOMRA', 'Woomera, Australia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('WRAS', 'Western Range Airspace') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('WSC', 'Wenchang Satellite Launch Center, PRC') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('XICLF', 'Xichang Launch Facility, PRC') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('YAVNE', 'Yavne Launch Facility, Israel') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO launch_site (code, name) VALUES ('YUN', 'Yunsong Launch Site (Sohae Satellite Launching Station), Democratic People''s Republic of Korea') ON CONFLICT DO NOTHING");

        $this->addSql("INSERT INTO source (code, name) VALUES ('AB', 'Arab Satellite Communications Organization') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ABS', 'Asia Broadcast Satellite') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('AC', 'Asia Satellite Telecommunications Company (ASIASAT)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ALG', 'Algeria') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ANG', 'Angola') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ARGN', 'Argentina') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ASRA', 'Austria') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('AUS', 'Australia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('AZER', 'Azerbaijan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('BEL', 'Belgium') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('BELA', 'Belarus') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('BERM', 'Bermuda') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('BGD', 'Peoples Republic of Bangladesh') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('BHUT', 'Kingdom of Bhutan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('BOL', 'Bolivia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('BRAZ', 'Brazil') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('BUL', 'Bulgaria') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('CA', 'Canada') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('CHBZ', 'China/Brazil') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('CHLE', 'Chile') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('CIS', 'Commonwealth of Independent States (former USSR)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('COL', 'Colombia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('CRI', 'Republic of Costa Rica') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('CZCH', 'Czech Republic (former Czechoslovakia)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('DEN', 'Denmark') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ECU', 'Ecuador') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('EGYP', 'Egypt') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ESA', 'European Space Agency') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ESRO', 'European Space Research Organization') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('EST', 'Estonia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('EUME', 'European Organization for the') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('EUTE', 'European Telecommunications Satellite Organization (EUTELSAT)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('FGER', 'France/Germany') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('FIN', 'Finland') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('FR', 'France') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('FRIT', 'France/Italy') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('GER', 'Germany') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('GHA', 'Republic of Ghana') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('GLOB', 'Globalstar') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('GREC', 'Greece') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('GRSA', 'Greece/Saudi Arabia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('HUN', 'Hungary') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('IM', 'International Mobile Satellite Organization (INMARSAT)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('IND', 'India') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('INDO', 'Indonesia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('IRAN', 'Iran') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('IRAQ', 'Iraq') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('IRID', 'Iridium') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ISRA', 'Israel') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ISRO', 'Indian Space Research Organisation') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ISS', 'International Space Station') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('IT', 'Italy') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ITSO', 'International Telecommunications Satellite Organization (INTELSAT)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('JPN', 'Japan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('KAZ', 'Kazakhstan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('KEN', 'Republic of Kenya') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('LAOS', 'Laos') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('LTU', 'Lithuania') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('LUXE', 'Luxembourg') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('MA', 'Morroco') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('MALA', 'Malaysia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('MEX', 'Mexico') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('MNG', 'Mongolia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('NATO', 'North Atlantic Treaty Organization') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('NEP', 'Federal Democratic Republic of Nepal') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('NETH', 'Netherlands') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('NICO', 'New ICO') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('NIG', 'Nigeria') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('NKOR', 'Democratic People''s Republic of Korea') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('NOR', 'Norway') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('NZ', 'New Zealand') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('O3B', 'O3b Networks') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ORB', 'ORBCOMM') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('PAKI', 'Pakistan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('PERU', 'Peru') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('POL', 'Poland') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('POR', 'Portugal') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('PRC', 'People''s Republic of China') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('PRES', 'People''s Republic of China/European Space Agency') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('QATR', 'State of Qatar') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('RASC', 'RascomStar-QAF') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ROC', 'Taiwan (Republic of China)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('ROM', 'Romania') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('RP', 'Philippines (Republic of the Philippines)') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('RWA', 'Republic of Rwanda') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SAFR', 'South Africa') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SAUD', 'Saudi Arabia') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SDN', 'Republic of Sudan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SEAL', 'Sea Launch') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SES', 'SES') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SGJP', 'Singapore/Japan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SING', 'Singapore') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SKOR', 'Republic of Korea') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SPN', 'Spain') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SRI', 'Democratic Socialist Republic of Sri Lanka') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('STCT', 'Singapore/Taiwan') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SWED', 'Sweden') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('SWTZ', 'Switzerland') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('THAI', 'Thailand') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('TMMC', 'Turkmenistan/Monaco') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('TURK', 'Turkey') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('UAE', 'United Arab Emirates') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('UK', 'United Kingdom') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('UKR', 'Ukraine') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('UNK', 'Unknown') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('URY', 'Uruguay') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('US', 'United States') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('USBZ', 'United States/Brazil') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('VENZ', 'Venezuela') ON CONFLICT DO NOTHING");
        $this->addSql("INSERT INTO source (code, name) VALUES ('VTNM', 'Vietnam') ON CONFLICT DO NOTHING");
    }

    /**
     * @inheritDoc
     */
    public function down(Schema $schema) : void
    {
    }
}
