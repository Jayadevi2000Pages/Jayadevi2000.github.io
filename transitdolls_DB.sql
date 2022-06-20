-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 20-06-2022 a las 11:48:00
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `transitdolls`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `pick-up_point` varchar(500) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `last_name`, `email`, `pick-up_point`, `country`, `city`, `province`, `postal_code`, `password`) VALUES
(1, 'Juan', 'Gomez', 'tufygjvh', '7tiygukh', '87tiygu', 'i7tyghb', 'iuhkbj', 28050, '1234'),
(9, NULL, NULL, 'becario1@formazion.com', NULL, NULL, NULL, NULL, NULL, '123456789'),
(27, NULL, NULL, 'jayadevi.pineiro@gmail.com', NULL, NULL, NULL, NULL, NULL, '789456'),
(741, NULL, NULL, 'utf', NULL, NULL, NULL, NULL, NULL, '75466'),
(966, NULL, NULL, 'utf', NULL, NULL, NULL, NULL, NULL, '456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dolls`
--

CREATE TABLE `dolls` (
  `doll_id` int(11) NOT NULL,
  `material` varchar(200) NOT NULL,
  `handmade` varchar(200) NOT NULL,
  `height` double NOT NULL,
  `name` varchar(200) NOT NULL,
  `custom` varchar(100) NOT NULL,
  `made_in` varchar(200) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dolls`
--

INSERT INTO `dolls` (`doll_id`, `material`, `handmade`, `height`, `name`, `custom`, `made_in`, `type`, `Foto`, `precio`) VALUES
(1, 'resina', 'no', 45, 'bjn', 'yes', 'Japan', 'Momoko', '1Momoko.jpg', 25),
(2, 'Plastico', 'no', 25, 'Barbie', 'no', 'China', 'Barbie', '2BarbieCurvy.jpg', 55),
(3, 'Otros', 'yes', 47, 'Custom Funko', 'yes', 'Spain', 'Funko Pop', '3Funko.jpg', 114),
(4, 'resina', 'no', 36, 'jnnj', 'yes', 'korea', 'BJD', '4BJD.jpg', 0),
(5, 'resina', 'no', 26, 'gvyb', 'yes', 'Japan', 'Momoko', '5Momoko.jpg', 25),
(6, 'Plastico', 'no', 32, 'Scara', 'no', 'China', 'Monster High', '6MonsterHigh.jpg', 55),
(7, 'arcilla', 'yes', 15, 'Smart doll Mirai', 'yes', 'Japan', 'Otros', '7Otro.jpg', 114),
(8, 'resina', 'no', 48, 'Naomi y Verónica Rainbow High', 'yes', 'Estados Unidos', 'Otros', '8Otro.jpg', 0),
(9, 'arcilla', 'yes', 48, 'Parca', 'yes', 'rusia', 'Otros', '9Parca.jfif', 55),
(10, 'Plastic', 'no', 48, 'nancy', 'no', 'Estados Unidos', 'Otros', '10Angel.jfif', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dolls_sold`
--

CREATE TABLE `dolls_sold` (
  `doll_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date_sold` timestamp NOT NULL DEFAULT current_timestamp(),
  `sold_id` int(11) NOT NULL,
  `review` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indices de la tabla `dolls`
--
ALTER TABLE `dolls`
  ADD PRIMARY KEY (`doll_id`);

--
-- Indices de la tabla `dolls_sold`
--
ALTER TABLE `dolls_sold`
  ADD PRIMARY KEY (`sold_id`),
  ADD KEY `doll_id` (`doll_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dolls_sold`
--
ALTER TABLE `dolls_sold`
  ADD CONSTRAINT `dolls_sold_ibfk_1` FOREIGN KEY (`doll_id`) REFERENCES `dolls` (`doll_id`),
  ADD CONSTRAINT `dolls_sold_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
