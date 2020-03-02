<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200302095937 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE tbl_quizz ADD categories_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tbl_quizz ADD CONSTRAINT FK_D213DD22A21214B7 FOREIGN KEY (categories_id) REFERENCES tbl_category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_D213DD22A21214B7 ON tbl_quizz (categories_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE tbl_quizz DROP CONSTRAINT FK_D213DD22A21214B7');
        $this->addSql('DROP INDEX IDX_D213DD22A21214B7');
        $this->addSql('ALTER TABLE tbl_quizz DROP categories_id');
    }
}
