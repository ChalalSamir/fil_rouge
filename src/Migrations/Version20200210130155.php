<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200210130155 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE access_metro_rer ADD code_insee INT DEFAULT NULL');

        $this->addSql('ALTER TABLE access_bus ADD latitude DOUBLE PRECISION NOT NULL, ADD longitude DOUBLE PRECISION NOT NULL');
        $this->addSql('UPDATE  access_bus SET latitude = SUBSTR(coordonnees, 1, (LOCATE(",", coordonnees) -1))');
        $this->addSql('UPDATE  access_bus SET longitude = SUBSTR(coordonnees, (LOCATE(",", coordonnees) +1))');
        $this->addSql('ALTER TABLE access_bus DROP coordonnees');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE access_bus ADD coordonnees VARCHAR(30) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci');
        $this->addSql('UPDATE access_bus SET coordoonees = CONCAT(latitude , "," , longitude)');
        $this->addSql('ALTER TABLE access_bus DROP latitude, DROP longitude');
        $this->addSql('ALTER TABLE access_metro_rer DROP code_insee');
    }
}
