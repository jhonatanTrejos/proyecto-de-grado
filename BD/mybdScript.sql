-- MySQL Script generated by MySQL Workbench
-- 04/13/21 17:08:14
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`personas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`personas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `identificacion` VARCHAR(20) NULL,
  `nombre` VARCHAR(45) NULL,
  `apellidos` VARCHAR(45) NULL,
  `telefono` VARCHAR(10) NULL,
  `email` VARCHAR(45) NULL,
  `direccion` VARCHAR(100) NULL,
  `estado` VARCHAR(10) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`libros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`libros` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fecha_inicio` DATE NULL,
  `fecha_fin` DATE NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `detalles` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`registros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`registros` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cargo` VARCHAR(150) NULL,
  `personal_id` INT NOT NULL,
  `fecha_inicio` DATE NULL,
  `fecha_retiro` DATE NULL,
  `dias_laborados` VARCHAR(45) NULL,
  `sueldo` INT NULL,
  `devengado` INT NULL,
  `ley_100` INT NULL,
  `cpsm` INT NULL,
  `ley3385` INT NULL,
  `createdby_id` INT NULL,
  `modifiedby_id` INT NULL,
  `libro_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_registros_personal1_idx` (`personal_id` ASC),
  INDEX `fk_registros_libro1_idx` (`libro_id` ASC),
  CONSTRAINT `fk_registros_personal1`
    FOREIGN KEY (`personal_id`)
    REFERENCES `mydb`.`personas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_registros_libro1`
    FOREIGN KEY (`libro_id`)
    REFERENCES `mydb`.`libros` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`estados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`estados` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`solicituds`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`solicituds` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numero` VARCHAR(45) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  `estado_id` INT NOT NULL,
  `personas_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_solicitud_estado1_idx` (`estado_id` ASC),
  INDEX `fk_solicituds_personas1_idx` (`personas_id` ASC),
  CONSTRAINT `fk_solicitud_estado1`
    FOREIGN KEY (`estado_id`)
    REFERENCES `mydb`.`estados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicituds_personas1`
    FOREIGN KEY (`personas_id`)
    REFERENCES `mydb`.`personas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `personal_idpersonal` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_personal1_idx` (`personal_idpersonal` ASC),
  CONSTRAINT `fk_user_personal1`
    FOREIGN KEY (`personal_idpersonal`)
    REFERENCES `mydb`.`personas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`permisosxpersona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`permisosxpersona` (
  `roles_id` INT NOT NULL,
  `personas_id` INT NOT NULL,
  INDEX `fk_permisosxpersona_roles1_idx` (`roles_id` ASC),
  INDEX `fk_permisosxpersona_personas1_idx` (`personas_id` ASC),
  CONSTRAINT `fk_permisosxpersona_roles1`
    FOREIGN KEY (`roles_id`)
    REFERENCES `mydb`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_permisosxpersona_personas1`
    FOREIGN KEY (`personas_id`)
    REFERENCES `mydb`.`personas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
