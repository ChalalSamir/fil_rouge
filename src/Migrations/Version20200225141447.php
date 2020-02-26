<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200225141447 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE travaux_en_cours ADD picto_type_transport VARCHAR(255) NOT NULL, CHANGE latitudde latitude DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE access_metro ADD picto_type_transport VARCHAR(255) NOT NULL, ADD picto_numero_ligne VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE access_rer ADD picto_type_transport VARCHAR(255) NOT NULL, ADD picto_numero_ligne VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE access_bus ADD picto_type_transport VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE access_bus DROP picto_type_transport');
        $this->addSql('ALTER TABLE access_metro DROP picto_type_transport, DROP picto_numero_ligne');
        $this->addSql('ALTER TABLE access_rer DROP picto_type_transport, DROP picto_numero_ligne');
        $this->addSql('ALTER TABLE travaux_en_cours DROP picto_type_transport, CHANGE latitude latitudde DOUBLE PRECISION NOT NULL');
    }
}
