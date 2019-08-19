<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190819084021 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('CREATE TABLE fiche_fournisseur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, social_raison_social VARCHAR(255) NOT NULL, social_adresse VARCHAR(255) NOT NULL, social_code_postal INTEGER NOT NULL, social_pays VARCHAR(255) NOT NULL, social_ville VARCHAR(255) NOT NULL, social_tel VARCHAR(255) NOT NULL, social_email VARCHAR(255) NOT NULL, social_siren VARCHAR(255) NOT NULL, social_ville_enregistrement VARCHAR(255) NOT NULL, social_tvaintracom VARCHAR(255) NOT NULL, social_nrcs VARCHAR(255) NOT NULL, social_ncnuf VARCHAR(255) NOT NULL, commande_interlocuteur VARCHAR(255) DEFAULT NULL, commande_adresse VARCHAR(255) DEFAULT NULL, commande_ville VARCHAR(255) DEFAULT NULL, commande_code_postal VARCHAR(255) DEFAULT NULL, commande_pays VARCHAR(255) DEFAULT NULL, commande_tel VARCHAR(255) DEFAULT NULL, commande_email VARCHAR(255) DEFAULT NULL, facturation_interlocuteur VARCHAR(255) DEFAULT NULL, facturation_adresse VARCHAR(255) DEFAULT NULL, facturation_ville VARCHAR(255) DEFAULT NULL, facturation_code_postal VARCHAR(255) DEFAULT NULL, facturation_pays VARCHAR(255) DEFAULT NULL, facturation_tel VARCHAR(255) DEFAULT NULL, facturation_email VARCHAR(255) DEFAULT NULL, facturation_cond_reglement CLOB DEFAULT NULL, rib VARCHAR(255) DEFAULT NULL, iban VARCHAR(255) DEFAULT NULL, bic VARCHAR(255) DEFAULT NULL, domiciliaction_bancaire VARCHAR(255) DEFAULT NULL, logistique_interlocuteur VARCHAR(255) DEFAULT NULL, logistique_tel VARCHAR(255) DEFAULT NULL, logistique_email VARCHAR(255) DEFAULT NULL, avis_reserve_interlocuteur VARCHAR(255) DEFAULT NULL, avis_reserve_tel VARCHAR(255) DEFAULT NULL, avis_reserve_emai VARCHAR(255) DEFAULT NULL, edi_interlocuteur VARCHAR(255) DEFAULT NULL, edi_tel VARCHAR(255) DEFAULT NULL, edi_email VARCHAR(255) DEFAULT NULL, edi_ean_commande VARCHAR(255) DEFAULT NULL, edi_ean_facture VARCHAR(255) DEFAULT NULL, edi_ean_livre VARCHAR(255) DEFAULT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE fiche_fournisseur');
    }
}
