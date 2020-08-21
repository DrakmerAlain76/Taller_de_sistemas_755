-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-08-2020 a las 01:53:49
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`id_a`, `nuser`, `fecha_a`, `hora_a`, `tipo`) VALUES
(1, 'jose', '2020-08-19', '21:05:57', 2),
(2, '', '2020-08-19', '21:07:59', 2),
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
(13, 'drak@ro.com', '2020-08-20', '21:52:31', 2);

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
(1, 'HTML', 'fernando hernandez', 'Este es curso de introduccion de de HTML y las teclonogias de la web asi mismo se vera mas de la actulidad y la tendencias de estas nuevas tecnologias', 100, 150, '2020-08-24', 0),
(2, 'CSS', 'victor robles', 'Este es curso de introduccion de de CSS y las teclonogias de la web asi mismo se vera mas de la actulidad y la tendencias de estas nuevas tecnologias', 100, 150, '2020-08-25', 0),
(3, 'JAVASCRIPT', 'FAZT', 'Este es curso de introduccion de de JAVASCRIPT y las teclonogias de la web asi mismo se vera mas de la actulidad y la tendencias de estas nuevas tecnologias', 150, 150, '2020-08-26', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `usuario`, `contrasena`, `email`, `tipo`, `cedula`, `pais`, `numero_cell`, `genero`, `tipo_pago`, `Fech_Nac`) VALUES
(1, 'jose', 'perez', '', '1234', 'jose@perez', 2, '0', '0', '0', '0', 0, 0),
(2, 'jose', 'perez', '', '$2y$04$3Ch1QZkQDvzEbL.5o2FuDOekiBaVq8N.GCwwLYHl4bxp7L/v6RsDy', 'pedro@flores.com', 2, '0', '0', '0', '0', 0, 0),
(3, 'pepe', 'gonzalez', '', '$2y$04$EcoD6.8lyYuBbLSH8r.2WeXcMUA6ENAibmfmgsP4Wkng6nvDmgE8K', 'pepe@gmail.com', 2, '0', '0', '0', '0', 0, 0),
(4, 'jose', 'sef', '', '$2y$04$3Q6mnP2ILPTb0FlH3.2.YeS2692z3aNXV7GVEcLRzxgqCdIuc4RRe', 'pedro@flores.com', 2, '0', '0', '0', '0', 0, 0),
(5, 'pedro', 'perez', '', '$2y$04$BN1mlGxKwwgAGKAdJH.HIOYun2iXMRcyB0/ZSZw2S6Daq43zSs4Ie', 'esf@g.com', 2, '0', '0', '0', '0', 0, 0),
(6, 'jose', 'perez', '', '$2y$04$.bwOpuOkOFudAQStY8g3leKPwjDkkQotRQPV7K/K7Ds6cePkMD9Zm', 'jose@perez.com', 2, '0', '0', '0', '0', 0, 0),
(7, 'jose', 'perez', '', '$2y$04$4llD5iQnEkGxriTjVZjF5eHNFL6pVkutkkK6hnAFCU81cVgHK8yzi', 'jose@perez.com', 2, '0', '0', '0', '0', 0, 0),
(8, 'pedro', 'flores', '', '$2y$04$LNAJ4O1rgMU17dmuWDWugunf5vU8rbAlKAvzjJ95YeA4PsPSPIE7e', 'pedro@flores.con', 2, '0', '0', '0', '0', 0, 0),
(9, 'jose', 'gonzalez', '', '$2y$04$u3cuKbuvFXNy514BvNNS/O7.REb/gwkj8hNY8xMV3mCOoe1pv6T5S', 'pedro@flores.com', 2, '0', '0', '0', '0', 0, 0),
(10, 'tito', 'juares', '', '$2y$04$WM9pA5uL0kpaGlwBlwpYNewPJgV/n3w73/lzZTi4iFBot/jjinnuu', 'ro@ro.com', 2, '0', '0', '0', '0', 0, 0),
(11, 'dd', 'gonzalez', '', '$2y$04$m5k89RakqCn.RzUkV0vIEeWCki9SJkGnY41OpjlXrRfkrBz8on1CK', 'pedro@flores.com', 2, '0', '0', '0', '0', 0, 0),
(12, 'nuevo', 'es nuevo', '', '$2y$04$o.2CfS4.X/MdCS5S1gnuCexq5AAuxtZfwG32WXXFlaw8OcRDvADlC', 'pepe@gmail.com', 2, '0', '0', '0', '0', 0, 0),
(13, 'yo', 'nuevo', '', '$2y$04$1EBbqsGLvZLZbCFAv17XzO4W0iYCXWN9XNNpOt1y0/v3v.7xHXI0W', 'prueba1@po.com', 2, '0', '0', '0', '0', 0, 0),
(14, 'drak', 'ro', '', '$2y$04$ASJcj2DQ5Pz/RZApPQZQ1O77N4lp0cOIZbkRjB6Jz44oNKpBOOZge', 'rodra@gmail.com', 1, '0', '0', '0', '0', 0, 0),
(15, 'marcelo jose', 'arias', '', '$2y$04$Bu7V3l8zJIbAA1WlGXFH6OgyYLe6mHYZokTWG6WvaKDjnkMVF.cqa', 'marcelo@arias.com', 2, '0', '0', '0', '0', 0, 0),
(16, 'drakmer', 'rodriguez', '', '$2y$04$ra10/aVt0fh0ZAgGIHyFlOxdJgyKrMIxryS.4J50ircNyT/5GtFPC', 'drak@ro.com', 2, '0', '0', '0', '0', 0, 0),
(17, 'ana', 'pinto', '', '$2y$04$nrNUhSGhNGdDXrDtTb/V3u9ypPRDl4K0032RnVQtyiAZ.n2zvkeZa', 'ana@gmail.com', 2, '0', '0', '0', '0', 0, 0),
(18, 'jose', 'io', 'jose12', '$2y$04$HMYvYhKKeJdIEoMxDflESegxbzpueLkeYC.QDriiDWIJzb5CLD6yu', 'jose@perez.com', 2, '15789495', 'bolivia', '1234568', '', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
