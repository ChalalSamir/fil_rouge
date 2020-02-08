<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191219194711 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE access_bus (id INT AUTO_INCREMENT NOT NULL, nom_arret VARCHAR(63) DEFAULT NULL, code_insee INT DEFAULT NULL, departement INT DEFAULT NULL, x INT DEFAULT NULL, y INT DEFAULT NULL, accessibilite_ufr VARCHAR(1) DEFAULT NULL, annonce_sonore_prochain_passage INT DEFAULT NULL, annonce_visuelle_prochain_passage INT DEFAULT NULL, annonce_sonore_situations_perturbees INT DEFAULT NULL, annonce_visuelle_situations_perturbees INT DEFAULT NULL, code_stif BIGINT DEFAULT NULL, coordonnees VARCHAR(30) DEFAULT NULL, sens VARCHAR(1) DEFAULT NULL, ligne VARCHAR(3) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE access_bus');
    }
}
