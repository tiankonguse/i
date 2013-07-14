SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `tiankong_i` DEFAULT CHARACTER SET utf8 ;
USE `tiankong_i` ;

-- -----------------------------------------------------
-- Table `tiankong_i`.`tiankong_i_mark`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `tiankong_i`.`tiankong_i_mark` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tiankong_i`.`tiankong_i_list`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `tiankong_i`.`tiankong_i_list` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `link` VARCHAR(255) NOT NULL ,
  `lev` INT NOT NULL DEFAULT 0 ,
  `mark_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_tiankong_i_list_tiankong_i_mark` (`mark_id` ASC) ,
  CONSTRAINT `fk_tiankong_i_list_tiankong_i_mark`
    FOREIGN KEY (`mark_id` )
    REFERENCES `tiankong_i`.`tiankong_i_mark` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
