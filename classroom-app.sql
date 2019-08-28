-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2019 a las 13:48:57
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `classroom-app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `topic` text DEFAULT NULL,
  `date` datetime NOT NULL,
  `resolved` int(5) NOT NULL,
  `teacher_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `topic`, `date`, `resolved`, `teacher_id`) VALUES
(2, 3, 'Como puedo llamar una variable desde un archivo externo', '2019-08-03 06:08:05', 2, 1),
(3, 4, 'Como puedo crear variables en css', '2019-08-01 04:27:36', 2, NULL),
(13, 3, 'no sabia', '2019-08-01 14:27:25', 2, 1),
(14, 1, 'test', '2019-08-01 18:07:07', 2, 1),
(15, 4, 'Necesito ayuda en la BD', '2019-08-01 18:07:39', 2, 1),
(16, 1, 'Ayuda con TDD', '2019-08-01 18:46:29', 2, 1),
(19, 1, '', '2019-08-02 12:11:39', 1, 1),
(20, 1, 'cabronnn', '2019-08-27 11:03:32', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

CREATE TABLE `role` (
  `rol_id` int(5) NOT NULL,
  `rol_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `role`
--

INSERT INTO `role` (`rol_id`, `rol_name`) VALUES
(1, 'Coder'),
(2, 'Formador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `role` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`) VALUES
(1, 'yeison', 1, 'yeison@gmail.com', '123456'),
(2, 'Edgar', 2, 'edgar@gmail.com', '987654'),
(3, 'Delfina', 1, 'marconi.delf@gmail.com ', 'delfina'),
(4, 'Noelia', 1, 'noemorlio@gmail.com', 'noelia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `role`
--
ALTER TABLE `role`
  MODIFY `rol_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
