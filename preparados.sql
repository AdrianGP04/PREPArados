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
CREATE TABLE `administrador` (
    `ADMIN_ID` int(11) NOT NULL,
    `ADMIN_NAME` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
    `ADMIN_PASS` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO `administrador` (`ADMIN_ID`, `ADMIN_NAME`, `ADMIN_PASS`) VALUES
(1, 'ENP 6', '324fd71a26f8762c1caf1a345a83f6c846c4b010bf79c97dfe');

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
  `COL_ID` int(2) NOT NULL,
  `COL_NAME` varchar(35) COLLATE latin1_spanish_ci NOT NULL,
  `AREA_ID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO `colegios` (`COL_ID`, `COL_NAME`, `AREA_ID`) VALUES
(1, 'Fisica', 1),
(2, 'Informatica', 1),
(3, 'Matematicas', 1),
(4, 'Biologia', 2),
(5, 'Educacion Fisica', 2),
(6, 'Morfologia, Fisiologia y Salud', 2),
(7, 'Orientacion Educativa', 2),
(8, 'Psicologia e Higiene Mental', 2),
(9, 'Quimica', 2),
(10, 'Ciencias Sociales', 3),
(11, 'Geografia', 3),
(12, 'Historia', 3),
(13, 'Aleman', 4),
(14, 'Artes Plasticas', 4),
(15, 'Danza', 4),
(16, 'Dibujo y Modelado', 4),
(17, 'Filosofia', 4),
(18, 'Frances', 4),
(19, 'Ingles', 4),
(20, 'Italiano', 4),
(21, 'Letras Clasicas', 4),
(22, 'Literatura', 4),
(23, 'Musica', 4),
(24, 'Teatro', 4),
(25, 'Produccion Editorial', 4);


CREATE TABLE `usuarios` (
  `USER_NAME` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `USER_NOCT` char(9) COLLATE latin1_spanish_ci NOT NULL,
  `USER_PASS` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


CREATE TABLE `coordinador` (
  `COORD_ID` int(11) NOT NULL,
  `COORD_NAME` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `COORD_PASS` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `COORD_AREA` int(2) NOT NULL,
  `COORD_COL` varchar(35) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;


ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ADMIN_ID`);

 ALTER TABLE `areas`
  ADD PRIMARY KEY (`AREA_ID`);

ALTER TABLE `colegios`
  ADD PRIMARY KEY (`COL_ID`);

ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`COORD_ID`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`USER_NOCT`);


ALTER TABLE `coordinador`
  MODIFY `COORD_ID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `colegios`
  MODIFY `COL_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
