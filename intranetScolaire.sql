-- MySQL Script generated by MySQL Workbench
-- Thu May 18 09:16:53 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mvc_intranet
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mvc_intranet
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mvc_intranet` DEFAULT CHARACTER SET utf8 ;
USE `mvc_intranet` ;

-- -----------------------------------------------------
-- Table `mvc_intranet`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Users` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `user_email` VARCHAR(150) NOT NULL,
  `user_firstname` VARCHAR(45) NULL,
  `user_lastname` VARCHAR(45) NULL,
  `user_birthday` DATE NULL,
  `user_address` VARCHAR(45) NULL,
  `user_zipcode` VARCHAR(5) NULL,
  `user_city` VARCHAR(45) NULL,
  `user_accept_itcharter` TINYINT(1) NULL,
  `user_last_connection` DATETIME NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE INDEX `user_email_UNIQUE` (`user_email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Absences`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Absences` (
  `id_absence` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  `absence_started_at` DATETIME NULL,
  `absence_ended_at` DATETIME NULL,
  `absence_reason` TEXT NULL,
  `absence_proof` VARCHAR(45) NULL,
  `absence_status` INT NULL DEFAULT 0,
  PRIMARY KEY (`id_absence`),
  INDEX `fk_Absences_Users1_idx` (`id_user` ASC),
  CONSTRAINT `fk_Absences_Users1`
    FOREIGN KEY (`id_user`)
    REFERENCES `mvc_intranet`.`Users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Promotions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Promotions` (
  `id_promotion` INT NOT NULL AUTO_INCREMENT,
  `promotion_name` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`id_promotion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Specialities`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Specialities` (
  `id_speciality` INT NOT NULL AUTO_INCREMENT,
  `speciality_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_speciality`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Students`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Students` (
  `id_student` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  `id_promotion` INT NOT NULL,
  `id_speciality` INT NOT NULL,
  PRIMARY KEY (`id_student`),
  INDEX `fk_Students_Users1_idx` (`id_user` ASC),
  INDEX `fk_Students_Promotions1_idx` (`id_promotion` ASC),
  INDEX `fk_Students_Specialities1_idx` (`id_speciality` ASC),
  CONSTRAINT `fk_Students_Users1`
    FOREIGN KEY (`id_user`)
    REFERENCES `mvc_intranet`.`Users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Students_Promotions1`
    FOREIGN KEY (`id_promotion`)
    REFERENCES `mvc_intranet`.`Promotions` (`id_promotion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Students_Specialities1`
    FOREIGN KEY (`id_speciality`)
    REFERENCES `mvc_intranet`.`Specialities` (`id_speciality`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Subjects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Subjects` (
  `id_subject` INT NOT NULL AUTO_INCREMENT,
  `subject_name` VARCHAR(150) NOT NULL,
  `subject_description` TEXT NULL,
  PRIMARY KEY (`id_subject`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Staffs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Staffs` (
  `id_staff` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  `staff_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_staff`),
  INDEX `fk_Staffs_Users1_idx` (`id_user` ASC),
  CONSTRAINT `fk_Staffs_Users1`
    FOREIGN KEY (`id_user`)
    REFERENCES `mvc_intranet`.`Users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Teachers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Teachers` (
  `id_teacher` INT NOT NULL AUTO_INCREMENT,
  `id_user` INT NOT NULL,
  `id_speciality` INT NOT NULL,
  PRIMARY KEY (`id_teacher`),
  INDEX `fk_Teachers_Users1_idx` (`id_user` ASC),
  INDEX `fk_Teachers_Specialities1_idx` (`id_speciality` ASC),
  CONSTRAINT `fk_Teachers_Users1`
    FOREIGN KEY (`id_user`)
    REFERENCES `mvc_intranet`.`Users` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Teachers_Specialities1`
    FOREIGN KEY (`id_speciality`)
    REFERENCES `mvc_intranet`.`Specialities` (`id_speciality`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Plannings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Plannings` (
  `id_planning` INT NOT NULL AUTO_INCREMENT,
  `id_subject` INT NOT NULL,
  `id_teacher` INT NOT NULL,
  `id_student` INT NOT NULL,
  `planning_start_at` DATETIME NOT NULL,
  `planning_end_at` DATETIME NOT NULL,
  PRIMARY KEY (`id_planning`),
  INDEX `fk_Plannings_Subjects1_idx` (`id_subject` ASC),
  INDEX `fk_Plannings_Teachers1_idx` (`id_teacher` ASC),
  INDEX `fk_Plannings_Students1_idx` (`id_student` ASC),
  CONSTRAINT `fk_Plannings_Subjects1`
    FOREIGN KEY (`id_subject`)
    REFERENCES `mvc_intranet`.`Subjects` (`id_subject`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Plannings_Teachers1`
    FOREIGN KEY (`id_teacher`)
    REFERENCES `mvc_intranet`.`Teachers` (`id_teacher`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Plannings_Students1`
    FOREIGN KEY (`id_student`)
    REFERENCES `mvc_intranet`.`Students` (`id_student`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Classrooms`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Classrooms` (
  `id_classroom` INT NOT NULL AUTO_INCREMENT,
  `classroom_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_classroom`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Classrooms_to_Plannings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Classrooms_to_Plannings` (
  `id_classroom` INT NOT NULL,
  `id_planning` INT NOT NULL,
  PRIMARY KEY (`id_classroom`, `id_planning`),
  INDEX `fk_Classrooms_has_Plannings_Plannings1_idx` (`id_planning` ASC),
  INDEX `fk_Classrooms_has_Plannings_Classrooms_idx` (`id_classroom` ASC),
  CONSTRAINT `fk_Classrooms_has_Plannings_Classrooms`
    FOREIGN KEY (`id_classroom`)
    REFERENCES `mvc_intranet`.`Classrooms` (`id_classroom`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Classrooms_has_Plannings_Plannings1`
    FOREIGN KEY (`id_planning`)
    REFERENCES `mvc_intranet`.`Plannings` (`id_planning`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Teachers_to_Promotions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Teachers_to_Promotions` (
  `id_teacher` INT NOT NULL,
  `id_promotion` INT NOT NULL,
  PRIMARY KEY (`id_teacher`, `id_promotion`),
  INDEX `fk_Teachers_has_Promotions_Promotions1_idx` (`id_promotion` ASC),
  INDEX `fk_Teachers_has_Promotions_Teachers1_idx` (`id_teacher` ASC),
  CONSTRAINT `fk_Teachers_has_Promotions_Teachers1`
    FOREIGN KEY (`id_teacher`)
    REFERENCES `mvc_intranet`.`Teachers` (`id_teacher`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Teachers_has_Promotions_Promotions1`
    FOREIGN KEY (`id_promotion`)
    REFERENCES `mvc_intranet`.`Promotions` (`id_promotion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mvc_intranet`.`Spes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mvc_intranet`.`Spes` (
)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;