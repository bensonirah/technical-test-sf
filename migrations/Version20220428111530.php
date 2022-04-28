<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428111530 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client_apv CHANGE compte_afaire compte_afaire VARCHAR(255) DEFAULT NULL, CHANGE compte_event compte_event VARCHAR(255) DEFAULT NULL, CHANGE compte_dernier_event compte_dernier_event VARCHAR(255) DEFAULT NULL, CHANGE numero_fiche numero_fiche INT DEFAULT NULL, CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE code_postal code_postal INT DEFAULT NULL, CHANGE ville ville VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client_apv CHANGE compte_afaire compte_afaire VARCHAR(255) NOT NULL, CHANGE compte_event compte_event VARCHAR(255) NOT NULL, CHANGE compte_dernier_event compte_dernier_event VARCHAR(255) NOT NULL, CHANGE numero_fiche numero_fiche INT NOT NULL, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE code_postal code_postal INT NOT NULL, CHANGE ville ville VARCHAR(255) NOT NULL');
    }
}
