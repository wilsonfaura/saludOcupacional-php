-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2017 a las 13:32:08
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `saludocupacional`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `idActividad` int(11) NOT NULL,
  `actNombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `actDescripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `actArea` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `actFechaIni` date NOT NULL,
  `actFechaFin` date NOT NULL,
  `actEstado` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`idActividad`, `actNombre`, `actDescripcion`, `actArea`, `actFechaIni`, `actFechaFin`, `actEstado`) VALUES
(1, 'mantenimiento llenadora', 'cambio de coronadores y pistones', 'Mantenimiento', '2017-07-20', '2017-07-20', 'Programado'),
(2, 'limpieza de techos', 'limpieza de techos con divozan tc 86 en el area de llenado', 'Produccion', '2017-07-24', '2017-07-24', 'Programado'),
(3, 'mantenimiento del floculador', 'limpieza con acido clorhidrico del tanque floculador', 'Calidad', '2017-07-22', '2017-07-23', 'Programado'),
(4, 'lavado tk aguas alcalinas', 'lavado del tanque de alcalinas con su221 y agua a presion ', 'Calidad', '2017-07-16', '2017-07-16', 'Realizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idArea` int(11) NOT NULL,
  `area` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idArea`, `area`) VALUES
(1, 'Gerencia'),
(2, 'Administracion'),
(3, 'Calidad'),
(4, 'Produccion'),
(5, 'Mantenimiento'),
(6, 'Contabilidad'),
(7, 'Ventas'),
(8, 'Auditoria'),
(9, 'Publicidad'),
(10, 'Vehiculos'),
(11, 'Vigilancia'),
(12, 'Gestion Humana'),
(13, 'Almacen General'),
(14, 'Empaque y Producto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitacion`
--

CREATE TABLE `capacitacion` (
  `idCapacitacion` int(11) NOT NULL,
  `capInstructor` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `capTema` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `capDescripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `capArea` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `capFecha` date NOT NULL,
  `capHora` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `capEstado` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `capacitacion`
--

INSERT INTO `capacitacion` (`idCapacitacion`, `capInstructor`, `capTema`, `capDescripcion`, `capArea`, `capFecha`, `capHora`, `capEstado`) VALUES
(1, 'Nataly Vargas', 'riesgo electrico', 'prevencion en el uso de la energia electrica', 'mantenimiento, produccion, calidad', '2017-07-22', '08:30', 'Programado'),
(2, 'Nataly Vargas', 'elementos de proteccion personal', 'conocimientos basicos de epp, caracteristicas y usos', 'calidad, produccion, mateniemiento, empaque', '2017-07-23', '10:00', 'Programado'),
(3, 'Noelva Martinez', 'trabajo seguro en laboratorio quimico', 'factores de riesgo y prevencion en manipulacion de productos quimicos', 'calidad, produccion', '2017-07-24', '09:00', 'Programado'),
(4, 'German Ladino', 'exposicion al ruido', 'comportamientos para la prevencion en la esposicion a ruidos peligrosos', 'Produccion', '2017-07-15', '14:00', 'Realizado'),
(5, 'German Ladino', 'ergonomia en oficinas', 'organizacion en el trabajo y posturas frente a los computadores', 'contabilidad, administracion', '2017-07-07', '07:30', 'Realizado'),
(6, 'Nataly Vargas', 'control de riesgo en maquinas', 'identificacion de riesgos graves al momento de manipular maquinas', 'Produccion, mantenimiento', '2017-07-24', '16:00', 'Programado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idcargo` int(11) NOT NULL,
  `cargo` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idcargo`, `cargo`) VALUES
(1, 'Gerente '),
(2, 'Administradora'),
(3, 'Jefe de empaque y producto'),
(4, 'Jefe de almacen general'),
(5, 'Jefe de gestion humana'),
(6, 'Jefe de mantenimiento'),
(7, 'Jefe de calidad'),
(8, 'Jefe de vehiculos'),
(9, 'Jefe de produccion'),
(10, 'Jefe de publicidad'),
(11, 'Jefe de contabilidad'),
(12, 'Jefe de ventas'),
(13, 'Auditor'),
(14, 'Mecanico de vehiculos'),
(15, 'Mecanico de mantenimiento'),
(16, 'Lubricador'),
(17, 'Electricista'),
(18, 'Aprendiz sena'),
(19, 'Supervisor de calidad'),
(20, 'Auxiliar de calidad'),
(21, 'Operario I'),
(22, 'Operario II'),
(23, 'Supervisor de produccion'),
(24, 'Auxiliar de produccion'),
(25, 'Jardinero'),
(26, 'Servicios generales'),
(27, 'Supervisor de almacen general'),
(28, 'Auxiliar de gestion humana'),
(29, 'Auxiliar de almacen general'),
(30, 'Supervisor de empaque y producto'),
(31, 'Secretaria'),
(32, 'Supervisor de ventas'),
(33, 'Vigilante'),
(34, 'Portero'),
(35, 'Preventista'),
(36, 'Mercaderista'),
(37, 'Cajero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega`
--

CREATE TABLE `entrega` (
  `idEntrega` int(11) NOT NULL,
  `entTrabajador` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `entEpp` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `entFecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `entrega`
--

INSERT INTO `entrega` (`idEntrega`, `entTrabajador`, `entEpp`, `entFecha`) VALUES
(1, '1090408653', 'botas de caucho amarilla', '2017-07-16'),
(2, '1090408653', 'Guantes de nitrilo', '2017-07-09'),
(3, '46576224', 'gafas antiparticulas', '2017-07-07'),
(4, '724637876', 'guantes de carnaza', '2017-07-14'),
(5, '88268645', 'protector auditivo de copa', '2017-07-12'),
(6, '882436574', 'peto de caucho blanco', '2017-07-18'),
(7, '74378536', 'botas punta de acero negra', '2017-07-18'),
(8, '724637876', 'peto de caucho blanco', '2017-07-17'),
(9, '27696452', 'gafas antiparticulas', '2017-07-17'),
(10, '46576224', 'botas de caucho amarilla', '2017-07-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `epp`
--

CREATE TABLE `epp` (
  `idEpp` int(11) NOT NULL,
  `eppNombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `eppReferencia` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `eppTalla` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `eppProveedor` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `eppIdProveedor` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `eppTelProveedor` int(15) NOT NULL,
  `eppEmailProveedor` varchar(35) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `epp`
--

INSERT INTO `epp` (`idEpp`, `eppNombre`, `eppReferencia`, `eppTalla`, `eppProveedor`, `eppIdProveedor`, `eppTelProveedor`, `eppEmailProveedor`) VALUES
(1, 'Guantes de nitrilo', '453750', 'n/a', 'safety', '654785', 312546342, 'totalsafety@hotmail.com'),
(2, 'gafas antiparticulas', '786546', 'n/a', 'safety', '654785', 312546342, 'totalsafety@hotmail.com'),
(3, 'peto de caucho blanco', '756867', 'n/a', 'safety', '654785', 312546342, 'totalsafety@hotmail.com'),
(4, 'protector auditivo de copa', '746589', 'n/a', 'diserva', '953768', 2147483647, 'diservaepp@hotmail.com'),
(5, 'guantes de carnaza', '956342', 'n/a', 'diserva', '953768', 2147483647, 'diservaepp@hotmail.com'),
(6, 'botas punta de acero negra', '785657', 'n/a', 'diserva', '953768', 2147483647, 'diservaepp@hotmail.com'),
(7, 'botas de caucho amarilla', '782132', 'n/a', 'mvdotaciones', '564480', 320897673, 'mvdotacionesep@gmail.com'),
(8, 'careta de plastico', '234970', 'n/a', 'mvdotaciones', '564480', 320897673, 'mvdotacionesep@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idEvento` int(11) NOT NULL,
  `evIdTrabajador` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `evDateActual` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `evEdad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `evVinculo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `evTipo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `evFecha` date NOT NULL,
  `evHora` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `evLugar` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `evActividad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `evDescripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idEvento`, `evIdTrabajador`, `evDateActual`, `evEdad`, `evVinculo`, `evTipo`, `evFecha`, `evHora`, `evLugar`, `evActividad`, `evDescripcion`) VALUES
(1, '46576224', '2017-07-18     20:45:39', '33', 'Temporal', 'Incidente', '2017-06-29', '09:09', 'llenadora', 'converion', 'se cae una estrella sobre el pie del trabajdor, sin recibir lesion'),
(2, '27696452', '2017-07-18     20:49:30', '26', 'Directo', 'Incidente', '2017-07-04', '14:45', 'pasillo', 'caminar', 'se resbala por causa de piso mojado. No causa ninguna lesion '),
(3, '74378536', '2017-07-18     20:52:10', '37', 'Directo', 'Accidente', '2017-06-26', '11:54', 'PTAP', 'reajustar la cal', 'al momento del reajuste salpica una gota de cal en el ojo derecho.'),
(4, '88268645', '2017-07-18     20:55:21', '29', 'Directo', 'Accidente', '2017-07-10', '16:32', 'produccion', 'inspeccion lente de envase', 'cortdura del dedo indice izquierdo al retirar una botella rota.'),
(5, '1090449555', '2017-07-18     21:02:43', '24', 'Directo', 'Accidente', '2017-07-01', '08:56', 'laboratorio quimico', 'preparacion de reactivos', 'quemadura en el brazo izquierdo con acido nitrico'),
(6, '882436574', '2017-07-18     21:05:52', '43', 'Temporal', 'Accidente', '2017-07-07', '17:04', 'linea de envasado', 'operacion empacadora ', ' se luxa un tobillo al bajar de la plataforma. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `idTrabajador` int(11) NOT NULL,
  `identificacion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `traNombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `traApellido` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `traArea` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `traCargo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `traIngreso` date NOT NULL,
  `traSexo` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `traRh` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `traDir` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `traTel` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `traEmail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `traContacNombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `traContacApellido` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `traContacTelefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `traImagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`idTrabajador`, `identificacion`, `traNombre`, `traApellido`, `traArea`, `traCargo`, `traIngreso`, `traSexo`, `traRh`, `traDir`, `traTel`, `traEmail`, `traContacNombre`, `traContacApellido`, `traContacTelefono`, `traImagen`) VALUES
(7, '1090408653', 'Leisy Liliana', 'Jacome Delgado', 'Gestion Humana', 'Auxiliar de gestion humana', '2016-06-14', 'F', 'O+', 'carrera 19#32-16', '310553379', 'jaclilianadel@hotmail.com', 'Jesus Alberto', 'Jacome Vergara', '3109488067', '1090408653.jpg'),
(3, '1090449555', 'Yenny Marcela', 'Robles Mejia', 'Calidad', 'Aprendiz sena', '2015-11-26', 'F', 'A-', 'calle 22 # 8-45', '314563428', 'yennymarcelar@hotmail.com', 'Erika Jazmin', 'Robles Mejia', '3114290780', 'amiga.png'),
(8, '27696452', 'Mayoli Paola', 'Ossa Rincon', 'Gestion Humana', 'Aprendiz sena', '2017-01-08', 'F', 'O-', 'calle 28 a # 38-15', '3132756480', 'mayoliossarin@gmail.com', 'Jose Javier', 'Rincon Torres', '3116689756', '27696452.jpg'),
(5, '46576224', 'Jorge Edilberto', 'Sierra Bautista', 'Mantenimiento', 'Mecanico de mantenimiento', '2014-08-15', 'M', 'B-', 'trans 13#43-57', '320786757', 'jorgesierrab@gmail.com', 'Maria Angelica', 'Bautista Celi', '3112378453', '46576224.jpg'),
(6, '70676689', 'Juan Carlos ', 'Galviz Rangel', 'Mantenimiento', 'Lubricador', '2006-07-17', 'M', 'AB+', 'Calle 41 # 13-36', '3132789564', 'juancarlosga@hotmail.com', 'Maria Angelica', 'Rangel llanos', '310666754', '70676689.jpg'),
(4, '724637876', 'David Leonardo', 'Alvarez Lopez', 'Calidad', 'Auxiliar de calidad', '2012-02-07', 'M', 'B+', 'carrera 16#34-56', '3112324365', 'davidalvarez12@hotmail.com', 'Juan Camilo', 'Alvarez Lopez', '3209897346', '724637876.jpg'),
(2, '74378536', 'Yeison Andres', 'Chaparro Moreno', 'Calidad', 'Operario II', '2004-04-15', 'M', 'A+', 'carrera 33#24-56', '3156432328', 'yeisonandres1@gmail.com', 'Pilar Andrea', 'Chaparro Moreno', '3214323569', 'amigo.png'),
(10, '882436574', 'Andres Mauricio', 'Hernandez Camargo', 'Produccion', 'Operario II', '2014-05-12', 'M', 'O+', 'carrera 12#14-18', '3136689796', 'andresmauricioh@outllok.com', 'Lilian Astrid ', 'Hernandez', '3118978095', '882436574.jpg'),
(9, '88268645', 'Oswaldo Enrique ', 'Robayo Jaimes', 'Produccion', 'Operario II', '2016-08-19', 'M', 'A+', 'carrera 22#34-29', '3127324787', 'oswaldorobayo@outllok.com', 'Ana Karina', 'Cepeda Jaimes', '3104533673', '88268645.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuIdentificacion` int(11) NOT NULL,
  `usuNombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuApellido` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuCargo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuArea` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuPassword` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuIdentificacion`, `usuNombre`, `usuApellido`, `usuCargo`, `usuArea`, `usuPassword`) VALUES
(1, 74380673, 'Magali del Carmen', 'Rivera', 'Jefe de gestion humana', 'Gestion Humana', '12345'),
(2, 1052383408, 'Hector Elias ', 'Hernandez Merchan', 'Jefe de produccion', 'Produccion', '1234'),
(3, 73435421, 'Parmenidez ', 'Zanabria Castro', 'Jefe de mantenimiento', 'Mantenimiento', '1234'),
(4, 1053458779, 'Noelva', 'Martinez Cepeda', 'Jefe de calidad', 'Calidad', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idVehiculo` int(11) NOT NULL,
  `vehIdTra` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `vehPlaca` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `vehTipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `vehMarca` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `vehModelo` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `vehTarPro` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `vehKm` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `vehLicencia` date NOT NULL,
  `vehSoat` date NOT NULL,
  `vehTecno` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `vehIdTra`, `vehPlaca`, `vehTipo`, `vehMarca`, `vehModelo`, `vehTarPro`, `vehKm`, `vehLicencia`, `vehSoat`, `vehTecno`) VALUES
(1, '1090408653', 'BYW186', 'Automovil', 'chevrolet', '2013', 'JFGR46574564', '75643', '2022-07-29', '2017-07-27', '2017-07-30'),
(2, '1090449555', 'KGY643', 'Camioneta', 'renault', '2008', 'YUTG53425364', '67540', '2020-07-05', '2017-08-11', '2018-07-23'),
(3, '724637876', 'FEC386', 'Camion', 'chevrolet', '2011', 'WSCF53623180', '77380', '2018-03-22', '2017-08-12', '2018-07-23'),
(4, '70676689', 'BJT439', 'Automovil', 'mazda', '2006', 'LUJH54385643', '106785', '2019-07-21', '2017-10-10', '2017-08-16'),
(5, '88268645', 'EFR775', 'Automovil', 'mazda', '2003', 'DFRH66553290', '112875', '2025-09-13', '2017-11-22', '2017-07-29'),
(6, '882436574', 'HKE004', 'Camioneta', 'renault', '2016', 'FDC53878953', '32000', '2021-06-28', '2018-02-06', '2018-05-06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`idActividad`),
  ADD KEY `actArea` (`actArea`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area`),
  ADD UNIQUE KEY `idArea` (`idArea`);

--
-- Indices de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD PRIMARY KEY (`idCapacitacion`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`cargo`),
  ADD UNIQUE KEY `idcargo` (`idcargo`);

--
-- Indices de la tabla `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`idEntrega`),
  ADD KEY `entTrabajador` (`entTrabajador`),
  ADD KEY `entEpp` (`entEpp`);

--
-- Indices de la tabla `epp`
--
ALTER TABLE `epp`
  ADD PRIMARY KEY (`idEpp`),
  ADD UNIQUE KEY `eppNombre` (`eppNombre`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`),
  ADD KEY `evIdTrabajador` (`evIdTrabajador`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`identificacion`),
  ADD UNIQUE KEY `idTrabajador` (`idTrabajador`),
  ADD KEY `traArea` (`traArea`),
  ADD KEY `traCargo` (`traCargo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `usuCargo` (`usuCargo`),
  ADD KEY `usuArea` (`usuArea`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`idVehiculo`),
  ADD KEY `vehIdTra` (`vehIdTra`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `idActividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  MODIFY `idCapacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idcargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `entrega`
--
ALTER TABLE `entrega`
  MODIFY `idEntrega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `epp`
--
ALTER TABLE `epp`
  MODIFY `idEpp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `idTrabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idVehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`actArea`) REFERENCES `area` (`area`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entrega`
--
ALTER TABLE `entrega`
  ADD CONSTRAINT `entrega_ibfk_1` FOREIGN KEY (`entTrabajador`) REFERENCES `trabajador` (`identificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `entrega_ibfk_2` FOREIGN KEY (`entEpp`) REFERENCES `epp` (`eppNombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`evIdTrabajador`) REFERENCES `trabajador` (`identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD CONSTRAINT `trabajador_ibfk_1` FOREIGN KEY (`traCargo`) REFERENCES `cargo` (`cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trabajador_ibfk_2` FOREIGN KEY (`traArea`) REFERENCES `area` (`area`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`usuArea`) REFERENCES `area` (`area`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`usuCargo`) REFERENCES `cargo` (`cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`vehIdTra`) REFERENCES `trabajador` (`identificacion`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
