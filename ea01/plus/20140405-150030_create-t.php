CREATE TABLE `tesztdb`.`kerdesek` (
  `kid` INT NOT NULL AUTO_INCREMENT,
  `sorszam` INT NOT NULL,
  `kerdes` TEXT NOT NULL,
  `valasz1` VARCHAR(255) NOT NULL,
  `valasz2` VARCHAR(255) NOT NULL,
  `valasz3` VARCHAR(255) NOT NULL,
  `valasz4` VARCHAR(255) NOT NULL,
  `valasz5` VARCHAR(255) NOT NULL,
  `valasz` INT NULL,
  `helyes` INT NOT NULL,
  PRIMARY KEY (`kid`))
ENGINE = InnoDB;