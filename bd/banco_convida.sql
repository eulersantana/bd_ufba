-- MySQL Script generated by MySQL Workbench
-- Sun Nov  2 18:23:12 2014
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ufbaconvida
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ufbaconvida
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ufbaconvida` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `ufbaconvida` ;

-- -----------------------------------------------------
-- Table `ufbaconvida`.`localidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`localidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `endereco` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`departamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`departamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `localidade_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_departamento_localidade1_idx` (`localidade_id` ASC),
  CONSTRAINT `fk_departamento_localidade1`
    FOREIGN KEY (`localidade_id`)
    REFERENCES `ufbaconvida`.`localidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`academico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`academico` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(100) NOT NULL,
  `data_nascimento` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NULL,
  `departamento_id` INT NOT NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_academico_departamento1_idx` (`departamento_id` ASC),
  CONSTRAINT `fk_academico_departamento1`
    FOREIGN KEY (`departamento_id`)
    REFERENCES `ufbaconvida`.`departamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`evento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `cartaz` VARCHAR(45) NOT NULL,
  `link` VARCHAR(255),
  `inicio` DATETIME NOT NULL,
  `fim` DATETIME NOT NULL,
  `descricao` TINYTEXT NOT NULL,
  `academico_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_evento_academico1_idx` (`academico_id` ASC),
  CONSTRAINT `fk_evento_academico1`
    FOREIGN KEY (`academico_id`)
    REFERENCES `ufbaconvida`.`academico` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`apoio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`apoio` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `img` VARCHAR(45) NULL,
  `evento_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_apoio_evento1_idx` (`evento_id` ASC),
  CONSTRAINT `fk_apoio_evento1`
    FOREIGN KEY (`evento_id`)
    REFERENCES `ufbaconvida`.`evento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`atividade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`atividade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `horario` TIME NOT NULL,
  `descricao` TINYTEXT NOT NULL,
  `cronograma_id` INT NOT NULL,
  `evento_id` INT NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_atividade_evento1_idx` (`evento_id` ASC),
  CONSTRAINT `fk_atividade_evento1`
    FOREIGN KEY (`evento_id`)
    REFERENCES `ufbaconvida`.`evento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`aluno` (
  `academico_id` INT NOT NULL,
  `matricula` VARCHAR(20) NOT NULL,
  `curso` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  UNIQUE INDEX `matricula_UNIQUE` (`matricula` ASC),
  PRIMARY KEY (`academico_id`),
  CONSTRAINT `fk_aluno_academico1`
    FOREIGN KEY (`academico_id`)
    REFERENCES `ufbaconvida`.`academico` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`professor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`professor` (
  `academico_id` INT NOT NULL,
  `siape` INT UNSIGNED NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`academico_id`),
  CONSTRAINT `fk_professor_academico1`
    FOREIGN KEY (`academico_id`)
    REFERENCES `ufbaconvida`.`academico` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`departamento_has_evento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`departamento_has_evento` (
  `departamento_id` INT NOT NULL,
  `evento_id` INT NOT NULL,
  PRIMARY KEY (`departamento_id`, `evento_id`),
  INDEX `fk_departamento_has_evento_evento1_idx` (`evento_id` ASC),
  INDEX `fk_departamento_has_evento_departamento1_idx` (`departamento_id` ASC),
  CONSTRAINT `fk_departamento_has_evento_departamento1`
    FOREIGN KEY (`departamento_id`)
    REFERENCES `ufbaconvida`.`departamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_departamento_has_evento_evento1`
    FOREIGN KEY (`evento_id`)
    REFERENCES `ufbaconvida`.`evento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`campus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`campus` (
  `nome` VARCHAR(45) NOT NULL,
  `localidade_id` INT NOT NULL,
  `codigo` VARCHAR(5) NOT NULL,
  INDEX `fk_campus_localidade1_idx` (`localidade_id` ASC),
  PRIMARY KEY (`codigo`),
  CONSTRAINT `fk_campus_localidade1`
    FOREIGN KEY (`localidade_id`)
    REFERENCES `ufbaconvida`.`localidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`instalacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`instalacao` (
  `predio` VARCHAR(45) NOT NULL,
  `localidade_id` INT NOT NULL,
  `campus_codigo` VARCHAR(5) NOT NULL,
  INDEX `fk_instalacao_localidade1_idx` (`localidade_id` ASC),
  INDEX `fk_instalacao_campus1_idx` (`campus_codigo` ASC),
  CONSTRAINT `fk_instalacao_localidade1`
    FOREIGN KEY (`localidade_id`)
    REFERENCES `ufbaconvida`.`localidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_instalacao_campus1`
    FOREIGN KEY (`campus_codigo`)
    REFERENCES `ufbaconvida`.`campus` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`evento_has_localidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`evento_has_localidade` (
  `evento_id` INT NOT NULL,
  `localidade_id` INT NOT NULL,
  PRIMARY KEY (`evento_id`, `localidade_id`),
  INDEX `fk_evento_has_localidade_localidade1_idx` (`localidade_id` ASC),
  INDEX `fk_evento_has_localidade_evento1_idx` (`evento_id` ASC),
  CONSTRAINT `fk_evento_has_localidade_evento1`
    FOREIGN KEY (`evento_id`)
    REFERENCES `ufbaconvida`.`evento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_evento_has_localidade_localidade1`
    FOREIGN KEY (`localidade_id`)
    REFERENCES `ufbaconvida`.`localidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ufbaconvida`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ufbaconvida`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
