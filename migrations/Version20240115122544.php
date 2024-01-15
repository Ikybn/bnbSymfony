<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240115122544 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE review (id INT NOT NULL, traveller_id INT NOT NULL, rooms_id INT NOT NULL, title VARCHAR(255) NOT NULL, comment TEXT NOT NULL, rating INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_794381C6E58489A0 ON review (traveller_id)');
        $this->addSql('CREATE INDEX IDX_794381C68E2368AB ON review (rooms_id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6E58489A0 FOREIGN KEY (traveller_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C68E2368AB FOREIGN KEY (rooms_id) REFERENCES room (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE review DROP CONSTRAINT FK_794381C6E58489A0');
        $this->addSql('ALTER TABLE review DROP CONSTRAINT FK_794381C68E2368AB');
        $this->addSql('DROP TABLE review');
    }
}
