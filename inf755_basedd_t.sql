-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-08-2020 a las 07:54:35
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
(27, 'drakm', '2020-08-27', '03:43:10', 2);

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
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nombre_curso`, `expositor`, `comentario`, `costo`, `cupos`, `fecha_curso`, `reservas`) VALUES
(1, 'HTML', 'fernando hernandez', 'Este es curso de introduccion de de HTML y las teclonogias de la web asi mismo se vera mas de la actulidad y la tendencias de estas nuevas tecnologias', 100, 150, '2020-08-24', 7),
(2, 'CSS', 'victor robles', 'Este es curso de introduccion de de CSS y las teclonogias de la web asi mismo se vera mas de la actulidad y la tendencias de estas nuevas tecnologias', 100, 150, '2020-08-25', 7),
(3, 'JAVASCRIPT', 'FAZT', 'Este es curso de introduccion de de JAVASCRIPT y las teclonogias de la web asi mismo se vera mas de la actulidad y la tendencias de estas nuevas tecnologias', 100, 150, '2020-08-26', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

DROP TABLE IF EXISTS `reservaciones`;
CREATE TABLE IF NOT EXISTS `reservaciones` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_res` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_res` date NOT NULL,
  `hora_res` time NOT NULL,
  PRIMARY KEY (`id_reserva`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`id_reserva`, `usuario_res`, `fecha_res`, `hora_res`) VALUES
(1, 'marcelo_arias', '2020-08-26', '23:05:39'),
(10, 'drakm', '2020-08-27', '00:14:47'),
(11, 'paloa12', '2020-08-27', '03:36:45');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `usuario`, `contrasena`, `email`, `tipo`, `cedula`, `pais`, `numero_cell`, `genero`, `tipo_pago`, `Fech_Nac`) VALUES
(14, 'drak', 'ro', 'rodra', '$2y$04$ASJcj2DQ5Pz/RZApPQZQ1O77N4lp0cOIZbkRjB6Jz44oNKpBOOZge', 'rodra@gmail.com', 1, '0', '0', '0', '0', 0, 0),
(15, 'marcelo jose', 'arias', 'marcelo_arias', '$2y$04$Bu7V3l8zJIbAA1WlGXFH6OgyYLe6mHYZokTWG6WvaKDjnkMVF.cqa', 'marcelo@arias.com', 2, '0', '0', '0', '0', 0, 0),
(16, 'drakmer', 'rodriguez', 'drakm', '$2y$04$ra10/aVt0fh0ZAgGIHyFlOxdJgyKrMIxryS.4J50ircNyT/5GtFPC', 'drak@ro.com', 2, '0', '0', '0', '0', 0, 0),
(18, 'jose', 'io', 'jose12', '$2y$04$HMYvYhKKeJdIEoMxDflESegxbzpueLkeYC.QDriiDWIJzb5CLD6yu', 'jose@perez.com', 2, '15789495', 'bolivia', '1234568', '', 0, 0),
(19, 'paola', 'rios', 'paloa12', '$2y$04$8SI5a0y82pMyDgYSlGLx9OEOT.S9qeDnz23e1jqpbEjIamP1zcyia', 'pa@rios.com', 2, '1548226', 'bolivia', '7856126', '', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
