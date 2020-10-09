-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2020 a las 13:51:45
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_generos` int(11) NOT NULL,
  `nombres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_generos`, `nombres`) VALUES
(1, 'accion'),
(2, 'Shooter'),
(3, 'terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juegos` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `sinopsis` text NOT NULL,
  `requisitos` text NOT NULL,
  `precio` int(50) NOT NULL,
  `id_generos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juegos`, `titulo`, `sinopsis`, `requisitos`, `precio`, `id_generos`) VALUES
(1, 'Hitman Absolution', 'HITMAN: ABSOLUTION sigue los pasos del asesino original mientras trabaja en su contrato más personal hasta la fecha. Traicionado por la Agencia y buscado por la policía, el Agente 47 se ve abocado a la búsqueda de la redención en un mundo corrupto y retorcido.', '1', 1212, 1),
(2, 'CS GO', 'Counter Strike es historia viva del videojuego moderno. Más allá de ser una de las licencias clave de Valve, se ha consolidado como uno de los pilares sobre los que se sostienen las bases de los shooters actuales, así como uno de los máximos embajadores del juego online y los eSports a nivel mundial.  Eso ya son palabras mayores.', '2', 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos`
--

CREATE TABLE `requisitos` (
  `id_requisito` int(50) NOT NULL,
  `sistema` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `procesador` varchar(200) NOT NULL,
  `grafica` varchar(200) NOT NULL,
  `id_juegos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `requisitos`
--

INSERT INTO `requisitos` (`id_requisito`, `sistema`, `ram`, `procesador`, `grafica`, `id_juegos`) VALUES
(1, 'Windows 7 (o mayor )', '2 GB RAM', 'True dual core CPU (Intel, AMD)', 'NV8600 512 Mb RAM, ó AMD equivalente', 1),
(2, 'Windows XP (o mayor)', '1 GB de RAM para XP / 2 GB de RAM para Vista.', 'Intel Core 2 Duo E6600 / AMD Phenom X3 8750.', '256 MB de VRAM o superior, compatible con DirectX 9 y con soporte para Pixel Shader 3.0.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `clave`, `admin`) VALUES
(1, 'asd', 'asd', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_generos`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juegos`),
  ADD KEY `id_generos` (`id_generos`);

--
-- Indices de la tabla `requisitos`
--
ALTER TABLE `requisitos`
  ADD PRIMARY KEY (`id_requisito`),
  ADD KEY `id_juegos` (`id_juegos`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_generos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juegos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `requisitos`
--
ALTER TABLE `requisitos`
  MODIFY `id_requisito` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`id_generos`) REFERENCES `generos` (`id_generos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `requisitos`
--
ALTER TABLE `requisitos`
  ADD CONSTRAINT `requisitos_ibfk_1` FOREIGN KEY (`id_juegos`) REFERENCES `juegos` (`id_juegos`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
