-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 10:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_juegos`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_juegos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `comentario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `id_juegos`, `id_usuario`, `puntaje`, `comentario`) VALUES
(4, 13, 1, 2, 'muy recomendable'),
(5, 15, 1, 5, 'interesante juego'),
(6, 16, 1, 4, 'no da miedo'),
(7, 18, 1, 3, 'no anda el online');

-- --------------------------------------------------------

--
-- Table structure for table `generos`
--

CREATE TABLE `generos` (
  `id_generos` int(11) NOT NULL,
  `nombres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generos`
--

INSERT INTO `generos` (`id_generos`, `nombres`) VALUES
(8, 'terror'),
(9, 'accion'),
(10, 'aventura'),
(11, 'rol'),
(12, 'rol');

-- --------------------------------------------------------

--
-- Table structure for table `juegos`
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
-- Dumping data for table `juegos`
--

INSERT INTO `juegos` (`id_juegos`, `titulo`, `sinopsis`, `id_requisito`, `precio`, `id_generos`) VALUES
(13, 'Empire of Sin', 'Empire of Sin es un nuevo juego de estrategia de Romero Games y Paradox Interactive que te adentra en el corazón del delictivo y despiadado submundo del Chicago de la ley seca de los años 20.', 2, 222, 9),
(15, 'Sam & Max Save the World', 'The Freelance Police está de vuelta en una versión remasterizada de su primera temporada de juegos de aventuras episódicas, actualizada con amor por un pequeño grupo de desarrolladores originales con la bendición del creador de Sam & Max, Steve Purcell.', 2, 309, 10),
(16, 'Amnesia: Rebirth', 'Amnesia: Rebirth, un nuevo descenso a la oscuridad de los creadores de la emblemática serie Amnesia. Un viaje angustioso por la desolación y la desesperación en el que explorarás los límites de la resiliencia humana.', 2, 530, 8),
(18, 'Noita', 'Noita es un juego roguelite de acción y magia en un mundo en el que cada píxel está simulado físicamente. Lucha, explora, derrite, quema, congela y evapora para abrirte camino por un mundo destruible por completo con hechizos creados por ti. ¡O trastea y averigua en qué líos puedes meterte!', 2, 340, 11);

-- --------------------------------------------------------

--
-- Table structure for table `requisitos`
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
-- Dumping data for table `requisitos`
--

INSERT INTO `requisitos` (`id_requisito`, `sistema`, `ram`, `procesador`, `grafica`, `id_juegos`) VALUES
(1, 'Requiere un procesador y un sistema operativo de 64 bits', '4 GB de RAM', 'Intel i3+/AMD @ 2.4+ GHz', 'GeForce 400x, Intel HD 4x, AMD Radeon 7xxx +', 16),
(2, 'Windows 10 o Superior (32-Bit o 64-Bit)', '4 GB de RAM', ' Intel Core i3-530 2.9 GHz', 'GTX 650 / GTX 550Ti, Radeon HD 7770, 6770', 13),
(3, 'Windows 7 SP1', '4 GB de RAM', 'Dual Core 2.4 GHz', '1GB VRAM / DirectX 10+ support', 18),
(4, '1GB VRAM / DirectX 10+ support', '2 GB de RAM', ' Dual Core a 1.7 GHz o superior', ' Gráfica con 512 MB de VRAM y compatible con DirectX 9.0c (Shader Model 2)', 15);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `respuesta` varchar(200) NOT NULL,
  `admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `clave`, `respuesta`, `admin`) VALUES
(1, '1234', '123', '', 0),
(7, 'asd', '$2y$10$Nj0PaSNUoVBW4DB8m8DmZewVKM96VQn0YQfIVtLtEj6UkqqGCteM2', '', 0),
(8, 'alon', '123', '', 1),
(9, 'alonx', '$2y$10$UZkfgbgtz51KhHzVDlO1hu7qEUz1gDWT7zNXroVRgPdMzIoaYWzKu', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_juegos` (`id_juegos`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_generos`);

--
-- Indexes for table `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juegos`),
  ADD KEY `id_generos` (`id_generos`),
  ADD KEY `id_requisito` (`id_requisito`);

--
-- Indexes for table `requisitos`
--
ALTER TABLE `requisitos`
  ADD PRIMARY KEY (`id_requisito`),
  ADD KEY `id_juegos` (`id_juegos`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `id_generos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juegos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `requisitos`
--
ALTER TABLE `requisitos`
  MODIFY `id_requisito` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_juegos`) REFERENCES `juegos` (`id_juegos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`id_generos`) REFERENCES `generos` (`id_generos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requisitos`
--
ALTER TABLE `requisitos`
  ADD CONSTRAINT `requisitos_ibfk_1` FOREIGN KEY (`id_juegos`) REFERENCES `juegos` (`id_juegos`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
