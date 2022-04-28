<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428102928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client_apv (id INT AUTO_INCREMENT NOT NULL, compte_afaire VARCHAR(255) NOT NULL, compte_event VARCHAR(255) NOT NULL, compte_dernier_event VARCHAR(255) NOT NULL, numero_fiche INT NOT NULL, libelle_civilite VARCHAR(255) DEFAULT NULL, proprite_actuel_vehicule VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) DEFAULT NULL, num_and_name_voie VARCHAR(255) DEFAULT NULL, complement_adress_one VARCHAR(255) DEFAULT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, telephone_domicile VARCHAR(255) DEFAULT NULL, telephone_portable VARCHAR(255) DEFAULT NULL, telephone_job VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, date_mise_circulation VARCHAR(255) DEFAULT NULL, date_achat VARCHAR(255) DEFAULT NULL, date_dernier_event VARCHAR(255) DEFAULT NULL, libelle_marq VARCHAR(255) DEFAULT NULL, libelle_model VARCHAR(255) DEFAULT NULL, version VARCHAR(255) DEFAULT NULL, vin VARCHAR(255) DEFAULT NULL, immatriculation VARCHAR(255) DEFAULT NULL, type_prospect VARCHAR(255) DEFAULT NULL, kilometrage INT DEFAULT NULL, libelle_energie VARCHAR(255) DEFAULT NULL, vendeur_vn VARCHAR(255) DEFAULT NULL, vendeur_vo VARCHAR(255) DEFAULT NULL, commentaire_facturation VARCHAR(255) DEFAULT NULL, type_vnvo VARCHAR(255) DEFAULT NULL, numero_dossier_vnvo VARCHAR(255) DEFAULT NULL, intermediaire_vente_vn VARCHAR(255) DEFAULT NULL, date_evenement VARCHAR(255) DEFAULT NULL, origine_evenement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE client_apv');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
