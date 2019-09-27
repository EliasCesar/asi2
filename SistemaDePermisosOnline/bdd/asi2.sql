-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2019 a las 00:50:43
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asi2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nom_Cargo` varchar(45) DEFAULT NULL,
  `dependencia_id` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nom_Cargo`, `dependencia_id`, `estado`) VALUES
(1, 'Recursos Humanos', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `nom_ciudad` varchar(45) DEFAULT NULL,
  `departamento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratacion`
--

CREATE TABLE `contratacion` (
  `id_contratacion` int(11) NOT NULL,
  `Jornada` varchar(45) DEFAULT NULL,
  `fecha_Ingreso` date DEFAULT NULL,
  `Salario` decimal(11,2) DEFAULT NULL,
  `empleado_id` int(11) NOT NULL,
  `dependencia_id` int(11) NOT NULL,
  `jornada_laboral_id` int(11) NOT NULL,
  `tipo_sueldo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contratacion`
--

INSERT INTO `contratacion` (`id_contratacion`, `Jornada`, `fecha_Ingreso`, `Salario`, `empleado_id`, `dependencia_id`, `jornada_laboral_id`, `tipo_sueldo_id`) VALUES
(1, 'Completa', '2019-09-22', '1200.00', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nom_departamento` varchar(45) DEFAULT NULL,
  `pais_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencia`
--

CREATE TABLE `dependencia` (
  `id_dependencia` int(11) NOT NULL,
  `nombre_dep` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dependencia`
--

INSERT INTO `dependencia` (`id_dependencia`, `nombre_dep`) VALUES
(1, 'Recursos Humanos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias_solicitar`
--

CREATE TABLE `dias_solicitar` (
  `id_dias_solicitar` int(11) NOT NULL,
  `dias_sol` int(11) DEFAULT NULL,
  `dia_Inicio` datetime DEFAULT NULL,
  `dia_Fin` datetime DEFAULT NULL,
  `dias_pendientes` int(11) DEFAULT NULL,
  `tipo_licencia_id` int(11) NOT NULL,
  `empleado_id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `nom_direccion` varchar(45) DEFAULT NULL,
  `empleado_id` int(11) NOT NULL,
  `ciudad_id_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `codigo_isss` varchar(11) DEFAULT NULL,
  `id_tipo_Licencia` varchar(16) DEFAULT NULL,
  `telefono` varchar(8) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `dui` varchar(9) DEFAULT NULL,
  `nit` varchar(14) DEFAULT NULL,
  `afp` varchar(11) DEFAULT NULL,
  `estadi_civil` varchar(45) DEFAULT NULL,
  `empleado_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `apellido`, `fecha_nac`, `fecha_ingreso`, `codigo_isss`, `id_tipo_Licencia`, `telefono`, `email`, `dui`, `nit`, `afp`, `estadi_civil`, `empleado_id`, `cargo_id`, `estado`) VALUES
(1, 'Cesar', 'Elias', '1990-01-03', '2018-01-01', '1010101010', '1012252522', '222222', 'iav.cesarelias@ufg.edu.sv', '1014546', '1231432', '234234234', 'AcompaÃ±ado', 1, 1, 1),
(4, 'Test', 'test', '2019-09-24', '2019-09-24', '1222', '202222', '2012021', 'example@example.com', '0', '0', '0', 'Soltero', 1, 1, 1),
(5, 'Danie', 'Diaz', '2019-09-26', '2019-09-26', '01212454785', '02545425852222', '22128147', 'e@d.com', '010121456', '01258500222', '255555', 'Soltero', 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada_laboral`
--

CREATE TABLE `jornada_laboral` (
  `id_jornada_laboral` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `nescripcion` varchar(45) DEFAULT NULL,
  `jornada_inicio` time DEFAULT NULL,
  `jornada_fin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `jornada_laboral`
--

INSERT INTO `jornada_laboral` (`id_jornada_laboral`, `nombre`, `nescripcion`, `jornada_inicio`, `jornada_fin`) VALUES
(1, 'Completa', 'Jornada Completa', '08:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id_notificacion` int(11) NOT NULL,
  `id_sol_perm` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `mail_body` int(11) NOT NULL,
  `notificacion_id_notificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `nom_Pais` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol_nombre` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol_nombre`, `estado`) VALUES
(1, 'Administrador', 1),
(2, 'Personal Administrativo', 1),
(3, 'Prueba', 1),
(4, 'Prueba', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_permiso`
--

CREATE TABLE `solicitud_permiso` (
  `id_sol_perm` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `tipo_licencia_id` int(11) NOT NULL,
  `numero_dias` int(11) NOT NULL,
  `motivo_solicitud` varchar(300) NOT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_fin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `estado_sol` varchar(50) NOT NULL,
  `notificacion_id_notificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_licencia`
--

CREATE TABLE `tipo_licencia` (
  `Nom_Tipo_Licencia` varchar(45) DEFAULT NULL,
  `id_tipo_licencia` int(11) NOT NULL,
  `numero_dias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_sueldo`
--

CREATE TABLE `tipo_sueldo` (
  `id_tipo_sueldo` int(11) NOT NULL,
  `nom_tipo_sueldo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_sueldo`
--

INSERT INTO `tipo_sueldo` (`id_tipo_sueldo`, `nom_tipo_sueldo`) VALUES
(1, 'Quincenal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `mombre_comp` varchar(45) NOT NULL,
  `nickname` varchar(45) NOT NULL,
  `estado` char(1) NOT NULL,
  `psw` varchar(45) NOT NULL,
  `empleado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `mombre_comp`, `nickname`, `estado`, `psw`, `empleado_id`) VALUES
(1, 'cesar.elias', 'cesar.elias', '1', 'cesar.elias', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_rol`
--

CREATE TABLE `usuario_rol` (
  `id_usuario_rol` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_rol`
--

INSERT INTO `usuario_rol` (`id_usuario_rol`, `rol_id`, `usuario_id`) VALUES
(1, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`),
  ADD KEY `Cargo_dependencia` (`dependencia_id`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `ciudad_departamento` (`departamento_id`);

--
-- Indices de la tabla `contratacion`
--
ALTER TABLE `contratacion`
  ADD PRIMARY KEY (`id_contratacion`),
  ADD KEY `Contratacion_Jornada_Laboral` (`jornada_laboral_id`),
  ADD KEY `Contratacion_dependencia` (`dependencia_id`),
  ADD KEY `Contratacion_tipo_sueldo` (`tipo_sueldo_id`),
  ADD KEY `empleado_id` (`empleado_id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`),
  ADD KEY `departamento_Pais` (`pais_id`);

--
-- Indices de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  ADD PRIMARY KEY (`id_dependencia`);

--
-- Indices de la tabla `dias_solicitar`
--
ALTER TABLE `dias_solicitar`
  ADD PRIMARY KEY (`id_dias_solicitar`),
  ADD KEY `dias_solicitar_empleado` (`empleado_id_empleado`),
  ADD KEY `dias_solicitar_tipo_licencia` (`tipo_licencia_id`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `direccion_ciudad` (`ciudad_id_ciudad`),
  ADD KEY `direccion_empleado` (`empleado_id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `fk_Nom_Ape_Usuario_idx` (`codigo_isss`),
  ADD KEY `empleado_Cargo` (`cargo_id`),
  ADD KEY `empleado_empleado` (`empleado_id`);

--
-- Indices de la tabla `jornada_laboral`
--
ALTER TABLE `jornada_laboral`
  ADD PRIMARY KEY (`id_jornada_laboral`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id_notificacion`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `solicitud_permiso`
--
ALTER TABLE `solicitud_permiso`
  ADD PRIMARY KEY (`id_sol_perm`),
  ADD KEY `solicitud_permiso_empleado` (`empleado_id`),
  ADD KEY `solicitud_permiso_notificacion` (`notificacion_id_notificacion`),
  ADD KEY `solicitud_permiso_tipo_licencia` (`tipo_licencia_id`);

--
-- Indices de la tabla `tipo_licencia`
--
ALTER TABLE `tipo_licencia`
  ADD PRIMARY KEY (`id_tipo_licencia`);

--
-- Indices de la tabla `tipo_sueldo`
--
ALTER TABLE `tipo_sueldo`
  ADD PRIMARY KEY (`id_tipo_sueldo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `Usuario_empleado` (`empleado_id`);

--
-- Indices de la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD PRIMARY KEY (`id_usuario_rol`),
  ADD KEY `Usuario_Rol_Rol` (`rol_id`),
  ADD KEY `Usuario_Rol_Usuario` (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `contratacion`
--
ALTER TABLE `contratacion`
  MODIFY `id_contratacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dependencia`
--
ALTER TABLE `dependencia`
  MODIFY `id_dependencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `dias_solicitar`
--
ALTER TABLE `dias_solicitar`
  MODIFY `id_dias_solicitar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `jornada_laboral`
--
ALTER TABLE `jornada_laboral`
  MODIFY `id_jornada_laboral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_sueldo`
--
ALTER TABLE `tipo_sueldo`
  MODIFY `id_tipo_sueldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `Cargo_dependencia` FOREIGN KEY (`dependencia_id`) REFERENCES `dependencia` (`id_dependencia`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_departamento` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `contratacion`
--
ALTER TABLE `contratacion`
  ADD CONSTRAINT `Contratacion_Jornada_Laboral` FOREIGN KEY (`jornada_laboral_id`) REFERENCES `jornada_laboral` (`id_jornada_laboral`),
  ADD CONSTRAINT `Contratacion_dependencia` FOREIGN KEY (`dependencia_id`) REFERENCES `dependencia` (`id_dependencia`),
  ADD CONSTRAINT `Contratacion_tipo_sueldo` FOREIGN KEY (`tipo_sueldo_id`) REFERENCES `tipo_sueldo` (`id_tipo_sueldo`);

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_Pais` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `dias_solicitar`
--
ALTER TABLE `dias_solicitar`
  ADD CONSTRAINT `dias_solicitar_tipo_licencia` FOREIGN KEY (`tipo_licencia_id`) REFERENCES `tipo_licencia` (`id_tipo_licencia`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ciudad` FOREIGN KEY (`ciudad_id_ciudad`) REFERENCES `ciudad` (`id_ciudad`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_Cargo` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id_cargo`);

--
-- Filtros para la tabla `solicitud_permiso`
--
ALTER TABLE `solicitud_permiso`
  ADD CONSTRAINT `solicitud_permiso_notificacion` FOREIGN KEY (`notificacion_id_notificacion`) REFERENCES `notificacion` (`id_notificacion`),
  ADD CONSTRAINT `solicitud_permiso_tipo_licencia` FOREIGN KEY (`tipo_licencia_id`) REFERENCES `tipo_licencia` (`id_tipo_licencia`);

--
-- Filtros para la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD CONSTRAINT `Usuario_Rol_Usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
