-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2016 a las 05:21:52
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE USER PREPArados@localhost IDENTIFIED BY 'PREPArados';
CREATE DATABASE PREPArados;
USE PREPArados;
REVOKE ALL PRIVILEGES ON *.* FROM 'PREPArados'@'localhost'; GRANT ALL PRIVILEGES ON *.* TO 'PREPArados'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

--
-- Base de datos: `preparados`
--

-- --------------------------------------------------------

CREATE TABLE `usuarios` (
  `USER_NAME` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `USER_NOCT` char(9) COLLATE latin1_spanish_ci NOT NULL,
  `USER_PASS` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

  CREATE TABLE `administrador` (
    `ADMIN_ID` int(11) NOT NULL,
    `ADMIN_NAME` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
    `ADMIN_PASS` varchar(50) COLLATE latin1_spanish_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

  INSERT INTO `administrador` (`ADMIN_ID`, `ADMIN_NAME`, `ADMIN_PASS`) VALUES
(1, 'ENP 6', '324fd71a26f8762c1caf1a345a83f6c846c4b010bf79c97dfe');

CREATE TABLE `coordinador` (
  `COORD_ID` int(11) NOT NULL,
  `COORD_NAME` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `COORD_PASS` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO `coordinador` (`COORD_ID`, `COORD_NAME`, `COORD_PASS`) VALUES
(1, 'José Pérez Hernández', '567gh4573a2d309ee428d488aa259ec94e783f7b71736567jk');

CREATE TABLE `areas` (
  `AREA_ID` int(2) NOT NULL,
  `AREA_NAME` varchar(75) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO `areas` (`AREA_ID`, `AREA_NAME`) VALUES
(1, 'Ciencias Físico - Matemáticas y de las Ingenierías'),
(2, 'Ciencias Biológicas y de la Salud'),
(3, 'Ciencias Sociales'),
(4, 'Humanidades y Artes');

CREATE TABLE `colegios` (
  `COL_NAME` varchar(35) COLLATE latin1_spanish_ci NOT NULL,
  `AREA_ID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO `colegios` (`COL_NAME`, `AREA_ID`) VALUES
('Física', 1),
('Informática', 1),
('Matemáticas', 1),
('Biología', 2),
('Educación Física', 2),
('Morfología, Fisiología y Salud', 2),
('Orientación Educativa', 2),
('Psicologia e Higiene Mental', 2),
('Química', 2),
('Ciencias Sociales', 3),
('Geografía', 3),
('Historia', 3),
('Alemán', 4),
('Artes Plásticas', 4),
('Danza', 4),
('Dibujo y Modelado', 4),
('Filosofía', 4),
('Francés', 4),
('Inglés', 4),
('Italiano', 4),
('Letras Clásicas', 4),
('Literatura', 4),
('Música', 4),
('Teatro', 4),
('Producción Editorial', 4);



ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ADMIN_ID`);

ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`COORD_ID`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`USER_NOCT`);
  
ALTER TABLE `areas`
ADD PRIMARY KEY (`AREA_ID`);

ALTER TABLE `coordinador`
MODIFY `COORD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
