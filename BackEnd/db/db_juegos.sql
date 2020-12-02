-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2020 a las 01:35:42
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

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
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(50) NOT NULL,
  `id_juegos` int(11) NOT NULL,
  `id_usuario` int(50) NOT NULL,
  `puntaje` int(10) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_juegos`, `id_usuario`, `puntaje`, `comentario`) VALUES
(1, 4, 1, 4, 'lorem ipsum'),
(2, 4, 1, 5, 'asdasdasdasd');

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
(11, 'Suspenso'),
(13, 'Accion'),
(15, 'aaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juegos` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `sinopsis` text NOT NULL,
  `id_requisito` int(50) NOT NULL,
  `precio` int(50) NOT NULL,
  `id_generos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juegos`, `titulo`, `sinopsis`, `id_requisito`, `precio`, `id_generos`) VALUES
(4, 'The witcher', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 2, 123, 13),
(5, 'asd', 'asd', 2, 2222, 11),
(6, 'The witcher', 'ssssssss', 2, 222, 15),
(7, 'The witcher', 'ssssssss', 2, 222, 15),
(8, 'The witcher', 'ssssssss', 2, 222, 15),
(9, 'asd', 's', 2, 2, 11),
(10, 'asd', 's', 2, 2, 11),
(11, 'a', 'a', 2, 2, 15),
(12, 's', 's', 2, 2, 15);

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
(2, 'Win10', '4gm', 'intel core i3', '---', 4);

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
(1, 'asds', '$2y$10$Nj0PaSNUoVBW4DB8m8DmZewVKM96VQn0YQfIVtLtEj6UkqqGCteM2', 0),
(7, 'asd', '$2y$10$Nj0PaSNUoVBW4DB8m8DmZewVKM96VQn0YQfIVtLtEj6UkqqGCteM2', 0),
(10, 'usuariosimple', '$2y$10$GWuV.N.YbSHbq0UpQOo0yOlM9p7FczMxrKUkSge/is7QZrO4wKffC', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

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
  ADD KEY `id_generos` (`id_generos`),
  ADD KEY `id_requisito` (`id_requisito`);

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
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_generos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juegos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `requisitos`
--
ALTER TABLE `requisitos`
  MODIFY `id_requisito` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
