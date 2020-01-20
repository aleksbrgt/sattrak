<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20191216225231 extends AbstractMigration
{
    /**
     * @inheritDoc
     */
    public function getDescription() : string
    {
        return 'Create db structure';
    }

    /**
     * @inheritDoc
     */
    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE catalog_entry (id UUID NOT NULL, source_code VARCHAR(10) DEFAULT NULL, launch_site_code VARCHAR(10) NOT NULL, raw TEXT NOT NULL, international_designator VARCHAR(255) NOT NULL, norad_catalog_number VARCHAR(255) NOT NULL, names VARCHAR(255) NOT NULL, has_payload BOOLEAN NOT NULL, operational_status VARCHAR(10) DEFAULT NULL, launch_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, decay_date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, orbital_status VARCHAR(10) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, orbital_information_orbital_period NUMERIC(6, 1) DEFAULT NULL, orbital_information_inclination NUMERIC(4, 1) DEFAULT NULL, orbital_information_apogee INT DEFAULT NULL, orbital_information_perigee INT DEFAULT NULL, orbital_information_radar_cross_section NUMERIC(7, 4) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9232FCC993ADE81E ON catalog_entry (international_designator)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9232FCC9EB8BD7F6 ON catalog_entry (norad_catalog_number)');
        $this->addSql('CREATE INDEX IDX_9232FCC9769FB59B ON catalog_entry (source_code)');
        $this->addSql('CREATE INDEX IDX_9232FCC944860D58 ON catalog_entry (launch_site_code)');
        $this->addSql('COMMENT ON COLUMN catalog_entry.operational_status IS \'(DC2Type:catalog_entry_operational_status)\'');
        $this->addSql('COMMENT ON COLUMN catalog_entry.orbital_status IS \'(DC2Type:catalog_entry_orbital_status)\'');
        $this->addSql('CREATE TABLE launch_site (code VARCHAR(10) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(code))');
        $this->addSql('CREATE TABLE two_line_element (id UUID NOT NULL, catalog_entry_id UUID NOT NULL, raw TEXT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, first_line_epoch_year VARCHAR(4) NOT NULL, first_line_epoch_day NUMERIC(11, 8) NOT NULL, first_line_first_time_mean_motion_derivative NUMERIC(9, 8) NOT NULL, first_line_second_time_mean_motion_derivative NUMERIC(9, 8) NOT NULL, first_line_drag NUMERIC(10, 9) NOT NULL, first_line_set_number INT NOT NULL, first_line_checksum INT NOT NULL, second_line_inclination NUMERIC(7, 4) NOT NULL, second_line_ascending_node NUMERIC(7, 4) NOT NULL, second_line_eccentricity NUMERIC(8, 7) NOT NULL, second_line_argument_of_perigee NUMERIC(7, 4) NOT NULL, second_line_mean_anomaly NUMERIC(7, 4) NOT NULL, second_line_mean_motion NUMERIC(10, 8) NOT NULL, second_line_revolution_number INT NOT NULL, second_line_checksum INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_133A1D788E1975C ON two_line_element (catalog_entry_id)');
        $this->addSql('CREATE TABLE data_source (id UUID NOT NULL, name VARCHAR(255) NOT NULL, description TEXT DEFAULT NULL, provider SMALLINT NOT NULL, type SMALLINT NOT NULL, status SMALLINT NOT NULL, url TEXT NOT NULL, last_checked TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN data_source.provider IS \'(DC2Type:datasource_provider)\'');
        $this->addSql('COMMENT ON COLUMN data_source.type IS \'(DC2Type:datasource_type)\'');
        $this->addSql('COMMENT ON COLUMN data_source.status IS \'(DC2Type:datasource_status)\'');
        $this->addSql('CREATE TABLE source (code VARCHAR(10) NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(code))');
        $this->addSql('ALTER TABLE catalog_entry ADD CONSTRAINT FK_9232FCC9769FB59B FOREIGN KEY (source_code) REFERENCES source (code) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE catalog_entry ADD CONSTRAINT FK_9232FCC944860D58 FOREIGN KEY (launch_site_code) REFERENCES launch_site (code) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE two_line_element ADD CONSTRAINT FK_133A1D788E1975C FOREIGN KEY (catalog_entry_id) REFERENCES catalog_entry (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    /**
     * @inheritDoc
     */
    public function down(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE two_line_element DROP CONSTRAINT FK_133A1D788E1975C');
        $this->addSql('ALTER TABLE catalog_entry DROP CONSTRAINT FK_9232FCC944860D58');
        $this->addSql('ALTER TABLE catalog_entry DROP CONSTRAINT FK_9232FCC9769FB59B');
        $this->addSql('DROP TABLE catalog_entry');
        $this->addSql('DROP TABLE launch_site');
        $this->addSql('DROP TABLE two_line_element');
        $this->addSql('DROP TABLE data_source');
        $this->addSql('DROP TABLE source');
    }
}
