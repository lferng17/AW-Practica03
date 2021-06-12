-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2021 a las 12:29:36
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kioskodb`
--
DROP DATABASE `kioskodb`;
CREATE DATABASE IF NOT EXISTS `kioskodb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kioskodb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colecciones`
--

DROP TABLE IF EXISTS `colecciones`;
CREATE TABLE `colecciones` (
  `id` int(6) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `precio` int(10) DEFAULT NULL,
  `caratula` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colecciones`
--

INSERT INTO `colecciones` VALUES(1, 'Eurocopa', 5, '');
INSERT INTO `colecciones` VALUES(2, 'Toy Story', 6, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cromos`
--

DROP TABLE IF EXISTS `cromos`;
CREATE TABLE `cromos` (
  `id` int(6) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `precio` int(8) DEFAULT NULL,
  `id_coleccion` int(6) NOT NULL,
  `caratula` varchar(100) DEFAULT NULL,
  `unidades` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cromos`
--

INSERT INTO `cromos` VALUES(3, 'Italia', 3, 1, '', 8);
INSERT INTO `cromos` VALUES(4, 'España', 100, 1, '', 100);
INSERT INTO `cromos` VALUES(5, 'Francia', 6, 1, '', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_user` int(8) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `saldo` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` VALUES(1, 'Wisin', '1234', 1, 99);
INSERT INTO `usuarios` VALUES(2, 'Adolfo', '321', 0, -1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_colecciones`
--

DROP TABLE IF EXISTS `usuarios_colecciones`;
CREATE TABLE `usuarios_colecciones` (
  `id_usuario` int(11) NOT NULL,
  `id_coleccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_colecciones`
--

INSERT INTO `usuarios_colecciones` VALUES(1, 1);
INSERT INTO `usuarios_colecciones` VALUES(1, 2);
INSERT INTO `usuarios_colecciones` VALUES(2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_cromos`
--

DROP TABLE IF EXISTS `usuarios_cromos`;
CREATE TABLE `usuarios_cromos` (
  `id_usuario` int(11) NOT NULL,
  `id_cromo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colecciones`
--
ALTER TABLE `colecciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cromos`
--
ALTER TABLE `cromos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_album_cromo` (`id_coleccion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `usuarios_cromos`
--
ALTER TABLE `usuarios_cromos`
  ADD KEY `id_usuario_usuarios` (`id_usuario`),
  ADD KEY `id_cromo_cromos` (`id_cromo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colecciones`
--
ALTER TABLE `colecciones`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cromos`
--
ALTER TABLE `cromos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cromos`
--
ALTER TABLE `cromos`
  ADD CONSTRAINT `id_album_cromo` FOREIGN KEY (`id_coleccion`) REFERENCES `colecciones` (`id`);

--
-- Filtros para la tabla `usuarios_cromos`
--
ALTER TABLE `usuarios_cromos`
  ADD CONSTRAINT `id_cromo_cromos` FOREIGN KEY (`id_cromo`) REFERENCES `cromos` (`id`),
  ADD CONSTRAINT `id_usuario_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
