-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS mydb DEFAULT CHARACTER SET utf8 ;
USE mydb ;

-- -----------------------------------------------------
-- Table mydb.Cliente
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS mydb.Cliente (
  CPF CHAR(12) NOT NULL,
  Senha VARCHAR(45) NOT NULL,
  E_Mail VARCHAR(45) NOT NULL,
  N_inicial VARCHAR(18) NOT NULL,
  N_Meio VARCHAR(18) NOT NULL,
  D_Nascimento DATE NOT NULL,
  Contato_Tel FLOAT(13) NOT NULL,
  Endereco VARCHAR(45) NOT NULL,
  PRIMARY KEY (CPF),
  UNIQUE INDEX Senha_UNIQUE (Senha ASC),
  UNIQUE INDEX E_Mail_UNIQUE (E_Mail ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table mydb.Veiculo
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS mydb.Veiculo (
  Placa VARCHAR(7) NOT NULL,
  Modelo VARCHAR(25) NOT NULL,
  Marca VARCHAR(25) NOT NULL,
  Ano YEAR(4) NOT NULL,
  Cliente_CPF CHAR(12) NOT NULL,
  PRIMARY KEY (Placa, Cliente_CPF),
  INDEX fk_Veiculo_Cliente1_idx (Cliente_CPF ASC) ,
  CONSTRAINT fk_Veiculo_Cliente1
    FOREIGN KEY (Cliente_CPF)
    REFERENCES mydb.Cliente (CPF)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS mydb.Funcionario (
  cpf VARCHAR(14) NOT NULL,
  nome VARCHAR(45) NULL,
  endereco VARCHAR(45) NULL,
  PRIMARY KEY (cpf))
ENGINE = InnoDB;

-- Inserir Cliente Teste
-- -----------------------------------------------------
Insert Into Funcionario (cpf,nome,endereco) 
Value ('98765432109','Chazan','logo ali');

-- -----------------------------------------------------
-- Table `mydb`.`Orcamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS mydb.Orcamento (
  id_Orcamento INT NOT NULL AUTO_INCREMENT,
  Descricao_Servico VARCHAR(45) NOT NULL,
  Funcionario_cpf VARCHAR(14) NOT NULL,
  Veiculo_Placa VARCHAR(7) NOT NULL,
  Veiculo_Cliente_CPF CHAR(12) NOT NULL,
  PRIMARY KEY (id_Orcamento),
  INDEX fk_Orcameto_Funcionario1_idx (Funcionario_cpf ASC) ,
  INDEX fk_Orcameto_Veiculo1_idx (Veiculo_Placa ASC, Veiculo_Cliente_CPF ASC) ,
  CONSTRAINT fk_Orcameto_Funcionario1
    FOREIGN KEY (Funcionario_cpf)
    REFERENCES mydb.Funcionario (cpf)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_Orcameto_Veiculo1
    FOREIGN KEY (Veiculo_Placa , Veiculo_Cliente_CPF)
    REFERENCES mydb.Veiculo (Placa , Cliente_CPF)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Ordem_de_Servico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS mydb.Ordem_de_Servico (
  ID_OS VARCHAR(45) NOT NULL,
  Descricao VARCHAR(100) NOT NULL,
  Data_Saida DATE NOT NULL,
  Data_Entrada DATE NOT NULL,
  Total FLOAT NOT NULL,
  Orcamento_id_Orcamento INT NOT NULL,
  PRIMARY KEY (ID_OS),
  INDEX fk_Ordem_de_Servico_Orcamento1_idx (Orcamento_id_Orcamento ASC) ,
  CONSTRAINT fk_Ordem_de_Servico_Orcamento1
    FOREIGN KEY (Orcamento_id_Orcamento)
    REFERENCES mydb.Orcamento (id_Orcamento)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
