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
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema pjbl
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pjbl
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pjbl` DEFAULT CHARACTER SET utf8mb4 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `pjbl`.`moderadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pjbl`.`moderadores` (
  `cpf_moderador` VARCHAR(32) NOT NULL,
  `data_nascimento_moderador` DATE NOT NULL,
  `nome_moderador` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`cpf_moderador`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `pjbl`.`instituicao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pjbl`.`instituicao` (
  `cnpj` VARCHAR(14) NOT NULL,
  `nome_instituicao` VARCHAR(45) NOT NULL,
  `cidade_instituicao` VARCHAR(45) NOT NULL,
  `uf_instituicao` VARCHAR(45) NOT NULL,
  `bairro_instituicao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cnpj`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `mydb`.`professores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`professores` (
  `cpf_professor` VARCHAR(32) NOT NULL,
  `nome_professor` VARCHAR(45) NOT NULL,
  `data_nascimento_professor` DATE NOT NULL,
  PRIMARY KEY (`cpf_professor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cursos` (
  `id_curso` INT NOT NULL AUTO_INCREMENT,
  `nome_curso` VARCHAR(300) NOT NULL,
  `nome_autor` VARCHAR(300) NOT NULL,
  `moderadores_cpf_moderador` VARCHAR(300) NULL,
  `instituicao_cnpj` VARCHAR(14) NOT NULL,
  `professores_cpf_professor` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id_curso`),
  INDEX `fk_cursos_moderadores_idx` (`moderadores_cpf_moderador` ASC) VISIBLE,
  INDEX `fk_cursos_instituicao1_idx` (`instituicao_cnpj` ASC) VISIBLE,
  INDEX `fk_cursos_professores1_idx` (`professores_cpf_professor` ASC) VISIBLE,
  CONSTRAINT `fk_cursos_moderadores`
    FOREIGN KEY (`moderadores_cpf_moderador`)
    REFERENCES `pjbl`.`moderadores` (`cpf_moderador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cursos_instituicao1`
    FOREIGN KEY (`instituicao_cnpj`)
    REFERENCES `pjbl`.`instituicao` (`cnpj`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cursos_professores1`
    FOREIGN KEY (`professores_cpf_professor`)
    REFERENCES `mydb`.`professores` (`cpf_professor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`modulos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`modulos` (
  `id_modulo` INT NOT NULL AUTO_INCREMENT,
  `nome_modulo` VARCHAR(45) NOT NULL,
  `nivel_dificuldade` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_modulo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`estudante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`estudante` (
  `cpf_estudante` VARCHAR(32) NOT NULL,
  `nome_estudante` VARCHAR(45) NOT NULL,
  `data_nascimento_estudante` DATE NOT NULL,
  PRIMARY KEY (`cpf_estudante`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`estudantes_cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`estudantes_cursos` (
  `cursos_id_curso` INT NOT NULL,
  `estudante_cpf_estudante` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`cursos_id_curso`, `estudante_cpf_estudante`),
  INDEX `fk_cursos_has_estudante_estudante1_idx` (`estudante_cpf_estudante` ASC) VISIBLE,
  INDEX `fk_cursos_has_estudante_cursos1_idx` (`cursos_id_curso` ASC) VISIBLE,
  CONSTRAINT `fk_cursos_has_estudante_cursos1`
    FOREIGN KEY (`cursos_id_curso`)
    REFERENCES `mydb`.`cursos` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cursos_has_estudante_estudante1`
    FOREIGN KEY (`estudante_cpf_estudante`)
    REFERENCES `mydb`.`estudante` (`cpf_estudante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`modulos_cursos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`modulos_cursos` (
  `modulos_id_modulo` INT NOT NULL,
  `cursos_id_curso` INT NOT NULL,
  PRIMARY KEY (`modulos_id_modulo`, `cursos_id_curso`),
  INDEX `fk_modulos_has_cursos_cursos1_idx` (`cursos_id_curso` ASC) VISIBLE,
  INDEX `fk_modulos_has_cursos_modulos1_idx` (`modulos_id_modulo` ASC) VISIBLE,
  CONSTRAINT `fk_modulos_has_cursos_modulos1`
    FOREIGN KEY (`modulos_id_modulo`)
    REFERENCES `mydb`.`modulos` (`id_modulo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_modulos_has_cursos_cursos1`
    FOREIGN KEY (`cursos_id_curso`)
    REFERENCES `mydb`.`cursos` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`notas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`notas` (
  `cursos_id_curso` INT NOT NULL,
  `estudante_cpf_estudante` VARCHAR(32) NOT NULL,
  `nota` FLOAT NULL,
  PRIMARY KEY (`cursos_id_curso`, `estudante_cpf_estudante`),
  INDEX `fk_cursos_has_estudante_estudante2_idx` (`estudante_cpf_estudante` ASC) VISIBLE,
  INDEX `fk_cursos_has_estudante_cursos2_idx` (`cursos_id_curso` ASC) VISIBLE,
  CONSTRAINT `fk_cursos_has_estudante_cursos2`
    FOREIGN KEY (`cursos_id_curso`)
    REFERENCES `mydb`.`cursos` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cursos_has_estudante_estudante2`
    FOREIGN KEY (`estudante_cpf_estudante`)
    REFERENCES `mydb`.`estudante` (`cpf_estudante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `pjbl` ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
