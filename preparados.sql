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


ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ADMIN_ID`);

ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`COORD_ID`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`USER_NOCT`);

ALTER TABLE `coordinador`
MODIFY `COORD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
