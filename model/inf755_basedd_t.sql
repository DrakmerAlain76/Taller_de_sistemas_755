-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-10-2020 a las 05:13:16
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inf755_basedd_t`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

DROP TABLE IF EXISTS `accesos`;
CREATE TABLE IF NOT EXISTS `accesos` (
  `id_a` int(11) NOT NULL AUTO_INCREMENT,
  `nuser` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_a` date NOT NULL,
  `hora_a` time NOT NULL,
  `tipo` int(1) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`id_a`, `nuser`, `fecha_a`, `hora_a`, `tipo`) VALUES
(1, 'jose', '2020-08-19', '21:05:57', 2),
(3, 'marcelo@arias.com', '2020-08-19', '21:12:49', 2),
(4, 'drak@ro.com', '2020-08-20', '19:31:37', 2),
(5, 'drak@ro.com', '2020-08-20', '19:33:45', 2),
(6, 'drak@ro.com', '2020-08-20', '19:34:05', 2),
(7, 'drak@ro.com', '2020-08-20', '19:35:16', 2),
(8, 'drak@ro.com', '2020-08-20', '19:36:29', 2),
(9, 'rodra@gmail.com', '2020-08-20', '20:00:46', 1),
(10, 'drak@ro.com', '2020-08-20', '21:34:57', 2),
(11, 'drak@ro.com', '2020-08-20', '21:38:23', 2),
(12, 'drak@ro.com', '2020-08-20', '21:42:56', 2),
(13, 'drak@ro.com', '2020-08-20', '21:52:31', 2),
(14, 'drak@ro.com', '2020-08-20', '22:25:20', 2),
(17, 'drak@ro.com', '2020-08-20', '22:57:44', 2),
(18, 'marcelo@arias.com', '2020-08-20', '22:58:39', 2),
(19, 'drak@ro.com', '2020-08-20', '23:01:00', 2),
(20, 'rodra@gmail.com', '2020-08-26', '22:33:12', 1),
(21, 'drak@ro.com', '2020-08-26', '22:34:05', 2),
(22, 'drak@ro.com', '2020-08-26', '22:46:25', 2),
(23, 'marcelo_arias', '2020-08-26', '22:51:05', 2),
(24, 'drakm', '2020-08-27', '00:14:43', 2),
(25, 'marcelo_arias', '2020-08-27', '03:07:32', 2),
(26, 'paloa12', '2020-08-27', '03:36:40', 2),
(27, 'drakm', '2020-08-27', '03:43:10', 2),
(28, 'rodra', '2020-08-27', '20:14:25', 1),
(29, 'drakm', '2020-08-28', '11:05:59', 2),
(30, 'rodra', '2020-08-28', '11:08:44', 1),
(31, 'marcelo_arias', '2020-08-28', '11:30:44', 2),
(32, 'drakm', '2020-08-28', '13:35:21', 2),
(33, 'rodra', '2020-08-28', '13:37:11', 1),
(34, 'drakm', '2020-08-28', '13:40:33', 2),
(35, 'drakm', '2020-09-02', '05:11:20', 2),
(36, 'rodra', '2020-09-02', '05:21:41', 1),
(37, 'drakm', '2020-09-02', '05:22:06', 2),
(38, 'drakm', '2020-09-02', '05:23:35', 2),
(39, 'rodra', '2020-09-02', '05:23:55', 1),
(40, 'rodra', '2020-09-02', '07:53:16', 1),
(41, 'drakm', '2020-09-02', '09:39:03', 2),
(42, 'rodra', '2020-09-02', '09:41:23', 1),
(43, 'rodra', '2020-09-04', '01:57:43', 1),
(44, 'drakm', '2020-09-04', '02:35:38', 2),
(45, 'rodra', '2020-09-04', '02:35:51', 1),
(46, 'drakm', '2020-09-04', '02:36:10', 2),
(47, 'rodra', '2020-09-04', '02:36:42', 1),
(48, 'drakm', '2020-09-04', '02:38:10', 2),
(49, 'rodra', '2020-09-04', '02:41:08', 1),
(50, 'rodra', '2020-09-04', '20:08:37', 1),
(51, 'drakm', '2020-09-04', '20:59:30', 2),
(52, 'rodra', '2020-09-04', '20:59:47', 1),
(53, 'drakm', '2020-09-05', '02:40:12', 2),
(54, 'drakm', '2020-09-05', '14:14:23', 2),
(55, 'rodra', '2020-09-05', '14:15:14', 1),
(56, 'rodra', '2020-09-08', '23:47:43', 1),
(57, 'drakm', '2020-09-08', '23:59:01', 2),
(58, 'drakm', '2020-09-09', '02:07:33', 2),
(59, 'rodra', '2020-09-09', '02:09:32', 1),
(60, 'rodra', '2020-09-09', '02:12:09', 1),
(61, 'rodra', '2020-09-09', '06:21:08', 1),
(62, 'drakm', '2020-09-09', '06:23:52', 2),
(63, 'rodra', '2020-09-09', '06:58:03', 1),
(64, 'rodra', '2020-09-09', '07:48:26', 1),
(65, 'drakm', '2020-09-09', '07:48:40', 2),
(66, 'rodra', '2020-09-09', '07:51:35', 1),
(67, 'rodra', '2020-09-09', '08:17:44', 1),
(68, 'drakm', '2020-09-09', '10:22:11', 2),
(69, 'rodra', '2020-09-09', '10:23:03', 1),
(70, 'rodra', '2020-09-09', '10:59:20', 1),
(71, 'pedro123', '2020-09-29', '23:47:19', 2),
(72, 'pedro123', '2020-10-04', '16:20:37', 2),
(73, 'pedro123', '2020-10-04', '16:25:53', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_curso` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `expositor` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `costo` int(11) NOT NULL,
  `cupos` int(11) NOT NULL,
  `fecha_curso` date NOT NULL,
  `reservas` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `expositor`, `comentario`, `costo`, `cupos`, `fecha_curso`, `reservas`, `horario`) VALUES
(1, 'HTML', 'fernando hernandez', 'Este es curso de introduccion de de HTML y las teclonogias de la web asi mismo se vera mas de la actulidad y la tendencias de estas nuevas tecnologias', 100, 151, '2020-08-24', 10, 10),
(2, 'CSS', 'victor robles', 'Este es curso de introduccion de de CSS y las teclonogias de la web asi mismo se vera mas de la actulidad y la tendencias de estas nuevas tecnologias', 100, 150, '2020-08-25', 10, 20),
(3, 'JAVASCRIPT', 'FAZT', 'Este es curso de introduccion de de JAVASCRIPT y las teclonogias de la web asi mismo se vera mas de la actulidad y la tendencias de estas nuevas tecnologias', 100, 150, '2020-08-26', 8, 11),
(10, 'Salchichas ', 'master chef Carlos', 'descripcion y ss ', 154, 86, '0000-00-00', 1, 9),
(11, 'cumputacion', 'jose arias', 'descripcion mucho', 150, 784, '0000-00-00', 1, 12),
(13, 'salteÃ±as', 'Alberto', 'descripcion de salteÃ±as', 150, 200, '2020-09-12', 1, 10),
(14, 'Curso de C', 'Pedro Fernandez', 'descripcion del curso en C ', 200, 150, '2020-09-24', 1, 15),
(21, 'nuevo curso', 'tito', 'descripcion ', 152, 500, '2020-09-16', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `graficos`
--

DROP TABLE IF EXISTS `graficos`;
CREATE TABLE IF NOT EXISTS `graficos` (
  `id_grafico` int(11) NOT NULL AUTO_INCREMENT,
  `reservas` int(11) NOT NULL,
  `ventas` int(11) NOT NULL,
  `reservas_pagadas` int(11) NOT NULL,
  `cursos` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_grafico`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `graficos`
--

INSERT INTO `graficos` (`id_grafico`, `reservas`, `ventas`, `reservas_pagadas`, `cursos`) VALUES
(1, 5, 15, 20, 'javasacritp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE IF NOT EXISTS `reserva` (
  `id_res` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_res` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `curso_res` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_res` date NOT NULL,
  `hora_res` time NOT NULL,
  `cupos` int(11) NOT NULL,
  `horarios` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  PRIMARY KEY (`id_res`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_res`, `usuario_res`, `curso_res`, `fecha_res`, `hora_res`, `cupos`, `horarios`, `descuento`) VALUES
(13, 'pedro123', 'nuevo curso', '2020-10-05', '01:05:21', 1, 8, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

DROP TABLE IF EXISTS `reservaciones`;
CREATE TABLE IF NOT EXISTS `reservaciones` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_res` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `curso_reservado` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_res` date NOT NULL,
  `hora_res` time NOT NULL,
  PRIMARY KEY (`id_reserva`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`id_reserva`, `usuario_res`, `curso_reservado`, `fecha_res`, `hora_res`) VALUES
(13, 'drakm', 'cumputacion', '2020-09-05', '03:48:31'),
(14, 'drakm', 'Salchichas ', '2020-09-05', '03:48:40'),
(15, 'drakm', 'CSS', '2020-09-05', '03:50:12'),
(16, 'drakm', 'cumputacion desde 0', '2020-09-05', '03:50:54'),
(17, 'drakm', 'HTML', '2020-09-08', '23:59:16'),
(18, 'drakm', 'salteÃ±as', '2020-09-09', '02:08:10'),
(19, 'drakm', 'Curso de C', '2020-09-09', '10:22:26'),
(20, 'pedro123', 'CSS', '2020-10-04', '16:34:22'),
(21, 'pedro123', '', '2020-10-04', '21:15:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(1) NOT NULL,
  `cedula` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `numero_cell` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_pago` int(11) NOT NULL,
  `Fech_Nac` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `usuario`, `contrasena`, `email`, `tipo`, `cedula`, `pais`, `numero_cell`, `genero`, `tipo_pago`, `Fech_Nac`) VALUES
(14, 'drak', 'ro', 'rodra', '$2y$04$ASJcj2DQ5Pz/RZApPQZQ1O77N4lp0cOIZbkRjB6Jz44oNKpBOOZge', 'rodra@gmail.com', 1, '0', '0', '0', '0', 0, 0),
(15, 'marcelo jose', 'arias', 'marcelo_arias', '$2y$04$Bu7V3l8zJIbAA1WlGXFH6OgyYLe6mHYZokTWG6WvaKDjnkMVF.cqa', 'marcelo@arias.com', 2, '0', '0', '0', '0', 0, 0),
(16, 'drakmer', 'rodriguez', 'drakm', '$2y$04$ra10/aVt0fh0ZAgGIHyFlOxdJgyKrMIxryS.4J50ircNyT/5GtFPC', 'drak@ro.com', 2, '0', '0', '0', '0', 0, 0),
(18, 'jose', 'io', 'jose12', '$2y$04$HMYvYhKKeJdIEoMxDflESegxbzpueLkeYC.QDriiDWIJzb5CLD6yu', 'jose@perez.com', 2, '15789495', 'bolivia', '1234568', '', 0, 0),
(19, 'paola', 'rios', 'paloa12', '$2y$04$8SI5a0y82pMyDgYSlGLx9OEOT.S9qeDnz23e1jqpbEjIamP1zcyia', 'pa@rios.com', 2, '1548226', 'bolivia', '7856126', '', 0, 0),
(20, 'flor', 'liz', 'flor123', '$2y$04$WWzdAyKGgIW7QnekctmE4udAoTNpSN4ged1pERXiHOIunP6loPgBW', 'flor@gmail.com', 2, '12585212', 'bolivia', '78512663', '', 0, 0),
(22, 'lis', 'isa', 'usa', '$2y$04$9vyjGgt3NkpzUGUB8Fbrbuotz5PwrXqDD/yfUfVtPu6NIUscsXk6y', 'lis@isa.com', 2, '12345679', 'bolivia', '1234567890', '', 0, 0),
(29, 'pedro', 'martinez', 'pedro123', '$2y$04$izm4qgasASJfGK26aZtka.ykctfsDvNujI6jDjbcBLFQMzy3.3wMu', 'pe@ma.com', 2, '1568653', 'bolivia', '2348948', '', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
