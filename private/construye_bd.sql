-- MySQL Script generated by MySQL Workbench
-- Mon Nov 27 16:09:06 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema ventas_v1
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ventas_v1` ;

-- -----------------------------------------------------
-- Schema ventas_v1
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ventas_v1` DEFAULT CHARACTER SET utf8 ;
USE `ventas_v1` ;

-- -----------------------------------------------------
-- Table `ventas_v1`.`Ventas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas_v1`.`Ventas` ;

CREATE TABLE IF NOT EXISTS `ventas_v1`.`Ventas` (
  `idVentas` INT NOT NULL,
  `idproducto` INT NULL,
  `idsucursal` INT NULL,
  `folioventa` VARCHAR(45) NULL,
  `fechadecompra` DATE NULL,
  `idclientes` INT NULL,
  `clientes_idclientes` INT NOT NULL,
  `sucursales_idsucursal` INT NOT NULL,
  PRIMARY KEY (`idVentas`),
  INDEX `fk_Ventas_clientes1_idx` (`clientes_idclientes` ASC) ,
  INDEX `fk_Ventas_sucursales1_idx` (`sucursales_idsucursal` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas_v1`.`Ventas_has_productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas_v1`.`Ventas_has_productos` ;

CREATE TABLE IF NOT EXISTS `ventas_v1`.`Ventas_has_productos` (
  `Ventas_idVentas` INT NOT NULL,
  `productos_idproducto` INT NOT NULL,
  `cantidad` INT NOT NULL,
  PRIMARY KEY (`Ventas_idVentas`, `productos_idproducto`),
  INDEX `fk_Ventas_has_productos_productos1_idx` (`productos_idproducto` ASC) ,
  INDEX `fk_Ventas_has_productos_Ventas1_idx` (`Ventas_idVentas` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas_v1`.`clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas_v1`.`clientes` ;

CREATE TABLE IF NOT EXISTS `ventas_v1`.`clientes` (
  `idclientes` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `fecha_de_nacimiento` DATE NULL,
  PRIMARY KEY (`idclientes`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas_v1`.`productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas_v1`.`productos` ;

CREATE TABLE IF NOT EXISTS `ventas_v1`.`productos` (
  `idproducto` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `costo` FLOAT NULL,
  PRIMARY KEY (`idproducto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ventas_v1`.`sucursales`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ventas_v1`.`sucursales` ;

CREATE TABLE IF NOT EXISTS `ventas_v1`.`sucursales` (
  `idsucursal` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idsucursal`))
ENGINE = InnoDB;

ALTER TABLE `clientes` MODIFY `idclientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;