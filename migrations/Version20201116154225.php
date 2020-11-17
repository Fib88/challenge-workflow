<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201116154225 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, ticket_id_id INT NOT NULL, content VARCHAR(255) NOT NULL, private TINYINT(1) NOT NULL, INDEX IDX_9474526C9D86650F (user_id_id), INDEX IDX_9474526C5774FDDC (ticket_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, title VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, timestamp DATETIME NOT NULL, priority INT NOT NULL, INDEX IDX_97A0ADA39D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C5774FDDC FOREIGN KEY (ticket_id_id) REFERENCES ticket (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA39D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD firstname VARCHAR(255) NOT NULL, ADD lastname VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C5774FDDC');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('ALTER TABLE user DROP firstname, DROP lastname');
    }
}
