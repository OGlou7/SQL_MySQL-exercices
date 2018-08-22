-- MySQL Script generated by MySQL Workbench
-- Wed Aug 22 12:10:49 2018
-- Model: Sakila Full    Version: 2.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ex_mysql
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ex_mysql
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ex_mysql` ;
USE `ex_mysql` ;



-- -----------------------------------------------------
-- Table `ex_mysql`.`ENFANTS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ex_mysql`.`ENFANTS` (
  `idenfants` INT NOT NULL AUTO_INCREMENT,
  `ENFANTScol` VARCHAR(45) NULL,
  PRIMARY KEY (`idenfants`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ex_mysql`.`CLASSES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ex_mysql`.`CLASSES` (
  `idCLASSES` INT NOT NULL AUTO_INCREMENT,
  `CLASSEScol` VARCHAR(45) NULL,
  PRIMARY KEY (`idCLASSES`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ex_mysql`.`COURS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ex_mysql`.`COURS` (
  `idCOURS` INT NOT NULL AUTO_INCREMENT,
  `COURScol` VARCHAR(45) NULL,
  PRIMARY KEY (`idCOURS`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ex_mysql`.`CLASSES_has_ENFANTS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ex_mysql`.`CLASSES_has_ENFANTS` (
  `CLASSES_idCLASSES` INT NOT NULL,
  `ENFANTS_idenfants` INT NOT NULL,
  PRIMARY KEY (`CLASSES_idCLASSES`, `ENFANTS_idenfants`),
  CONSTRAINT `fk_CLASSES_has_ENFANTS_CLASSES1`
    FOREIGN KEY (`CLASSES_idCLASSES`)
    REFERENCES `ex_mysql`.`CLASSES` (`idCLASSES`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CLASSES_has_ENFANTS_ENFANTS1`
    FOREIGN KEY (`ENFANTS_idenfants`)
    REFERENCES `ex_mysql`.`ENFANTS` (`idenfants`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_CLASSES_has_ENFANTS_ENFANTS1_idx` ON `ex_mysql`.`CLASSES_has_ENFANTS` (`ENFANTS_idenfants` ASC);

CREATE INDEX `fk_CLASSES_has_ENFANTS_CLASSES1_idx` ON `ex_mysql`.`CLASSES_has_ENFANTS` (`CLASSES_idCLASSES` ASC);


-- -----------------------------------------------------
-- Table `ex_mysql`.`COURS_has_ENFANTS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ex_mysql`.`COURS_has_ENFANTS` (
  `COURS_idCOURS` INT NOT NULL,
  `ENFANTS_idenfants` INT NOT NULL,
  PRIMARY KEY (`COURS_idCOURS`, `ENFANTS_idenfants`),
  CONSTRAINT `fk_COURS_has_ENFANTS_COURS1`
    FOREIGN KEY (`COURS_idCOURS`)
    REFERENCES `ex_mysql`.`COURS` (`idCOURS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_COURS_has_ENFANTS_ENFANTS1`
    FOREIGN KEY (`ENFANTS_idenfants`)
    REFERENCES `ex_mysql`.`ENFANTS` (`idenfants`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_COURS_has_ENFANTS_ENFANTS1_idx` ON `ex_mysql`.`COURS_has_ENFANTS` (`ENFANTS_idenfants` ASC);

CREATE INDEX `fk_COURS_has_ENFANTS_COURS1_idx` ON `ex_mysql`.`COURS_has_ENFANTS` (`COURS_idCOURS` ASC);


-- -----------------------------------------------------
-- Table `ex_mysql`.`COURS_has_ENFANTS_has_CLASSES_has_ENFANTS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ex_mysql`.`COURS_has_ENFANTS_has_CLASSES_has_ENFANTS` (
  `COURS_has_ENFANTS_COURS_idCOURS` INT NOT NULL,
  `COURS_has_ENFANTS_ENFANTS_idenfants` INT NOT NULL,
  `CLASSES_has_ENFANTS_CLASSES_idCLASSES` INT NOT NULL,
  `CLASSES_has_ENFANTS_ENFANTS_idenfants` INT NOT NULL,
  PRIMARY KEY (`COURS_has_ENFANTS_COURS_idCOURS`, `COURS_has_ENFANTS_ENFANTS_idenfants`, `CLASSES_has_ENFANTS_CLASSES_idCLASSES`, `CLASSES_has_ENFANTS_ENFANTS_idenfants`),
  CONSTRAINT `fk_COURS_has_ENFANTS_has_CLASSES_has_ENFANTS_COURS_has_ENFANTS1`
    FOREIGN KEY (`COURS_has_ENFANTS_COURS_idCOURS` , `COURS_has_ENFANTS_ENFANTS_idenfants`)
    REFERENCES `ex_mysql`.`COURS_has_ENFANTS` (`COURS_idCOURS` , `ENFANTS_idenfants`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_COURS_has_ENFANTS_has_CLASSES_has_ENFANTS_CLASSES_has_ENFA1`
    FOREIGN KEY (`CLASSES_has_ENFANTS_CLASSES_idCLASSES` , `CLASSES_has_ENFANTS_ENFANTS_idenfants`)
    REFERENCES `ex_mysql`.`CLASSES_has_ENFANTS` (`CLASSES_idCLASSES` , `ENFANTS_idenfants`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_COURS_has_ENFANTS_has_CLASSES_has_ENFANTS_CLASSES_has_EN_idx` ON `ex_mysql`.`COURS_has_ENFANTS_has_CLASSES_has_ENFANTS` (`CLASSES_has_ENFANTS_CLASSES_idCLASSES` ASC, `CLASSES_has_ENFANTS_ENFANTS_idenfants` ASC);

CREATE INDEX `fk_COURS_has_ENFANTS_has_CLASSES_has_ENFANTS_COURS_has_ENFA_idx` ON `ex_mysql`.`COURS_has_ENFANTS_has_CLASSES_has_ENFANTS` (`COURS_has_ENFANTS_COURS_idCOURS` ASC, `COURS_has_ENFANTS_ENFANTS_idenfants` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
