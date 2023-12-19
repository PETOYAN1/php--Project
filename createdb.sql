--Create DB

CREATE DATABASE tutorial;

--create table

CREATE TABLE `tutorial`.`admin` (`ID` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `surname` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `dob` DATE NOT NULL , `gender` VARCHAR(50) NOT NULL , `phone` VARCHAR(50) NOT NULL , `image` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , `dateRegister` DATETIME(6) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;