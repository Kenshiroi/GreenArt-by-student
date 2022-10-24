<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221024115022 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, date_commande DATETIME NOT NULL, adresse_facturation LONGTEXT NOT NULL, adresse_livraison LONGTEXT NOT NULL, prix_livraison DOUBLE PRECISION NOT NULL, prix_produits DOUBLE PRECISION NOT NULL, payment_method LONGTEXT NOT NULL, INDEX IDX_6EEAA67D79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire_modele (id_modele_id INT NOT NULL, id_user_id INT NOT NULL, text_commentaire LONGTEXT NOT NULL, date_commentaire DATETIME NOT NULL, INDEX IDX_48655DF2C210B2D (id_modele_id), INDEX IDX_48655DF79F37AE5 (id_user_id), PRIMARY KEY(id_modele_id, id_user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE createur (id INT AUTO_INCREMENT NOT NULL, nom_createur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cree_par (id_modele_id INT NOT NULL, id_createur_id INT NOT NULL, INDEX IDX_4C28E2B52C210B2D (id_modele_id), INDEX IDX_4C28E2B56BB0CC12 (id_createur_id), PRIMARY KEY(id_modele_id, id_createur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modele (id INT AUTO_INCREMENT NOT NULL, nom_modele VARCHAR(255) NOT NULL, image_modele LONGTEXT NOT NULL, description_modele LONGTEXT NOT NULL, date_ajout DATETIME NOT NULL, fichier_modele LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_commande (id_variante_id INT NOT NULL, id_commande_id INT NOT NULL, quantite INT NOT NULL, INDEX IDX_66A49228CC43AF41 (id_variante_id), INDEX IDX_66A492289AF8E3A3 (id_commande_id), PRIMARY KEY(id_variante_id, id_commande_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, pseudo_user VARCHAR(255) NOT NULL, image_user LONGTEXT DEFAULT NULL, password_user LONGTEXT NOT NULL, mail_user VARCHAR(255) NOT NULL, confirm_user TINYINT(1) NOT NULL, right_user INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE variante (id INT AUTO_INCREMENT NOT NULL, id_modele_id INT NOT NULL, nom_variante VARCHAR(255) NOT NULL, prix_variante DOUBLE PRECISION NOT NULL, prix_promo_variante DOUBLE PRECISION DEFAULT NULL, cara_variante LONGTEXT NOT NULL, INDEX IDX_474CE6B02C210B2D (id_modele_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D79F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE commentaire_modele ADD CONSTRAINT FK_48655DF2C210B2D FOREIGN KEY (id_modele_id) REFERENCES modele (id)');
        $this->addSql('ALTER TABLE commentaire_modele ADD CONSTRAINT FK_48655DF79F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE cree_par ADD CONSTRAINT FK_4C28E2B52C210B2D FOREIGN KEY (id_modele_id) REFERENCES modele (id)');
        $this->addSql('ALTER TABLE cree_par ADD CONSTRAINT FK_4C28E2B56BB0CC12 FOREIGN KEY (id_createur_id) REFERENCES createur (id)');
        $this->addSql('ALTER TABLE sous_commande ADD CONSTRAINT FK_66A49228CC43AF41 FOREIGN KEY (id_variante_id) REFERENCES variante (id)');
        $this->addSql('ALTER TABLE sous_commande ADD CONSTRAINT FK_66A492289AF8E3A3 FOREIGN KEY (id_commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE variante ADD CONSTRAINT FK_474CE6B02C210B2D FOREIGN KEY (id_modele_id) REFERENCES modele (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D79F37AE5');
        $this->addSql('ALTER TABLE commentaire_modele DROP FOREIGN KEY FK_48655DF2C210B2D');
        $this->addSql('ALTER TABLE commentaire_modele DROP FOREIGN KEY FK_48655DF79F37AE5');
        $this->addSql('ALTER TABLE cree_par DROP FOREIGN KEY FK_4C28E2B52C210B2D');
        $this->addSql('ALTER TABLE cree_par DROP FOREIGN KEY FK_4C28E2B56BB0CC12');
        $this->addSql('ALTER TABLE sous_commande DROP FOREIGN KEY FK_66A49228CC43AF41');
        $this->addSql('ALTER TABLE sous_commande DROP FOREIGN KEY FK_66A492289AF8E3A3');
        $this->addSql('ALTER TABLE variante DROP FOREIGN KEY FK_474CE6B02C210B2D');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commentaire_modele');
        $this->addSql('DROP TABLE createur');
        $this->addSql('DROP TABLE cree_par');
        $this->addSql('DROP TABLE modele');
        $this->addSql('DROP TABLE sous_commande');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE variante');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
