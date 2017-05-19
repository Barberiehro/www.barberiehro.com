-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2017 a las 16:38:29
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barberiehro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(11) NOT NULL,
  `hora` varchar(30) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_cita`, `hora`, `fecha`, `estado`, `id_cliente`) VALUES
(7, '10:00 A.M.', '2017-04-22', 'activo', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(30) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `id_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `Nombre`, `Apellidos`, `Telefono`, `Correo`, `id_login`) VALUES
(0, 'jesus', 'aviles', '', '42901010101', 0),
(1, 'david', 'bejar', '4568907542', 'david@hotmail.com', 1),
(2, 'dany', 'Pacheco', '4621068188', 'adada', 2),
(3, 'francisco', 'rodriguez', '2347677654', 'fco@gmail.com', 3),
(4, 'pancho', 'rdz', '2312312', 'dadasd', 4),
(5, '', '', '', '', 5),
(6, 'Angel', 'HP', '234234', 'asdasd', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `usuario`, `contrasena`, `rol`) VALUES
(0, 'jesus', '123', 2),
(1, 'david', '123', 2),
(2, 'dany', '123', 2),
(3, 'perro', 'Admin123', 2),
(4, 'pancho', '123', 2),
(5, '', '', 2),
(6, 'Angel', '1234', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `costo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `tipo`, `costo`) VALUES
(0, 'hff', '655'),
(1, 'dsf', '324'),
(2, 'ghhffh', '554'),
(3, 'mhv', '87'),
(4, 'nuevo look', '$36'),
(5, 'xxx', '666'),
(6, '', ''),
(7, 'bbb', 'nnn'),
(8, 'ddd', '667'),
(9, 'zdskhbf', '98435'),
(10, 'corte americano', '$89'),
(11, 'corte espaÃ±ol', '$67'),
(12, 'corte eeee', '$76'),
(13, 'corte ffff', '$43'),
(14, 'corte dd', '$45'),
(15, 'sjdf', '$098'),
(16, 'lb', 'jkg'),
(17, 'chuy joto', '$0'),
(18, 'corte david', '$1'),
(19, 'lakdnfa', '$5'),
(20, 'corte chuy', '$600'),
(21, 'ejemplo', '34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `Descripcion` varchar(30) NOT NULL,
  `id_tipos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`Descripcion`, `id_tipos`) VALUES
('', 1),
('david es gay', 1),
('ddddd', 1),
('skjdfb', 1),
('mvh', 1),
('ghc', 1),
('nb', 1),
('hgf', 1),
('hfdtgt', 1),
('hggh', 1),
('sfsd', 1),
('hfgffy', 1),
('mv', 3),
('corte pelon', 4),
('xxxxxx', 5),
('', 6),
('vvv', 7),
('gg', 8),
('kasjgf', 9),
('hola', 10),
('trecn', 11),
('jhgvjhg ', 12),
('edbf', 13),
('.mb', 14),
('kjasb', 15),
('jg', 16),
('Golfa', 17),
('ljb', 18),
('jbÃ±kkn', 19),
('asdasd', 20),
('dfghÃ±', 21);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_login` (`id_login`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
