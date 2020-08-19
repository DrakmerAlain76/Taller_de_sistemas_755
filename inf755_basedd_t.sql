-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-08-2020 a las 13:30:13
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
-- Estructura de tabla para la tabla `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_curso` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `expositor` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `costo` int(11) NOT NULL,
  `cupos` int(11) NOT NULL,
  `fecha_curso` date NOT NULL,
  `reservas` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `numero_cell` int(11) NOT NULL,
  `cargo` int(11) NOT NULL,
  `genero` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `plan` int(11) NOT NULL,
  `tipo_pago` int(11) NOT NULL,
  `Fech_Nac` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `usuario`, `contrasena`, `email`, `tipo`, `numero_cell`, `cargo`, `genero`, `plan`, `tipo_pago`, `Fech_Nac`) VALUES
(1, 'jose', 'perez', '', '1234', 'jose@perez', 2, 0, 0, '0', 0, 0, 0),
(2, 'jose', 'perez', '', '$2y$04$3Ch1QZkQDvzEbL.5o2FuDOekiBaVq8N.GCwwLYHl4bxp7L/v6RsDy', 'pedro@flores.com', 2, 0, 0, '0', 0, 0, 0),
(3, 'pepe', 'gonzalez', '', '$2y$04$EcoD6.8lyYuBbLSH8r.2WeXcMUA6ENAibmfmgsP4Wkng6nvDmgE8K', 'pepe@gmail.com', 2, 0, 0, '0', 0, 0, 0),
(4, 'jose', 'sef', '', '$2y$04$3Q6mnP2ILPTb0FlH3.2.YeS2692z3aNXV7GVEcLRzxgqCdIuc4RRe', 'pedro@flores.com', 2, 0, 0, '0', 0, 0, 0),
(5, 'pedro', 'perez', '', '$2y$04$BN1mlGxKwwgAGKAdJH.HIOYun2iXMRcyB0/ZSZw2S6Daq43zSs4Ie', 'esf@g.com', 2, 0, 0, '0', 0, 0, 0),
(6, 'jose', 'perez', '', '$2y$04$.bwOpuOkOFudAQStY8g3leKPwjDkkQotRQPV7K/K7Ds6cePkMD9Zm', 'jose@perez.com', 2, 0, 0, '0', 0, 0, 0),
(7, 'jose', 'perez', '', '$2y$04$4llD5iQnEkGxriTjVZjF5eHNFL6pVkutkkK6hnAFCU81cVgHK8yzi', 'jose@perez.com', 2, 0, 0, '0', 0, 0, 0),
(8, 'pedro', 'flores', '', '$2y$04$LNAJ4O1rgMU17dmuWDWugunf5vU8rbAlKAvzjJ95YeA4PsPSPIE7e', 'pedro@flores.con', 2, 0, 0, '0', 0, 0, 0),
(9, 'jose', 'gonzalez', '', '$2y$04$u3cuKbuvFXNy514BvNNS/O7.REb/gwkj8hNY8xMV3mCOoe1pv6T5S', 'pedro@flores.com', 2, 0, 0, '0', 0, 0, 0),
(10, 'tito', 'juares', '', '$2y$04$WM9pA5uL0kpaGlwBlwpYNewPJgV/n3w73/lzZTi4iFBot/jjinnuu', 'ro@ro.com', 2, 0, 0, '0', 0, 0, 0),
(11, 'dd', 'gonzalez', '', '$2y$04$m5k89RakqCn.RzUkV0vIEeWCki9SJkGnY41OpjlXrRfkrBz8on1CK', 'pedro@flores.com', 2, 0, 0, '0', 0, 0, 0),
(12, 'nuevo', 'es nuevo', '', '$2y$04$o.2CfS4.X/MdCS5S1gnuCexq5AAuxtZfwG32WXXFlaw8OcRDvADlC', 'pepe@gmail.com', 2, 0, 0, '0', 0, 0, 0),
(13, 'yo', 'nuevo', '', '$2y$04$1EBbqsGLvZLZbCFAv17XzO4W0iYCXWN9XNNpOt1y0/v3v.7xHXI0W', 'prueba1@po.com', 2, 0, 0, '0', 0, 0, 0),
(14, 'drak', 'ro', '', '$2y$04$ASJcj2DQ5Pz/RZApPQZQ1O77N4lp0cOIZbkRjB6Jz44oNKpBOOZge', 'rodra@gmail.com', 1, 0, 0, '0', 0, 0, 0),
(15, 'marcelo jose', 'arias', '', '$2y$04$Bu7V3l8zJIbAA1WlGXFH6OgyYLe6mHYZokTWG6WvaKDjnkMVF.cqa', 'marcelo@arias.com', 2, 0, 0, '0', 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
