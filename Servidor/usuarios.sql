-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2022 a las 07:27:50
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hiragana`
--

CREATE TABLE `hiragana` (
  `id` int(255) NOT NULL,
  `simbolo` varchar(20) NOT NULL,
  `fonema` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hiragana`
--

INSERT INTO `hiragana` (`id`, `simbolo`, `fonema`) VALUES
(1, 'あ', 'a'),
(2, 'い', 'i'),
(3, 'う', 'u'),
(4, 'え', 'e'),
(5, 'お', 'o'),
(6, 'か', 'ka'),
(7, 'き', 'ki'),
(8, 'く', 'ku'),
(9, 'け', 'ke'),
(10, 'こ', 'ko'),
(11, 'さ', 'sa'),
(12, 'し', 'shi'),
(13, 'す', 'su'),
(14, 'せ', 'se'),
(15, 'そ', 'so'),
(16, 'た', 'ta'),
(17, 'ち', 'chi'),
(18, 'つ', 'tsu'),
(19, 'て', 'te'),
(20, 'と', 'to'),
(21, 'な', 'na'),
(22, 'に', 'ni'),
(23, 'ぬ', 'nu'),
(24, 'ね', 'ne'),
(25, 'の', 'no'),
(26, 'は', 'ha'),
(27, 'ひ', 'hi'),
(28, 'ふ', 'fu'),
(29, 'へ', 'he'),
(30, 'ほ', 'ho'),
(31, 'ま', 'ma'),
(32, 'み', 'mi'),
(33, 'む', 'mu'),
(34, 'め', 'me'),
(35, 'も', 'mo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida`
--

CREATE TABLE `partida` (
  `nombre` varchar(20) NOT NULL,
  `partidas_ganadas` int(100) NOT NULL,
  `aciertos` int(100) NOT NULL,
  `fallos` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `partida`
--

INSERT INTO `partida` (`nombre`, `partidas_ganadas`, `aciertos`, `fallos`) VALUES
('Alvaro ', 0, 7, 0),
('Alvaroo', 0, 0, 0),
('Han', 18, 28, 2),
('Nico', 1, 19, 2),
('Pedro', 0, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(34, 'Alvaro ', 'alvaromedinavena11@gmail.com', '1234'),
(36, 'Pedro', 'pedropedro01@gmail.com', '1234'),
(37, 'Nico', 'nico@gmail.com', '1234'),
(38, 'Han', 'han@gmail.com', '1234'),
(39, 'Alvaroo', 'isgrin2@gmil.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hiragana`
--
ALTER TABLE `hiragana`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hiragana`
--
ALTER TABLE `hiragana`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `partida`
--
ALTER TABLE `partida`
  ADD CONSTRAINT `FK_name` FOREIGN KEY (`nombre`) REFERENCES `users` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
