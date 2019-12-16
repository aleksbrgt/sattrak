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
        return 'Add CatalogEntry, DataSource, LaunchSite, OperationalStatus, OrbitalStatus, Source and TLEs';
    }

    /**
     * @inheritDoc
     */
    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE operational_status (id UUID NOT NULL, code VARCHAR(10) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE catalog_entry (id UUID NOT NULL, orbital_status_id UUID NOT NULL, source_id UUID NOT NULL, launch_site_id UUID NOT NULL, raw TEXT NOT NULL, internal_designator VARCHAR(255) NOT NULL, norad_catalog_number VARCHAR(255) NOT NULL, names VARCHAR(255) NOT NULL, has_payload BOOLEAN NOT NULL, launch_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, decay_date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, orbital_information_orbital_period NUMERIC(6, 5) DEFAULT NULL, orbital_information_inclination NUMERIC(4, 1) DEFAULT NULL, orbital_information_apogee INT DEFAULT NULL, orbital_information_perigee INT DEFAULT NULL, orbital_information_radar_cross_section NUMERIC(7, 4) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9232FCC9749429A6 ON catalog_entry (internal_designator)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_9232FCC9EB8BD7F6 ON catalog_entry (norad_catalog_number)');
        $this->addSql('CREATE INDEX IDX_9232FCC9BAE87C5B ON catalog_entry (orbital_status_id)');
        $this->addSql('CREATE INDEX IDX_9232FCC9953C1C61 ON catalog_entry (source_id)');
        $this->addSql('CREATE INDEX IDX_9232FCC920019B5F ON catalog_entry (launch_site_id)');
        $this->addSql('CREATE TABLE launch_site (id UUID NOT NULL, code VARCHAR(10) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE two_line_element (id UUID NOT NULL, catalog_entry_id UUID NOT NULL, raw TEXT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, first_line_epoch_year VARCHAR(4) NOT NULL, first_line_epoch_day NUMERIC(11, 8) NOT NULL, first_line_first_time_mean_motion_derivative NUMERIC(9, 8) NOT NULL, first_line_second_time_mean_motion_derivative NUMERIC(9, 8) NOT NULL, first_line_drag NUMERIC(10, 9) NOT NULL, first_line_set_number INT NOT NULL, first_line_checksum INT NOT NULL, second_line_inclination NUMERIC(7, 4) NOT NULL, second_line_ascending_node NUMERIC(7, 4) NOT NULL, second_line_eccentricity NUMERIC(8, 7) NOT NULL, second_line_argument_of_perigee NUMERIC(7, 4) NOT NULL, second_line_mean_anomaly NUMERIC(7, 4) NOT NULL, second_line_mean_motion NUMERIC(10, 8) NOT NULL, second_line_revolution_number INT NOT NULL, second_line_checksum INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_133A1D788E1975C ON two_line_element (catalog_entry_id)');
        $this->addSql('CREATE TABLE data_source (id UUID NOT NULL, name VARCHAR(255) NOT NULL, description TEXT DEFAULT NULL, provider SMALLINT NOT NULL, type SMALLINT NOT NULL, status SMALLINT NOT NULL, url TEXT NOT NULL, last_checked TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN data_source.provider IS \'(DC2Type:datasource_provider)\'');
        $this->addSql('COMMENT ON COLUMN data_source.type IS \'(DC2Type:datasource_type)\'');
        $this->addSql('COMMENT ON COLUMN data_source.status IS \'(DC2Type:datasource_status)\'');
        $this->addSql('CREATE TABLE source (id UUID NOT NULL, code VARCHAR(10) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE orbital_status (id UUID NOT NULL, code VARCHAR(10) NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE catalog_entry ADD CONSTRAINT FK_9232FCC9BAE87C5B FOREIGN KEY (orbital_status_id) REFERENCES orbital_status (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE catalog_entry ADD CONSTRAINT FK_9232FCC9953C1C61 FOREIGN KEY (source_id) REFERENCES source (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE catalog_entry ADD CONSTRAINT FK_9232FCC920019B5F FOREIGN KEY (launch_site_id) REFERENCES launch_site (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE two_line_element ADD CONSTRAINT FK_133A1D788E1975C FOREIGN KEY (catalog_entry_id) REFERENCES catalog_entry (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    /**
     * @inheritDoc
     */
    public function down(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE two_line_element DROP CONSTRAINT FK_133A1D788E1975C');
        $this->addSql('ALTER TABLE catalog_entry DROP CONSTRAINT FK_9232FCC920019B5F');
        $this->addSql('ALTER TABLE catalog_entry DROP CONSTRAINT FK_9232FCC9953C1C61');
        $this->addSql('ALTER TABLE catalog_entry DROP CONSTRAINT FK_9232FCC9BAE87C5B');
        $this->addSql('DROP TABLE operational_status');
        $this->addSql('DROP TABLE catalog_entry');
        $this->addSql('DROP TABLE launch_site');
        $this->addSql('DROP TABLE two_line_element');
        $this->addSql('DROP TABLE data_source');
        $this->addSql('DROP TABLE source');
        $this->addSql('DROP TABLE orbital_status');
    }
}
