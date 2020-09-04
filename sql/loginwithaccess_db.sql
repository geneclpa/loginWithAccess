-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2020 a las 18:50:57
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginwithaccess_db`
--
CREATE DATABASE IF NOT EXISTS `loginwithaccess_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `loginwithaccess_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_db`
--

CREATE TABLE `user_db` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email_user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `user_user` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `pass_user` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_db`
--

INSERT INTO `user_db` (`id_user`, `name_user`, `email_user`, `user_user`, `pass_user`) VALUES
(1, 'pedro garcía', 'pedro@gmail.com', 'pedrogarcia', 'valencia'),
(2, 'carolina gonzalez', 'carolina@gmail.com', 'carogonza', 'venezuela');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user_db`
--
ALTER TABLE `user_db`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
