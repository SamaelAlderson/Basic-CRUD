DROP DATABASE IF EXISTS basiccrud;
CREATE DATABASE basiccrud;
USE basiccrud;

DROP TABLE IF EXISTS student;
CREATE TABLE student (
    id INT NOT NULL AUTO_INCREMENT,
    voornaam VARCHAR(50) NOT NULL,
    achternaam VARCHAR(50) NOT NULL,
    email VARCHAR(50) NULL,
    telephone VARCHAR(10) NULL,
    street VARCHAR(50) NOT NULL,
    houseno INT NOT NULL,
    housenoadd VARCHAR(10) NULL,
    city VARCHAR(50) NOT NULL,
    postcode VARCHAR(6) NOT NULL,
    PRIMARY KEY (id)
);