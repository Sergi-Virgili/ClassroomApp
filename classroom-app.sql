-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2019 a las 13:19:21
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
-- Estructura de tabla para la tabla `tbl_role`
--

CREATE TABLE `tbl_role` (
  `rol_id` int(5) NOT NULL,
  `rol_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_role`
--

INSERT INTO `tbl_role` (`rol_id`, `rol_name`) VALUES
(1, 'Coder'),
(2, 'Formador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_turnos`
--

CREATE TABLE `tbl_turnos` (
  `trn_id` int(5) NOT NULL,
  `trn_usr_id` int(5) NOT NULL,
  `trn_texto` text DEFAULT NULL,
  `trn_date` datetime NOT NULL,
  `trn_status_id` int(5) NOT NULL,
  `trn_formador_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_turnos`
--

INSERT INTO `tbl_turnos` (`trn_id`, `trn_usr_id`, `trn_texto`, `trn_date`, `trn_status_id`, `trn_formador_id`) VALUES
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
-- Estructura de tabla para la tabla `tbl_turno_status`
--

CREATE TABLE `tbl_turno_status` (
  `stat_turn_id` int(5) NOT NULL,
  `stat_turn_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_turno_status`
--

INSERT INTO `tbl_turno_status` (`stat_turn_id`, `stat_turn_name`) VALUES
(1, 'Sin resolver'),
(2, 'Resuelta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `usr_id` int(5) NOT NULL,
  `usr_name` varchar(20) NOT NULL,
  `usr_punts` int(5) DEFAULT NULL,
  `usr_rol` int(5) NOT NULL,
  `usr_email` varchar(30) NOT NULL,
  `usr_pass` varchar(20) NOT NULL,
  `usr_status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`usr_id`, `usr_name`, `usr_punts`, `usr_rol`, `usr_email`, `usr_pass`, `usr_status`) VALUES
(1, 'yeison', NULL, 1, 'yeison@gmail.com', '123456', NULL),
(2, 'Edgar', NULL, 2, 'edgar@gmail.com', '987654', NULL),
(3, 'Delfina', NULL, 1, 'marconi.delf@gmail.com ', 'delfina', NULL),
(4, 'Noelia', NULL, 1, 'noemorlio@gmail.com', 'noelia', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `tbl_turnos`
--
ALTER TABLE `tbl_turnos`
  ADD PRIMARY KEY (`trn_id`);

--
-- Indices de la tabla `tbl_turno_status`
--
ALTER TABLE `tbl_turno_status`
  ADD PRIMARY KEY (`stat_turn_id`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `rol_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_turnos`
--
ALTER TABLE `tbl_turnos`
  MODIFY `trn_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tbl_turno_status`
--
ALTER TABLE `tbl_turno_status`
  MODIFY `stat_turn_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `usr_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
