-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2021 a las 11:38:38
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
DROP DATABASE IF EXISTS kioskodb;
CREATE DATABASE IF NOT EXISTS `kioskodb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kioskodb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colecciones`
--

CREATE TABLE `colecciones` (
  `id` int(6) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `precio` int(10) DEFAULT NULL,
  `caratula` varchar(100) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colecciones`
--

INSERT INTO `colecciones` VALUES(7, 'Eurocopa', 10, 'logoeuro.png', 1);
INSERT INTO `colecciones` VALUES(8, 'Toy Story', 8, 'logotoy.png', 1);
INSERT INTO `colecciones` VALUES(9, 'Hot Wheels', 12, 'logohotwheels.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cromos`
--

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

INSERT INTO `cromos` VALUES(16, 'España', 5, 7, 'espana.png', 4);
INSERT INTO `cromos` VALUES(17, 'Alemania', 6, 7, 'alemania.png', 7);
INSERT INTO `cromos` VALUES(18, 'Bélgica', 4, 7, 'belgica.png', 8);
INSERT INTO `cromos` VALUES(19, 'Francia', 5, 7, 'francia.png', 6);
INSERT INTO `cromos` VALUES(20, 'Inglaterra', 3, 7, 'Inglaterra.png', 10);
INSERT INTO `cromos` VALUES(21, 'Portugal', 4, 7, 'portugal.png', 10);
INSERT INTO `cromos` VALUES(22, 'Italia', 4, 7, 'italia.png', 9);
INSERT INTO `cromos` VALUES(23, 'Ucrania', 2, 7, 'ucrania.png', 12);
INSERT INTO `cromos` VALUES(24, 'Polonia', 1, 7, 'polonia.png', 15);
INSERT INTO `cromos` VALUES(25, 'Macedonia del Norte', 1, 7, 'macedonia.png', 13);
INSERT INTO `cromos` VALUES(26, 'Hungría', 2, 7, 'hungria.png', 10);
INSERT INTO `cromos` VALUES(27, 'Suecia', 2, 7, 'suecia.png', 10);
INSERT INTO `cromos` VALUES(28, 'Buzz', 8, 8, 'buzz.png', 5);
INSERT INTO `cromos` VALUES(29, 'Woody', 7, 8, 'woody.png', 5);
INSERT INTO `cromos` VALUES(30, 'Hamm', 3, 8, 'hamm.png', 7);
INSERT INTO `cromos` VALUES(31, 'Jessie', 3, 8, 'jessie.png', 8);
INSERT INTO `cromos` VALUES(32, 'Marcianito', 2, 8, 'marciano.png', 15);
INSERT INTO `cromos` VALUES(33, 'Mr Potato', 4, 8, 'mrpotato.png', 7);
INSERT INTO `cromos` VALUES(34, 'T-Rex', 4, 8, 'trex.png', 6);
INSERT INTO `cromos` VALUES(35, 'Perdigón', 2, 8, 'perdigon.png', 12);
INSERT INTO `cromos` VALUES(36, 'Buzz y Woody', 12, 8, 'buzzywoody.png', 5);
INSERT INTO `cromos` VALUES(37, 'Trixie', 1, 8, 'trixie.png', 15);
INSERT INTO `cromos` VALUES(38, 'Edición Conjunta', 15, 8, 'todos.png', 5);
INSERT INTO `cromos` VALUES(39, 'Aston Martin Vantage', 6, 9, 'astonvantage.png', 6);
INSERT INTO `cromos` VALUES(40, 'Chevrolet Silverado', 2, 9, 'chevroletsilverado.png', 12);
INSERT INTO `cromos` VALUES(41, 'Datsun 510', 3, 9, 'datsun510.png', 13);
INSERT INTO `cromos` VALUES(42, 'Ferrari 599xx', 13, 9, 'ferrari599xx.png', 5);
INSERT INTO `cromos` VALUES(43, 'Ford Mustang', 8, 9, 'fordmustang.png', 7);
INSERT INTO `cromos` VALUES(44, 'Ford Taurino', 3, 9, 'fordtaurino.png', 11);
INSERT INTO `cromos` VALUES(45, 'Lamborghini Huracán', 8, 9, 'lamborghinihuracan.png', 7);
INSERT INTO `cromos` VALUES(46, 'Lamborghini Veneno', 13, 9, 'lamborghiniveneno.png', 5);
INSERT INTO `cromos` VALUES(47, 'Mini Cooper', 3, 9, 'minicooper.png', 10);
INSERT INTO `cromos` VALUES(48, 'Pagani Huayra', 13, 9, 'paganihuayra.png', 5);
INSERT INTO `cromos` VALUES(49, 'Porsche 911 ', 10, 9, 'porsche911.png', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

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

INSERT INTO `usuarios` VALUES(1, 'Pepe', '1234', 1, 60);
INSERT INTO `usuarios` VALUES(2, 'Miguel', '666', 0, 25);
INSERT INTO `usuarios` VALUES(3, 'Luis', '0000', 0, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_colecciones`
--

CREATE TABLE `usuarios_colecciones` (
  `id_usuario` int(11) NOT NULL,
  `id_coleccion` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_colecciones`
--

INSERT INTO `usuarios_colecciones` VALUES(1, 5, 2);
INSERT INTO `usuarios_colecciones` VALUES(2, 7, 1);
INSERT INTO `usuarios_colecciones` VALUES(2, 8, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_cromos`
--

CREATE TABLE `usuarios_cromos` (
  `id_usuario` int(11) NOT NULL,
  `id_cromo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_cromos`
--

INSERT INTO `usuarios_cromos` VALUES(2, 16);
INSERT INTO `usuarios_cromos` VALUES(2, 26);

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cromos`
--
ALTER TABLE `cromos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
