-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2017 a las 22:39:35
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `championshipgo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `championships`
--

CREATE TABLE `championships` (
  `id_championship` int(11) NOT NULL,
  `name_championship` varchar(50) NOT NULL,
  `number_team` int(11) NOT NULL,
  `since_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_region` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `information_championships`
--

CREATE TABLE `information_championships` (
  `id_informationchampionship` int(11) NOT NULL,
  `id_championship` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `states` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `position` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id_permision` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `read` int(11) NOT NULL,
  `write` int(11) NOT NULL,
  `change` int(11) NOT NULL,
  `eliminate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persons`
--

CREATE TABLE `persons` (
  `id_person` int(11) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `id_typedocument` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `id_role` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persons`
--

INSERT INTO `persons` (`id_person`, `nit`, `id_typedocument`, `name`, `lastname`, `photo`, `id_role`, `password`, `email`, `state`) VALUES
(1, '1026157932', 2, 'Jhon', 'Vente', 'jhon.jpg', 1, '123', 'jvente18@gmail.com', 1),
(2, '458484', 1, 'Mateo', 'Guzman', 'teo.jpg', 1, '123', 'mateus19@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_role`, `description`, `state`) VALUES
(1, 'person', 1),
(2, 'technical', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `id_team` int(11) NOT NULL,
  `name_team` varchar(50) NOT NULL,
  `id_region` int(11) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typedocuments`
--

CREATE TABLE `typedocuments` (
  `id_typedocument` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `typedocuments`
--

INSERT INTO `typedocuments` (`id_typedocument`, `description`, `state`) VALUES
(1, 'Tarjeta de identidad', 1),
(2, 'Cedula de ciudadania', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `championships`
--
ALTER TABLE `championships`
  ADD PRIMARY KEY (`id_championship`);

--
-- Indices de la tabla `information_championships`
--
ALTER TABLE `information_championships`
  ADD PRIMARY KEY (`id_informationchampionship`),
  ADD KEY `information_championships_fk0` (`id_championship`),
  ADD KEY `information_championships_fk1` (`id_team`),
  ADD KEY `information_championships_fk2` (`id_person`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id_permision`),
  ADD KEY `permissions_fk0` (`id_menu`),
  ADD KEY `permissions_fk1` (`id_role`);

--
-- Indices de la tabla `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id_person`),
  ADD KEY `persons_fk0` (`id_typedocument`),
  ADD KEY `persons_fk1` (`id_role`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id_team`);

--
-- Indices de la tabla `typedocuments`
--
ALTER TABLE `typedocuments`
  ADD PRIMARY KEY (`id_typedocument`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `championships`
--
ALTER TABLE `championships`
  MODIFY `id_championship` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `information_championships`
--
ALTER TABLE `information_championships`
  MODIFY `id_informationchampionship` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id_permision` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `persons`
--
ALTER TABLE `persons`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `typedocuments`
--
ALTER TABLE `typedocuments`
  MODIFY `id_typedocument` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `information_championships`
--
ALTER TABLE `information_championships`
  ADD CONSTRAINT `information_championships_fk0` FOREIGN KEY (`id_championship`) REFERENCES `championships` (`id_championship`),
  ADD CONSTRAINT `information_championships_fk1` FOREIGN KEY (`id_team`) REFERENCES `teams` (`id_team`),
  ADD CONSTRAINT `information_championships_fk2` FOREIGN KEY (`id_person`) REFERENCES `persons` (`id_person`);

--
-- Filtros para la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_fk0` FOREIGN KEY (`id_menu`) REFERENCES `menus` (`id_menu`),
  ADD CONSTRAINT `permissions_fk1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);

--
-- Filtros para la tabla `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `persons_fk0` FOREIGN KEY (`id_typedocument`) REFERENCES `typedocuments` (`id_typedocument`),
  ADD CONSTRAINT `persons_fk1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
