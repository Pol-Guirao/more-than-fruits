-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2021 a las 01:29:03
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `morefruits`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `access`
--

CREATE TABLE `access` (
  `Id_User` int(11) NOT NULL,
  `Name_User` varchar(255) NOT NULL,
  `PW_User` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `access`
--

INSERT INTO `access` (`Id_User`, `Name_User`, `PW_User`, `Role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user1', 'user1', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruits`
--

CREATE TABLE `fruits` (
  `Id_Fruit` int(11) NOT NULL,
  `Name_Fruit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fruits`
--

INSERT INTO `fruits` (`Id_Fruit`, `Name_Fruit`) VALUES
(1, 'Watermelon'),
(2, 'Peach'),
(3, 'Pomegranate'),
(4, 'Melon'),
(5, 'Apple'),
(6, 'Pear'),
(7, 'Strawberry'),
(8, 'Cherry');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fruit_orders`
--

CREATE TABLE `fruit_orders` (
  `Id_Order` int(11) NOT NULL,
  `Date_Order` date NOT NULL,
  `Provider` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Phone` int(9) NOT NULL,
  `Provider_Id` varchar(255) NOT NULL,
  `Fruit` int(11) NOT NULL,
  `Kilograms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fruit_orders`
--

INSERT INTO `fruit_orders` (`Id_Order`, `Date_Order`, `Provider`, `Country`, `Phone`, `Provider_Id`, `Fruit`, `Kilograms`) VALUES
(1, '2021-04-06', 'Fruit1 SL', '+34 994', 543235522, 'B12345678', 1, 455),
(2, '2021-02-26', 'Fruit2 SA', '+34 273', 123456789, 'U23451432', 2, 600),
(3, '2021-04-01', 'Fruit3&CO', '+34 242', 987654321, 'Y72341111', 3, 255);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`Id_User`);

--
-- Indices de la tabla `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`Id_Fruit`);

--
-- Indices de la tabla `fruit_orders`
--
ALTER TABLE `fruit_orders`
  ADD PRIMARY KEY (`Id_Order`),
  ADD KEY `Fruit` (`Fruit`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `access`
--
ALTER TABLE `access`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fruits`
--
ALTER TABLE `fruits`
  MODIFY `Id_Fruit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `fruit_orders`
--
ALTER TABLE `fruit_orders`
  MODIFY `Id_Order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fruit_orders`
--
ALTER TABLE `fruit_orders`
  ADD CONSTRAINT `fruit_orders_ibfk_1` FOREIGN KEY (`Fruit`) REFERENCES `fruits` (`Id_Fruit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
