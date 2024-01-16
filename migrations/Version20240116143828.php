<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240116143828 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking DROP CONSTRAINT fk_e00ceddee58489a0');
        $this->addSql('DROP INDEX idx_e00ceddee58489a0');
        $this->addSql('ALTER TABLE booking ALTER room_id SET NOT NULL');
        $this->addSql('ALTER TABLE booking RENAME COLUMN traveller_id TO traveler_id');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDE59BBE8A3 FOREIGN KEY (traveler_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_E00CEDDE59BBE8A3 ON booking (traveler_id)');
        $this->addSql('ALTER TABLE review DROP CONSTRAINT fk_794381c6e58489a0');
        $this->addSql('DROP INDEX idx_794381c6e58489a0');
        $this->addSql('ALTER TABLE review ALTER title TYPE VARCHAR(50)');
        $this->addSql('ALTER TABLE review RENAME COLUMN traveller_id TO traveler_id');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C659BBE8A3 FOREIGN KEY (traveler_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_794381C659BBE8A3 ON review (traveler_id)');
        $this->addSql('ALTER TABLE "user" ADD is_verified BOOLEAN NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "user" DROP is_verified');
        $this->addSql('ALTER TABLE booking DROP CONSTRAINT FK_E00CEDDE59BBE8A3');
        $this->addSql('DROP INDEX IDX_E00CEDDE59BBE8A3');
        $this->addSql('ALTER TABLE booking ALTER room_id DROP NOT NULL');
        $this->addSql('ALTER TABLE booking RENAME COLUMN traveler_id TO traveller_id');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT fk_e00ceddee58489a0 FOREIGN KEY (traveller_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_e00ceddee58489a0 ON booking (traveller_id)');
        $this->addSql('ALTER TABLE review DROP CONSTRAINT FK_794381C659BBE8A3');
        $this->addSql('DROP INDEX IDX_794381C659BBE8A3');
        $this->addSql('ALTER TABLE review ALTER title TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE review RENAME COLUMN traveler_id TO traveller_id');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT fk_794381c6e58489a0 FOREIGN KEY (traveller_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_794381c6e58489a0 ON review (traveller_id)');
    }
}
