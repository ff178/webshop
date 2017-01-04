SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `figuraSana` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `figuraSana` ;

-- -----------------------------------------------------
-- Table `figuraSana`.`Usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `figuraSana`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT ,
  `usuario` VARCHAR(45) NOT NULL ,
  `pass` VARCHAR(45) NOT NULL ,
  `estado` TINYINT(1) NOT NULL ,
  `tipo` TINYINT(1) NOT NULL ,
  `email` VARCHAR(145) NOT NULL ,
  PRIMARY KEY (`idUsuario`) ,
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `figuraSana`.`Consumidor`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `figuraSana`.`Consumidor` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(100) NOT NULL ,
  `direccion` VARCHAR(45) NOT NULL ,
  `telefono` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idUsuario`) ,
  CONSTRAINT `fk_Consumidor_Usuario`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `figuraSana`.`Usuario` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `figuraSana`.`Carrito`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `figuraSana`.`Carrito` (
  `idUsuario` INT NOT NULL ,
  `idCarrito` INT NOT NULL AUTO_INCREMENT ,
  `cantidad` INT NOT NULL ,
  `fecha` DATE NOT NULL ,
  PRIMARY KEY (`idCarrito`, `idUsuario`) ,
  CONSTRAINT `fk_Carrito_Consumidor1`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `figuraSana`.`Consumidor` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `figuraSana`.`Categorias`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `figuraSana`.`Categorias` (
  `idCategorias` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idCategorias`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `figuraSana`.`Productos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `figuraSana`.`Productos` (
  `idProductos` INT NOT NULL AUTO_INCREMENT ,
  `codigo` INT NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  `talla` VARCHAR(45) NOT NULL ,
  `colores` VARCHAR(445) NOT NULL ,
  `ganchos` VARCHAR(45) NOT NULL ,
  `descripcion` VARCHAR(500) NOT NULL ,
  `precio` DOUBLE NOT NULL ,
  `url` VARCHAR(345) NOT NULL ,
  `url2` VARCHAR(45) NULL ,
  `idCategorias` INT NOT NULL ,
  PRIMARY KEY (`idProductos`, `codigo`) ,
  INDEX `fk_Productos_Categorias1_idx` (`idCategorias` ASC) ,
  CONSTRAINT `fk_Productos_Categorias1`
    FOREIGN KEY (`idCategorias` )
    REFERENCES `figuraSana`.`Categorias` (`idCategorias` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `figuraSana`.`Items`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `figuraSana`.`Items` (
  `idItems` INT NOT NULL ,
  `idProductos` INT NOT NULL ,
  `idCarrito` INT NOT NULL ,
  `cantidad` INT NOT NULL ,
  `precio` DOUBLE NOT NULL ,
  INDEX `fk_Items_Carrito1_idx` (`idCarrito` ASC) ,
  PRIMARY KEY (`idItems`) ,
  CONSTRAINT `fk_Items_Productos1`
    FOREIGN KEY (`idProductos` )
    REFERENCES `figuraSana`.`Productos` (`idProductos` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Items_Carrito1`
    FOREIGN KEY (`idCarrito` )
    REFERENCES `figuraSana`.`Carrito` (`idCarrito` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `figuraSana`.`InfoCompra`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `figuraSana`.`InfoCompra` (
  `idInfoCompra` INT NOT NULL AUTO_INCREMENT ,
  `pago` VARCHAR(45) NOT NULL ,
  `costo` DOUBLE NOT NULL ,
  `region` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idInfoCompra`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `figuraSana`.`Orden`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `figuraSana`.`Orden` (
  `idOrden` INT NOT NULL AUTO_INCREMENT ,
  `idUsuario` INT NOT NULL ,
  `idItems` INT NOT NULL ,
  `fechaOrden` DATE NOT NULL ,
  `fechaCompra` DATE NOT NULL ,
  `status` VARCHAR(45) NOT NULL ,
  `idInfoCompra` INT NOT NULL ,
  PRIMARY KEY (`idOrden`, `idUsuario`, `idItems`) ,
  INDEX `fk_Orden_Consumidor1_idx` (`idUsuario` ASC) ,
  INDEX `fk_Orden_Items1_idx` (`idItems` ASC) ,
  INDEX `fk_Orden_InfoCompra1_idx` (`idInfoCompra` ASC) ,
  CONSTRAINT `fk_Orden_Consumidor1`
    FOREIGN KEY (`idUsuario` )
    REFERENCES `figuraSana`.`Consumidor` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Orden_Items1`
    FOREIGN KEY (`idItems` )
    REFERENCES `figuraSana`.`Items` (`idItems` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Orden_InfoCompra1`
    FOREIGN KEY (`idInfoCompra` )
    REFERENCES `figuraSana`.`InfoCompra` (`idInfoCompra` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `figuraSana` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
