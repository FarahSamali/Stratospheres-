<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230220164336 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement ADD particiption_id INT NOT NULL');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E1E27A3D5 FOREIGN KEY (particiption_id) REFERENCES participation (id)');
        $this->addSql('CREATE INDEX IDX_B26681E1E27A3D5 ON evenement (particiption_id)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24FFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id)');
        $this->addSql('CREATE INDEX IDX_AB55E24FFD02F13 ON participation (evenement_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E1E27A3D5');
        $this->addSql('DROP INDEX IDX_B26681E1E27A3D5 ON evenement');
        $this->addSql('ALTER TABLE evenement DROP particiption_id');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24FFD02F13');
        $this->addSql('DROP INDEX IDX_AB55E24FFD02F13 ON participation');
    }
}
