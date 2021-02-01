<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210201011843 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FKefqw7nsur06wyld1gavn3ic6b');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FKng1j875nyvy2ajwns328t9ddu');
        $this->addSql('ALTER TABLE game CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318C12EB0A51 FOREIGN KEY (score_id) REFERENCES score (id)');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK7jaqbm9p4prg7n91dd1uabrvj');
        $this->addSql('ALTER TABLE question CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494E12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE quizz DROP FOREIGN KEY FK3k8gf7ybuvr8yrreixdo03mme');
        $this->addSql('ALTER TABLE quizz CHANGE question_id question_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE quizz ADD CONSTRAINT FK_7C77973D1E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE user CHANGE role_id role_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318CA76ED395');
        $this->addSql('ALTER TABLE game DROP FOREIGN KEY FK_232B318C12EB0A51');
        $this->addSql('ALTER TABLE game CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FKefqw7nsur06wyld1gavn3ic6b FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FKng1j875nyvy2ajwns328t9ddu FOREIGN KEY (score_id) REFERENCES score (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494E12469DE2');
        $this->addSql('ALTER TABLE question CHANGE category_id category_id INT NOT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK7jaqbm9p4prg7n91dd1uabrvj FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE quizz DROP FOREIGN KEY FK_7C77973D1E27F6BF');
        $this->addSql('ALTER TABLE quizz CHANGE question_id question_id INT NOT NULL');
        $this->addSql('ALTER TABLE quizz ADD CONSTRAINT FK3k8gf7ybuvr8yrreixdo03mme FOREIGN KEY (question_id) REFERENCES question (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user CHANGE role_id role_id INT NOT NULL');
    }
}
