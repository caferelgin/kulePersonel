SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `kuleDb` ;
CREATE SCHEMA IF NOT EXISTS `kuleDb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `kuleDb` ;

-- -----------------------------------------------------
-- Table `kuleDb`.`tblCalisan`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kuleDb`.`tblCalisan` ;

CREATE  TABLE IF NOT EXISTS `kuleDb`.`tblCalisan` (
  `idtblCalisan` INT NOT NULL AUTO_INCREMENT ,
  `ad` VARCHAR(45) NULL ,
  `soyad` VARCHAR(45) NULL ,
  `initials` VARCHAR(3) NULL ,
  `girisTarihi` DATE NULL ,
  `sonTerfi` DATE NULL ,
  `kimlikNo` VARCHAR(15) NULL ,
  PRIMARY KEY (`idtblCalisan`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_turkish_ci;


-- -----------------------------------------------------
-- Table `kuleDb`.`tblIzinler`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kuleDb`.`tblIzinler` ;

CREATE  TABLE IF NOT EXISTS `kuleDb`.`tblIzinler` (
  `idtblIzinler` INT NOT NULL AUTO_INCREMENT ,
  `tarih` DATE NULL ,
  `cinsi` VARCHAR(45) NULL ,
  `calisanId` INT NULL ,
  PRIMARY KEY (`idtblIzinler`) ,
  INDEX `calisanId` (`calisanId` ASC) ,
  CONSTRAINT `calisanId`
    FOREIGN KEY (`calisanId` )
    REFERENCES `kuleDb`.`tblCalisan` (`idtblCalisan` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_turkish_ci;


-- -----------------------------------------------------
-- Table `kuleDb`.`tblIsGunu`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kuleDb`.`tblIsGunu` ;

CREATE  TABLE IF NOT EXISTS `kuleDb`.`tblIsGunu` (
  `idtblMesai` INT NOT NULL ,
  `tarih` DATE NULL ,
  `cinsi` VARCHAR(45) NULL ,
  `calisanId` INT NULL ,
  PRIMARY KEY (`idtblMesai`) ,
  INDEX `calisanId` (`calisanId` ASC) ,
  CONSTRAINT `calisanId`
    FOREIGN KEY (`calisanId` )
    REFERENCES `kuleDb`.`tblCalisan` (`idtblCalisan` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_turkish_ci;


-- -----------------------------------------------------
-- Table `kuleDb`.`tblTatiller`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kuleDb`.`tblTatiller` ;

CREATE  TABLE IF NOT EXISTS `kuleDb`.`tblTatiller` (
  `idtblTatiller` INT NOT NULL ,
  `tarih` DATE NULL ,
  `adi` VARCHAR(60) NULL ,
  PRIMARY KEY (`idtblTatiller`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_turkish_ci;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
