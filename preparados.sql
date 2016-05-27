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

CREATE TABLE `materias` (
  `MAT_ID` int(5) NOT NULL,
  `MAT_NAME` varchar(75) COLLATE latin1_spanish_ci NOT NULL,
  `MAT_COL` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO `materias` (`MAT_ID`, `MAT_NAME`, `MAT_COL`) VALUES
(1400, 'Matematicas IV', 3),
(1401, 'Fisica III', 1),
(1402, 'Lengua Española', 22),
(1403, 'Historia Universal III', 12),
(1404, 'Lógica', 17),
(1405, 'Geografia', 11),
(1406, 'Dibujo II', 16),
(1407, 'Lengua Extranjera Ingles IV', 19),
(1408, 'Lengua Extranjera Frances IV', 18),
(1409, 'Educacion Estetica y Artistica IV', 14),
(1410, 'Eduacion Fisica IV', 5),
(1411, 'Orientacion Educativa IV', 7),
(1412, 'Informatica', 2),
(1500, 'Matematicas V', 3),
(1501, 'Quimica III', 9),
(1502, 'Biologia IV', 4),
(1503, 'Educacion para la Salud', 6),
(1504, 'Historia de Mexico II', 12),
(1505, 'Etimologias Grecolatinas', 21),
(1506, 'Lengua Extranjera Ingles V', 19),
(1507, 'Lengua Extranjera Frances V', 18),
(1508, 'Lengua Extranjera Italiano I', 20),
(1509, 'Lengua Extranjera Aleman I', 13),
(1510, 'Lengua Extranjera Ingles I', 19),
(1511, 'Lengua Extranjera Frances I', 18),
(1512, 'Etica', 17),
(1513, 'Educacion Fisica V', 5),
(1514, 'Educacion Estetica y Artistica V', 14),
(1515, 'Orientacion Educativa V', 7),
(1516, 'Literatura Universal', 22),
(1601, 'Derecho', 10),
(1602, 'Literatura mexicana e iberoamericana', 22),
(1603, 'Lengua Extranjera Ingles VI', 19),
(1604, 'Lengua Extranjera Frances VI', 18),
(1605, 'Lengua Extranjera Aleman II', 13),
(1606, 'Lengua Extranjera Italiano II', 20),
(1607, 'Lengua Extranjera Ingles II', 19),
(1608, 'Lengua Extranjera Frances II', 18),
(1609, 'Psicologia', 8),
(1700, 'Higiene Mental', 8),
(1701, 'Teatro VI', 24),
(1702, 'Musica VI', 23),
(1712, 'Estadistica y Probabilidad', 3),
(1610, 'Dibujo Constructivo II', 16),
(1611, 'Fisica IV', 1),
(1612, 'Quimica IV', 9),
(1613, 'Biologia IV', 4),
(1706, 'Geologia y Mineralogia', 9),
(1709, 'Fisico-Quimica', 1),
(1710, 'Temas Selectos de Matematicas', 3),
(1719, 'Informatica Aplicada a la Ciencia y a la Industria', 2),
(1721, 'Cosmografia', 11),
(1613, 'Biologia V', 4),
(1711, 'Temas Selectos de Biologia', 4),
(1716, 'Temas Selectos de Morfologia y Fisiologia', 6),
(1614, 'Geografia Economica', 11),
(1615, 'Introduccion al Estudio de las Ciencias Sociales y Economicas', 10),
(1616, 'Problemas Socio Politicos y Economicos de Mexico', 10),
(1704, 'Contabilidad y Gestion Administrativa', 10),
(1707, 'Geografia Politica', 11),
(1720, 'Sociologia', 10),
(1617, 'Historia de la Cultura', 12),
(1618, 'Historia de las Doctrinas Filosoficas', 17),
(1703, 'Revolucion Mexicana', 12),
(1705, 'Pensamiento Filosofico de Mexico', 17),
(1708, 'Modelado II', 16),
(1713, 'Latin', 21),
(1714, 'Griego', 21),
(1715, 'Comunicacion Visual', 16),
(1717, 'Estetica', 17),
(1600, 'Matematicas VI (Area I y II)', 3),
(1619, 'Matematicas VI (Area III)', 3),
(1620, 'Matematicas VI (Area IV)', 3);

CREATE TABLE `profesor` (
  `PROF_ID` int(11) NOT NULL,
  `PROF_NAME` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `PROF_PASS` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `PROF_AREA` int(2) NOT NULL,
  `PROF_COL` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

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
  `COORD_COL` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE `pregunta` (
  `PREG_ID` int(11) NOT NULL,
  `PREG_MAT` int(2) NOT NULL,
  `PREG_TEXT` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `PREG_CORR` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `PREG_INCUNO` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `PREG_INCDOS` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `PREG_INCTRES` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `PREG_PROF` int(11) NOT NULL,
  `PREG_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ADMIN_ID`);

 ALTER TABLE `areas`
  ADD PRIMARY KEY (`AREA_ID`);

ALTER TABLE `colegios`
  ADD PRIMARY KEY (`COL_ID`);

ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`COORD_ID`);

ALTER TABLE `profesor`
  ADD PRIMARY KEY (`PROF_ID`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`USER_NOCT`);

ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`PREG_ID`);

ALTER TABLE `colegios`
  MODIFY `COL_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

ALTER TABLE `coordinador`
  MODIFY `COORD_ID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `profesor`
  MODIFY `PROF_ID` int(11) NOT NULL AUTO_INCREMENT;

  ALTER TABLE `pregunta`
    MODIFY `PREG_ID` int(11) NOT NULL AUTO_INCREMENT;
