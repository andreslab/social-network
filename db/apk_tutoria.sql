-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2016 a las 19:48:38
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apk_tutoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `codigo_carrera` int(10) NOT NULL,
  `nombre_carrera` varchar(80) NOT NULL,
  `facultad_carrera` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`codigo_carrera`, `nombre_carrera`, `facultad_carrera`) VALUES
(1, 'Ingenieria en Direccion y Produccion en Artes Multimedia', 'Facultad de Artes y Humanidades'),
(2, 'Ingenieria en Direccion y Produccion en Artes Multimedia', 'Facultad de Artes y Humanidades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera_docente`
--

CREATE TABLE `carrera_docente` (
  `codigo_asig_cd` int(10) NOT NULL,
  `codigo_carrera` int(10) NOT NULL,
  `codigo_docente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `codigo_docente` int(10) NOT NULL,
  `nombre_docente` varchar(50) NOT NULL,
  `apellido_docente` varchar(50) NOT NULL,
  `correo_docente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `codigo` int(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`codigo`, `nombre`, `foto`) VALUES
(6, 'sdsad', 'IMG/2.jpg'),
(13, 'Monalisa', 'IMG/4.jpg'),
(14, 'La creacion', 'IMG/3.jpg'),
(15, 'Chango', 'IMG/8.jpg'),
(16, 'El tiempo', 'IMG/a.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `codigo_grupo` int(10) NOT NULL,
  `codigo_asig_cd` int(10) NOT NULL,
  `nombre_grupo` varchar(100) NOT NULL,
  `descripcion_grupo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrantes_grupo`
--

CREATE TABLE `integrantes_grupo` (
  `codigo_integrante` int(10) NOT NULL,
  `codigo_usuario` int(10) NOT NULL,
  `codigo_grupo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `codigo_media` int(50) NOT NULL,
  `media` varchar(200) NOT NULL,
  `codigo_publicacion` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `codigo_publicacion` int(50) NOT NULL,
  `tema_publicacion` varchar(100) NOT NULL,
  `contenido_publicacion` varchar(300) NOT NULL,
  `codigo_integrante` int(10) NOT NULL,
  `fecha_publicacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codigo_usuario` int(5) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_usuario` varchar(50) NOT NULL,
  `correo_usuario` varchar(100) NOT NULL,
  `clave_usuario` varchar(30) NOT NULL,
  `codigo_carrera` int(3) NOT NULL,
  `sexo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codigo_usuario`, `nombre_usuario`, `apellido_usuario`, `correo_usuario`, `clave_usuario`, `codigo_carrera`, `sexo`) VALUES
(6, 'Diego', 'Lambertucci', 'dj_lambertucci@hotmail.com', '12345', 1, 'M'),
(8, 'Xavier', 'Aguilar', 'xaac19@hotmail.com', 'xaac', 1, 'M'),
(10, 'Patsy', 'Quijije', 'laguijije@hotmail.com', 'quijije', 1, 'F');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`codigo_carrera`);

--
-- Indices de la tabla `carrera_docente`
--
ALTER TABLE `carrera_docente`
  ADD PRIMARY KEY (`codigo_asig_cd`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`codigo_docente`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`codigo_grupo`);

--
-- Indices de la tabla `integrantes_grupo`
--
ALTER TABLE `integrantes_grupo`
  ADD PRIMARY KEY (`codigo_integrante`);

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`codigo_media`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`codigo_publicacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo_usuario`),
  ADD UNIQUE KEY `correo_usuario` (`correo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `codigo_carrera` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `carrera_docente`
--
ALTER TABLE `carrera_docente`
  MODIFY `codigo_asig_cd` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `codigo_docente` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `codigo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `codigo_grupo` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `integrantes_grupo`
--
ALTER TABLE `integrantes_grupo`
  MODIFY `codigo_integrante` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `codigo_media` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `codigo_publicacion` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
