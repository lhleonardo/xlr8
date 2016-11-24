-- MySQL Workbench Synchronization
-- Generated: 2016-11-10 08:42
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: 01327621290

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE TABLE IF NOT EXISTS `lojavirtual`.`departamento` (
  `idDepartamento` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `descricao` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`idDepartamento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `lojavirtual`.`categoria` (
  `idCategoria` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL DEFAULT NULL,
  `descricao` TEXT NULL DEFAULT NULL,
  `idDepartamento` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idCategoria`),
  INDEX `fk_categoria_departamento_idx` (`idDepartamento` ASC),
  CONSTRAINT `fk_categoria_departamento`
    FOREIGN KEY (`idDepartamento`)
    REFERENCES `lojavirtual`.`departamento` (`idDepartamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `lojavirtual`.`estado` (
  `idEstado` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NULL DEFAULT NULL,
  `uf` VARCHAR(2) NULL DEFAULT NULL,
  PRIMARY KEY (`idEstado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `lojavirtual`.`cidade` (
  `idCidade` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NOT NULL,
  `idEstado` INT(11) NOT NULL,
  PRIMARY KEY (`idCidade`),
  INDEX `fk_cidade_estado_idx` (`idEstado` ASC),
  CONSTRAINT `fk_cidade_estado`
    FOREIGN KEY (`idEstado`)
    REFERENCES `lojavirtual`.`estado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `lojavirtual`.`pessoa` (
  `idPessoa` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` TEXT NOT NULL,
  `telefone` VARCHAR(14) NOT NULL,
  `tipo_pessoa` ENUM('FORNECEDOR', 'CLIENTE') NOT NULL DEFAULT 'CLIENTE',
  `cnpj` VARCHAR(18) NULL DEFAULT NULL,
  ` ie` VARCHAR(20) NULL DEFAULT NULL,
  `fantasia` VARCHAR(100) NULL DEFAULT NULL,
  `cpf` VARCHAR(14) NULL DEFAULT NULL,
  `rg` VARCHAR(20) NULL DEFAULT NULL,
  `data_nascimento` DATE NULL DEFAULT NULL,
  `data_inscricao` DATE NULL DEFAULT NULL,
  `descricao` TEXT NULL DEFAULT NULL,
  `logradouro` VARCHAR(255) NULL DEFAULT NULL,
  `complemento` TEXT NULL DEFAULT NULL,
  `bairro` VARCHAR(100) NULL DEFAULT NULL,
  `numero` VARCHAR(10) NULL DEFAULT NULL,
  `idCidade` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idPessoa`),
  INDEX `fk_pessoa_cidade_idx` (`idCidade` ASC),
  CONSTRAINT `fk_pessoa_cidade`
    FOREIGN KEY (`idCidade`)
    REFERENCES `lojavirtual`.`cidade` (`idCidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `lojavirtual`.`produto` (
  `idProduto` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `preco` DECIMAL(10,2) NOT NULL DEFAULT 0.0,
  `tamanho` ENUM('33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48') NOT NULL,
  `composicao` TEXT NULL DEFAULT NULL,
  `cor` VARCHAR(100) NULL DEFAULT NULL,
  `garantia` INT(11) NULL DEFAULT NULL,
  `data_cadastro` DATE NULL DEFAULT NULL,
  `idCategoria` INT(11) NOT NULL,
  `idFornecedor` INT(11) NOT NULL,
  PRIMARY KEY (`idProduto`),
  INDEX `fk_produto_categoria1_idx` (`idCategoria` ASC),
  INDEX `fk_produto_pessoa1_idx` (`idFornecedor` ASC),
  CONSTRAINT `fk_produto_categoria1`
    FOREIGN KEY (`idCategoria`)
    REFERENCES `lojavirtual`.`categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produto_pessoa1`
    FOREIGN KEY (`idFornecedor`)
    REFERENCES `lojavirtual`.`pessoa` (`idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `lojavirtual`.`carrinho` (
  `idCarrinho` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATETIME NULL DEFAULT NULL,
  `idCliente` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idCarrinho`),
  INDEX `fk_carrinho_cliente_idx` (`idCliente` ASC),
  CONSTRAINT `fk_carrinho_cliente`
    FOREIGN KEY (`idCliente`)
    REFERENCES `lojavirtual`.`pessoa` (`idPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `lojavirtual`.`carrinho_has_produto` (
  `idCarrinho` INT(11) NOT NULL,
  `idProduto` INT(11) NOT NULL,
  PRIMARY KEY (`idCarrinho`, `idProduto`),
  INDEX `fk_carrinho_has_produto_produto1_idx` (`idProduto` ASC),
  INDEX `fk_carrinho_has_produto_carrinho1_idx` (`idCarrinho` ASC),
  CONSTRAINT `fk_carrinho_has_produto_carrinho1`
    FOREIGN KEY (`idCarrinho`)
    REFERENCES `lojavirtual`.`carrinho` (`idCarrinho`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carrinho_has_produto_produto1`
    FOREIGN KEY (`idProduto`)
    REFERENCES `lojavirtual`.`produto` (`idProduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
