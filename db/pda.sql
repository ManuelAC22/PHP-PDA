-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2018 a las 23:58:48
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opinion`
--

CREATE TABLE `opinion` (
  `idopinion` int(15) NOT NULL,
  `tituloacopio` varchar(50) NOT NULL,
  `dniusuario` char(8) NOT NULL,
  `opinion` varchar(200) NOT NULL,
  `puntaje` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opinion`
--

INSERT INTO `opinion` (`idopinion`, `tituloacopio`, `dniusuario`, `opinion`, `puntaje`) VALUES
(4, 'PUCP', '09696121', 'skdjfsdjkfhsjkdfhskjdhfakjdfhskdjf', '2.3'),
(5, 'PUCP', '56848454', 'skdjfsdjkfhsjkdfhs', '3.5'),
(6, 'PUCP', '98765432', 'genial', '2.5'),
(7, 'Fremont School', '74824444', 'kcigigigog', '4.5'),
(8, 'jdjsj', '12345678', 'juan', '1.5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntoacopio`
--

CREATE TABLE `puntoacopio` (
  `titulo` varchar(50) NOT NULL,
  `dirigidos` varchar(50) NOT NULL,
  `necesidad` varchar(50) NOT NULL,
  `fechacierre` varchar(50) NOT NULL,
  `latitud` char(20) DEFAULT NULL,
  `longitud` char(20) DEFAULT NULL,
  `DNIUSUARIO` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puntoacopio`
--

INSERT INTO `puntoacopio` (`titulo`, `dirigidos`, `necesidad`, `fechacierre`, `latitud`, `longitud`, `DNIUSUARIO`) VALUES
('Autonoma del Peru', 'Chosica', 'Medicina', '1900/01/26', '-12.194656543906216', '-76.97183925658466', '09696121'),
('Cerca Autonoma', 'mi casa', 'luz', '2018/09/29', '-12.191719255541852', '-76.97005793452263', '12345678'),
('Fremont School', 'VMT', 'alimentos', '2018/09/26', '33.969755950773795', '-118.26902188360691', '98765432'),
('giampieer', 'alcalde', 'nada', '2018/8/29', '-16.954959835994323', '21.15228284150362', '74824444'),
('hola hola 2', 'vmt', 'leche', '1900/01/25', '-12.192019441809935', '-76.97062522172928', '09696121'),
('hwjejj', 'bjdjdk', 'jdjdjek', '1900/01/12', '-12.08417014397488', '-76.95478845387697', '74824444'),
('jdjjdjd', 'ndnndjjd', 'ndnmdkw', '2018/12/01', '-12.190665323770164', '-76.96988862007856', '74824444'),
('jdjsj', 'jsjjsks', 'jwjwj', '2018/09/29', '-12.195615096326756', '-76.96855790913105', '74824444'),
('jsjdj', 'jdjdj', 'jdj', '1900/01/26', '-12.087281719685008', '-76.94679748266935', '74824444'),
('La Piramide', 'Chosica', 'Medicinas', '1900/01/27', '-12.082126011487752', '-76.94945856928825', '74824444'),
('PUCP', 'VES', 'medicamentos', '18/08/2018', '-12.072248', '-77.080361', '74824444'),
('Puerta 1', 'hdhsjd', 'jdjwj', '1900/01/19', '-12.07424800510922', '-76.94138076156378', '09696121'),
('qwerywiuwu', 'jdjejjwj jejjekwk jdjje', 'bsjjs djdhe ', '2018/12/06', '-12.180790408873612', '-76.97401721030474', '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `DNI` char(8) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `contrasena` varchar(15) NOT NULL,
  `correo` varchar(29) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`DNI`, `Nombre`, `contrasena`, `correo`, `estado`) VALUES
('09696121', 'Miguel Alcalde', '123', 'miguel_456@gmail.com', '1'),
('12345678', 'Diego Ortiz', 'qwe', 'diegoortizleon@gmail.com', '1'),
('56848454', 'Stephany Alcalde', '123', 'tephyta.28@gmail.com', '1'),
('74824444', 'Manuel Alcalde', '123', 'mac2291998@gmail.com', '1'),
('98765432', 'Pepe Suarez', '123', 'pepito@yahho.com', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`idopinion`),
  ADD UNIQUE KEY `dniusuario` (`dniusuario`);

--
-- Indices de la tabla `puntoacopio`
--
ALTER TABLE `puntoacopio`
  ADD PRIMARY KEY (`titulo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
