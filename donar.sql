-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2023 a las 21:50:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `donar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletin`
--

CREATE TABLE `boletin` (
  `id` bigint(20) NOT NULL,
  `boletin` varchar(80) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `boletin`
--

INSERT INTO `boletin` (`id`, `boletin`, `fecha`) VALUES
(1, 'ce@gmail.com', '2023-08-29 22:25:25'),
(2, 'ce@gmail.com', '2023-08-29 22:39:46'),
(3, 'ce@gmail.com', '2023-08-29 22:41:08'),
(4, 'ce@gmail.com', '2023-08-29 22:42:04'),
(5, 'ce@gmail.com', '2023-08-29 22:45:45'),
(6, 'ce@gmail.com', '2023-08-29 23:23:40'),
(7, 'ce@gmail.com', '2023-08-29 23:24:11'),
(8, 'cegawon@hotmail.com', '2023-08-29 23:24:22'),
(9, 'cegawon@hotmail.com', '2023-08-29 23:24:44'),
(10, 'cegawon@hotmail.com', '2023-08-29 23:25:13'),
(11, 'cegawon@hotmail.com', '2023-08-31 12:07:23'),
(12, '', '2023-08-31 17:18:46'),
(13, '', '2023-08-31 17:18:48'),
(14, '', '2023-08-31 17:19:00'),
(15, '', '2023-08-31 17:20:49'),
(16, '', '2023-08-31 17:23:39'),
(17, '', '2023-08-31 17:24:44'),
(18, '', '2023-08-31 17:24:46'),
(19, 'cegawon@hotmail.com', '2023-08-31 17:25:59'),
(20, 'cegawon@hotmail.com', '2023-08-31 17:30:44'),
(21, '', '2023-08-31 17:30:45'),
(22, 'cegawon@hotmail.com', '2023-08-31 17:32:55'),
(23, 'cegawon@hotmail.com', '2023-08-31 17:33:07'),
(24, 'cegawon@hotmail.com', '2023-08-31 17:34:27'),
(25, 'cegawon@hotmail.com', '2023-08-31 17:34:42'),
(26, 'cegawon@hotmail.com', '2023-08-31 17:45:20'),
(27, 'cegawon@hotmail.com', '2023-08-31 17:45:47'),
(28, 'cegawon@hotmail.com', '2023-08-31 17:46:04'),
(29, 'cegawon@hotmail.com', '2023-08-31 17:48:46'),
(30, 'cegawon@hotmail.com', '2023-08-31 17:49:12'),
(31, 'cegawon@hotmail.com', '2023-08-31 18:03:47'),
(32, '', '2023-09-06 17:05:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correo`
--

CREATE TABLE `correo` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `asunto` varchar(80) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `correo`
--

INSERT INTO `correo` (`id`, `nombre`, `correo`, `asunto`, `mensaje`, `fecha`) VALUES
(1, 'cesar', 'cegawon@hotmail.com', 'donar', 'mi primer correo de donación', '0000-00-00 00:00:00'),
(2, 'cesar', 'cegawon@hotmail.com', 'donar', 'mi primer correo de donación', '0000-00-00 00:00:00'),
(3, 'cesar', 'cegawon@hotmail.com', 'donar', 'mi primer correo de donación', '0000-00-00 00:00:00'),
(4, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'mi primer correo de donación', '0000-00-00 00:00:00'),
(5, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'mi primer correo de donación', '2023-08-28 14:23:57'),
(6, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'mi primer correo de donación', '2023-08-28 16:11:34'),
(7, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'mi primer correo de donación', '2023-08-28 16:25:21'),
(8, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'mariarodriguezxx20@gmail.com', '2023-08-28 16:25:38'),
(9, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'mariarodriguezxx20@gmail.com', '2023-08-28 16:37:10'),
(10, 'cesar', 'cegawon@hotmail.com', 'imagen', 'dddd', '2023-08-28 16:59:30'),
(11, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'ssssss', '2023-08-28 17:09:23'),
(12, 'cesar', 'cegawon@hotmail.com', 'sss', 'ssss', '2023-08-28 17:09:54'),
(13, '1', 'cegawon@hotmail.com', '1', '111', '2023-08-29 10:07:17'),
(14, '2', 'cegawon@hotmail.com', 'correo laravel', '22', '2023-08-29 10:14:26'),
(15, '3', 'cegawon@hotmail.com', '3', '33', '2023-08-29 10:14:52'),
(16, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'ssss', '2023-08-29 18:22:56'),
(17, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'ssss', '2023-08-29 18:23:44'),
(18, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'ssss', '2023-08-29 18:26:21'),
(19, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'rere', '2023-08-29 18:27:29'),
(20, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'sdfd', '2023-08-29 18:29:56'),
(21, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'afsdf', '2023-08-29 18:30:32'),
(22, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'sdass', '2023-08-29 21:15:45'),
(23, 'cc', 'cegawon@hotmail.com', 'ccc', 'cccc', '2023-08-29 21:17:10'),
(24, 'cesar', 'cegawon@hotmail.com', 'imagen', 'ssss', '2023-08-29 21:57:31'),
(25, 'cesar', 'cegawon@hotmail.com', 'correo laravel', 'ssss', '2023-08-29 21:58:12'),
(26, '', 'cegawon@hotmail.com', 'correo laravel', 'xxxxx', '2023-08-29 21:58:57'),
(27, 'papa', 'cegawon@hotmail.com', 'eee', 'eeee', '2023-08-31 12:02:39'),
(28, 'papa', 'cegawon@hotmail.com', 'ee', 'eee', '2023-08-31 12:18:47'),
(29, 'papa', 'cegawon@hotmail.com', 'sss', 'eeee', '2023-08-31 12:20:50'),
(30, 'cesar', 'cegawon@hotmail.com', '44', '4444', '2023-08-31 18:03:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donadores`
--

CREATE TABLE `donadores` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `cantidad` bigint(20) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `donadores`
--

INSERT INTO `donadores` (`id`, `nombre`, `correo`, `cedula`, `cantidad`, `fecha`) VALUES
(4, 'carlos', 'cegawon@hotmail.com', 222, 15000, '2023-09-09 19:50:10'),
(5, 'maria', 'cegawon@hotmail.com', 33, 30000, '2023-09-09 19:53:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `departamento` varchar(80) NOT NULL,
  `municipio` varchar(80) NOT NULL,
  `donacion` float NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id`, `nombre`, `correo`, `celular`, `departamento`, `municipio`, `donacion`, `fecha`) VALUES
(1, 'cesar', 'cegawon@hotmail.com', 300564785236, '', '', 20000, '2023-08-28 17:40:32'),
(2, 'juan', 'cegawon@hotmail.com', 365645756756, '', '', 40000, '2023-08-28 17:46:58'),
(3, 'juan', 'cegawon@hotmail.com', 534534, '', '', 30000, '2023-08-28 17:48:15'),
(4, 'cesar', 'cegawon@hotmail.com', 323435, '', '', 100000, '2023-08-28 17:50:33'),
(5, 'yuca', 'cegawon@hotmail.com', 12321, '213213', '2321', 30000, '2023-08-28 18:32:28'),
(6, 'yuca', 'cegawon@hotmail.com', 14324, 'cesar', 'valladupar', 20000, '2023-08-28 18:36:26'),
(7, 'cesar', 'cegawon@hotmail.com', 2434, 'guajira', 'riuacha', 20000, '2023-08-28 18:38:46'),
(8, 'yuca', 'cegawon@hotmail.com', 3123, '3333', '3333', 40000, '2023-08-28 18:39:41'),
(9, 'guineo', 'cegawon@hotmail.com', 322312, '44', '444', 30000, '2023-08-28 18:40:47'),
(10, '55', 'cegawon@hotmail.com', 555, '555', '555', 10000, '2023-08-28 18:44:38'),
(11, '11', 'cegawon@hotmail.com', 11, '11', '11', 10000, '2023-08-28 19:24:00'),
(12, '3', 'cegawon@hotmail.com', 3, '3', '3', 20000, '2023-08-28 20:36:22'),
(13, '4', 'cegawon@hotmail.com', 4, '4', '4', 30000, '2023-08-28 20:37:23'),
(14, '5', 'cegawon@hotmail.com', 5, '5', '5', 40000, '2023-08-28 20:39:50'),
(15, '6', 'cegawon@hotmail.com', 6, '6', '6', 100000, '2023-08-28 20:41:30'),
(16, '7', 'cegawon@hotmail.com', 7, '7', '7', 20000, '2023-08-28 20:42:42'),
(17, '7', 'cegawon@hotmail.com', 7, '7', '7', 40000, '2023-08-28 20:50:00'),
(19, 'cesar', 'cegawon@hotmail.com', 3008334903, 'cesar', 'valladupar', 40000, '2023-08-29 12:39:36'),
(20, 'cdd', 'cegawon@hotmail.com', 55, 'cesar', 'valladupar', 30000, '2023-08-31 18:02:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletin`
--
ALTER TABLE `boletin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `correo`
--
ALTER TABLE `correo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `donadores`
--
ALTER TABLE `donadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boletin`
--
ALTER TABLE `boletin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `correo`
--
ALTER TABLE `correo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `donadores`
--
ALTER TABLE `donadores`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
