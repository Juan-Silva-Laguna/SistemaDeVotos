-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2020 a las 18:53:39
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `votacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `idCandidato` int(11) NOT NULL,
  `nombreCandidato` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ficha` int(11) NOT NULL,
  `programa` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`idCandidato`, `nombreCandidato`, `ficha`, `programa`) VALUES
(4, 'Ferney Rivas', 1937743, 'ADSI'),
(5, 'Juan Silva', 1937745, 'Sistemas'),
(6, 'Sergio Zambrano', 19356723, 'Ingenieria'),
(8, 'Voto en blanco', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votos`
--

CREATE TABLE `votos` (
  `idVoto` int(11) NOT NULL,
  `mesa` int(11) NOT NULL,
  `idCandidato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `votos`
--

INSERT INTO `votos` (`idVoto`, `mesa`, `idCandidato`) VALUES
(1, 9, 5),
(2, 2, 6),
(3, 6, 6),
(4, 2, 5),
(5, 2, 6),
(6, 10, 5),
(7, 1, 8),
(8, 1, 6),
(9, 1, 5),
(10, 1, 6),
(11, 1, 4),
(12, 2, 4),
(13, 2, 6),
(14, 2, 5),
(15, 4, 6),
(16, 4, 5),
(17, 4, 6),
(18, 4, 8),
(19, 4, 5),
(20, 4, 6),
(21, 4, 8),
(22, 7, 4),
(23, 8, 4),
(24, 9, 4),
(25, 5, 4),
(26, 4, 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`idCandidato`);

--
-- Indices de la tabla `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`idVoto`),
  ADD KEY `idCandidato` (`idCandidato`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `idCandidato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `votos`
--
ALTER TABLE `votos`
  MODIFY `idVoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `votos`
--
ALTER TABLE `votos`
  ADD CONSTRAINT `votos_ibfk_1` FOREIGN KEY (`idCandidato`) REFERENCES `candidatos` (`idCandidato`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
