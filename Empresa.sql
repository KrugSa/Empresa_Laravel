-- MySQL Script generated by MySQL Workbench
-- Sun Jul 14 23:22:15 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Empresa
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Empresa
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Empresa` DEFAULT CHARACTER SET utf8 ;
USE `Empresa` ;

-- -----------------------------------------------------
-- Table `Empresa`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Empresa`.`Cliente` (
  `id_Cliente` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Cliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Empresa`.`Contrato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Empresa`.`Contrato` (
  `idContrato` INT NOT NULL,
  `id_Cliente` INT NULL,
  `Nombre_Contrato` VARCHAR(45) NULL,
  `Monto` INT NULL,
  PRIMARY KEY (`idContrato`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
