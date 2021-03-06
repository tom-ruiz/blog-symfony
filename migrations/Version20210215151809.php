<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210215151809 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }
    public function isTransactional(): bool
{
    return false;
}

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE articles_key_words (articles_id INT NOT NULL, key_words_id INT NOT NULL, INDEX IDX_6E800ECF1EBAF6CC (articles_id), INDEX IDX_6E800ECFB598DE74 (key_words_id), PRIMARY KEY(articles_id, key_words_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE articles_categories (articles_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_DE004A0E1EBAF6CC (articles_id), INDEX IDX_DE004A0EA21214B7 (categories_id), PRIMARY KEY(articles_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE articles_key_words ADD CONSTRAINT FK_6E800ECF1EBAF6CC FOREIGN KEY (articles_id) REFERENCES articles (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE articles_key_words ADD CONSTRAINT FK_6E800ECFB598DE74 FOREIGN KEY (key_words_id) REFERENCES key_words (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE articles_categories ADD CONSTRAINT FK_DE004A0E1EBAF6CC FOREIGN KEY (articles_id) REFERENCES articles (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE articles_categories ADD CONSTRAINT FK_DE004A0EA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE articles_key_words');
        $this->addSql('DROP TABLE articles_categories');
    }
}
