<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190314015740 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            'sqlite' !== $this->connection->getDatabasePlatform()->getName(),
            'Migration can only be executed safely on \'sqlite\'.'
        );

        $this->addSql(
            'CREATE TABLE course (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, section INTEGER NOT NULL, number INTEGER NOT NULL)'
        );
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            'sqlite' !== $this->connection->getDatabasePlatform()->getName(),
            'Migration can only be executed safely on \'sqlite\'.'
        );

        $this->addSql('DROP TABLE course');
    }
}
