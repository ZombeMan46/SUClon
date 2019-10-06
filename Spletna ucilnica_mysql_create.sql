CREATE TABLE `Ucitelji` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Ime` varchar(255) NOT NULL ,
	`Priimek` varchar(255) NOT NULL ,
	`Email` varchar(255) NOT NULL ,
	`id_slika` INT NOT NULL,
	`id_drzava` INT NOT NULL,
	`id_kraj` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Moduli` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Ime` varchar(255) NOT NULL ,
	`id_slika` INT NOT NULL,
	`id_naloga` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Naloge` (
	`Id` INT NOT NULL AUTO_INCREMENT,
	`Ocena` INT NOT NULL ,
	`Opis` TEXT NOT NULL ,
	`Rok_oddaje` DATETIME NOT NULL ,
	`id_datoteka` INT NOT NULL,
	`id_slika` INT NOT NULL,
	PRIMARY KEY (`Id`)
);

CREATE TABLE `Datoteke` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Url` blob NOT NULL ,
	`Tip` varchar(255) NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Drzave` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Ime` varchar(255) NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Uporabniki` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Ime` varchar(255) NOT NULL ,
	`Priimek` varchar(255) NOT NULL,
	`id_slika` INT NOT NULL ,
	`id_drzava` INT NOT NULL ,
	`id_kraji` INT NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Kraji` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Ime` varchar(255) NOT NULL ,
	`Postna_st` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Slike` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Url` blob NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Modul_Uporabnik` (
	`id_modul` INT NOT NULL,
	`id_uporabnik` INT NOT NULL
);

CREATE TABLE `Modul_Ucitelj` (
	`id_ucitelj` BINARY NOT NULL,
	`id_modul` BINARY NOT NULL
);

ALTER TABLE `Ucitelji` ADD CONSTRAINT `Ucitelji_fk0` FOREIGN KEY (`id_slika`) REFERENCES `Slike`(`id`);

ALTER TABLE `Ucitelji` ADD CONSTRAINT `Ucitelji_fk1` FOREIGN KEY (`id_drzava`) REFERENCES `Drzave`(`id`);

ALTER TABLE `Ucitelji` ADD CONSTRAINT `Ucitelji_fk2` FOREIGN KEY (`id_kraj`) REFERENCES `Kraji`(`id`);

ALTER TABLE `Moduli` ADD CONSTRAINT `Moduli_fk0` FOREIGN KEY (`id_slika`) REFERENCES `Slike`(`id`);

ALTER TABLE `Moduli` ADD CONSTRAINT `Moduli_fk1` FOREIGN KEY (`id_naloga`) REFERENCES `Naloge`(`Id`);

ALTER TABLE `Naloge` ADD CONSTRAINT `Naloge_fk0` FOREIGN KEY (`id_datoteka`) REFERENCES `Datoteke`(`id`);

ALTER TABLE `Naloge` ADD CONSTRAINT `Naloge_fk1` FOREIGN KEY (`id_slika`) REFERENCES `Slike`(`id`);

ALTER TABLE `Uporabniki` ADD CONSTRAINT `Uporabniki_fk0` FOREIGN KEY (`id_slika`) REFERENCES `Slike`(`id`);

ALTER TABLE `Uporabniki` ADD CONSTRAINT `Uporabniki_fk1` FOREIGN KEY (`id_drzava`) REFERENCES `Drzave`(`id`);

ALTER TABLE `Uporabniki` ADD CONSTRAINT `Uporabniki_fk2` FOREIGN KEY (`id_kraji`) REFERENCES `Kraji`(`id`);

ALTER TABLE `Modul_Uporabnik` ADD CONSTRAINT `Modul_Uporabnik_fk0` FOREIGN KEY (`id_modul`) REFERENCES `Moduli`(`id`);

ALTER TABLE `Modul_Uporabnik` ADD CONSTRAINT `Modul_Uporabnik_fk1` FOREIGN KEY (`id_uporabnik`) REFERENCES `Uporabniki`(`id`);

ALTER TABLE `Modul_Ucitelj` ADD CONSTRAINT `Modul_Ucitelj_fk0` FOREIGN KEY (`id_ucitelj`) REFERENCES `Ucitelji`(`id`);

ALTER TABLE `Modul_Ucitelj` ADD CONSTRAINT `Modul_Ucitelj_fk1` FOREIGN KEY (`id_modul`) REFERENCES `Moduli`(`id`);

