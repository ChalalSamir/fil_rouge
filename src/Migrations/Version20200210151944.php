<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200210151944 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE access_metro_rer DROP x, DROP y, DROP annonce_sonore_prochain_passage, DROP annonce_visuelle_prochain_passage, DROP annonce_sonore_situations_perturbees, DROP annonce_visuelle_situations_perturbees, DROP paqt, DROP accesibilite_quai_train, DROP latitude, DROP longitude, DROP code_insee');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE access_metro_rer ADD x INT DEFAULT NULL, ADD y INT DEFAULT NULL, ADD annonce_sonore_prochain_passage INT NOT NULL, ADD annonce_visuelle_prochain_passage INT DEFAULT NULL, ADD annonce_sonore_situations_perturbees INT DEFAULT NULL, ADD annonce_visuelle_situations_perturbees INT DEFAULT NULL, ADD paqt INT DEFAULT NULL, ADD accesibilite_quai_train INT DEFAULT NULL, ADD latitude DOUBLE PRECISION NOT NULL, ADD longitude DOUBLE PRECISION NOT NULL, ADD code_insee INT DEFAULT NULL');
    }
}
