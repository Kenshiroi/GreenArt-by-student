<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221021165438 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, date_commande DATETIME NOT NULL, adresse_facturation LONGTEXT NOT NULL, adresse_livraison LONGTEXT NOT NULL, prix_livraison DOUBLE PRECISION NOT NULL, prix_produits DOUBLE PRECISION NOT NULL, payment_method LONGTEXT NOT NULL, INDEX IDX_6EEAA67D79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire_modele (id_modele INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, text_commentaire LONGTEXT NOT NULL, date_commentaire DATETIME NOT NULL, PRIMARY KEY(id_modele)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE createur (id INT AUTO_INCREMENT NOT NULL, nom_createur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cree_par (id_modele INT NOT NULL, id_createur INT NOT NULL, PRIMARY KEY(id_modele, id_createur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modele (id INT AUTO_INCREMENT NOT NULL, nom_modele VARCHAR(255) NOT NULL, image_modele LONGTEXT NOT NULL, description_modele LONGTEXT NOT NULL, date_ajout DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_commande (id_variante INT NOT NULL, id_commande INT NOT NULL, quantite INT NOT NULL, PRIMARY KEY(id_variante, id_commande)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, pseudo_user VARCHAR(255) NOT NULL, image_user LONGTEXT DEFAULT NULL, password_user LONGTEXT NOT NULL, mail_user VARCHAR(255) NOT NULL, confirm_user TINYINT(1) NOT NULL, right_user INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE variante (id INT AUTO_INCREMENT NOT NULL, nom_variante VARCHAR(255) NOT NULL, prix_variante DOUBLE PRECISION NOT NULL, prix_promo_variante DOUBLE PRECISION DEFAULT NULL, cara_variante LONGTEXT NOT NULL, id_modele INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D79F37AE5 FOREIGN KEY (id_user_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D79F37AE5');
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
