<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190816075223 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D6496C6E55B5 (nom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, pseudo TEXT NOT NULL, pwd TEXT NOT NULL, role INT NOT NULL, dateDentree DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, adresseMail TINYTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE evenements CHANGE heure_debut heure_debut TIME DEFAULT NULL');
        $this->addSql('ALTER TABLE ludotheque CHANGE fullnom fullnom VARCHAR(100) DEFAULT NULL, CHANGE img img VARCHAR(20) DEFAULT NULL, CHANGE nbJmin nbJmin SMALLINT DEFAULT 2 NOT NULL, CHANGE nbJmax nbJmax SMALLINT DEFAULT 5 NOT NULL, CHANGE rate_st rate_st INT NOT NULL, CHANGE rate_ta rate_ta INT NOT NULL, CHANGE rate_ch rate_ch INT NOT NULL, CHANGE rate_co rate_co INT NOT NULL, CHANGE dominance dominance INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE utilisateurs');
        $this->addSql('ALTER TABLE evenements CHANGE heure_debut heure_debut TIME NOT NULL');
        $this->addSql('ALTER TABLE ludotheque CHANGE fullnom fullnom VARCHAR(50) DEFAULT NULL COLLATE utf8_roman_ci, CHANGE img img VARCHAR(20) NOT NULL COLLATE utf8_roman_ci, CHANGE nbJmin nbJmin TINYINT(1) DEFAULT \'2\' NOT NULL, CHANGE nbJmax nbJmax TINYINT(1) DEFAULT \'5\' NOT NULL, CHANGE rate_st rate_st INT DEFAULT 0 NOT NULL, CHANGE rate_ta rate_ta INT DEFAULT 0 NOT NULL, CHANGE rate_ch rate_ch INT DEFAULT 0 NOT NULL, CHANGE rate_co rate_co INT DEFAULT 0 NOT NULL, CHANGE dominance dominance TINYINT(1) DEFAULT NULL');
    }
}
