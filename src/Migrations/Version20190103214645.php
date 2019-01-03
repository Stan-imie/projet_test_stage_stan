<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190103214645 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE user_storie_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE user_storie (id INT NOT NULL, date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, action_type VARCHAR(255) NOT NULL, befor_event_serializer JSON NOT NULL, after_event_serializer JSON NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN user_storie.befor_event_serializer IS \'(DC2Type:json_array)\'');
        $this->addSql('COMMENT ON COLUMN user_storie.after_event_serializer IS \'(DC2Type:json_array)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE user_storie_id_seq CASCADE');
        $this->addSql('DROP TABLE user_storie');
    }
}
