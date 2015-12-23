<?php

namespace DoctrineORMModule\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150622073532 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE addresss (id INT AUTO_INCREMENT NOT NULL, patio_type_id INT DEFAULT NULL, federative_unit_id INT DEFAULT NULL, customer_id INT DEFAULT NULL, patio VARCHAR(45) NOT NULL, number INT NOT NULL, complement VARCHAR(10) DEFAULT NULL, neighborhood VARCHAR(45) NOT NULL, city VARCHAR(45) NOT NULL, zip_code INT NOT NULL, INDEX IDX_81BC32D23282E858 (patio_type_id), INDEX IDX_81BC32D245EB235A (federative_unit_id), INDEX IDX_81BC32D29395C3F3 (customer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE federative_units (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patio_types (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customers (id INT AUTO_INCREMENT NOT NULL, customer_type_id INT DEFAULT NULL, name VARCHAR(45) NOT NULL, birth_date DATE NOT NULL, gender VARCHAR(1) NOT NULL, cpf VARCHAR(11) NOT NULL, email VARCHAR(45) DEFAULT NULL, phone_1 VARCHAR(16) NOT NULL, phone_2 VARCHAR(16) DEFAULT NULL, registration_date DATETIME NOT NULL, modification_date DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_62534E213E3E11F0 (cpf), INDEX IDX_62534E21D991282D (customer_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer_types (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE addresss ADD CONSTRAINT FK_81BC32D23282E858 FOREIGN KEY (patio_type_id) REFERENCES patio_types (id)');
        $this->addSql('ALTER TABLE addresss ADD CONSTRAINT FK_81BC32D245EB235A FOREIGN KEY (federative_unit_id) REFERENCES federative_units (id)');
        $this->addSql('ALTER TABLE addresss ADD CONSTRAINT FK_81BC32D29395C3F3 FOREIGN KEY (customer_id) REFERENCES customers (id)');
        $this->addSql('ALTER TABLE customers ADD CONSTRAINT FK_62534E21D991282D FOREIGN KEY (customer_type_id) REFERENCES customer_types (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE addresss DROP FOREIGN KEY FK_81BC32D245EB235A');
        $this->addSql('ALTER TABLE addresss DROP FOREIGN KEY FK_81BC32D23282E858');
        $this->addSql('ALTER TABLE addresss DROP FOREIGN KEY FK_81BC32D29395C3F3');
        $this->addSql('ALTER TABLE customers DROP FOREIGN KEY FK_62534E21D991282D');
        $this->addSql('DROP TABLE addresss');
        $this->addSql('DROP TABLE federative_units');
        $this->addSql('DROP TABLE patio_types');
        $this->addSql('DROP TABLE customers');
        $this->addSql('DROP TABLE customer_types');
    }
}
