-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2023 a las 04:07:18
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
-- Base de datos: `c_v_g`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_cita` (IN `nombre_estado` VARCHAR(255))   SELECT * 
    FROM cita
    WHERE estadoCita = nombre_estado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_empleado` (IN `nombre_estado` VARCHAR(255))   SELECT * 
    FROM empleado
    WHERE estadoEmpleado= nombre_estado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_rol` (IN `nombre_estado` VARCHAR(255))   SELECT * 
    FROM rol
    WHERE estadoRol = nombre_estado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_servicio` (IN `nombre_estado` VARCHAR(255))   SELECT * 
    FROM servicio
    WHERE estadoServicio = nombre_estado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `obtener_usuario` (IN `nombre_estado` VARCHAR(255))   SELECT * 
    FROM usuario
    WHERE estadoUsuario = nombre_estado$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idCita` int(10) NOT NULL COMMENT 'Llave primaria de la',
  `fechaCita` date NOT NULL COMMENT 'Fecha en la que se genera la cita',
  `horaCita` time NOT NULL COMMENT 'Hora en la que se genera la cita',
  `estadoCita` varchar(30) NOT NULL COMMENT 'Estado de la Cita, puede ser Activa / Inactiva\r\n\r\n/Agendada',
  `idEmpleado_FK` int(10) NOT NULL COMMENT 'Llave foránea que determina el id del\r\nempleado que atenderá la cita',
  `idCliente_FK` int(10) NOT NULL COMMENT 'Llave foránea que determina el id del cliente\r\n\r\nque agenda la cita',
  `idServicio_FK` int(10) NOT NULL COMMENT 'Llave foránea que determina el id del Servicio\r\n\r\nque agenda la cita'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idCita`, `fechaCita`, `horaCita`, `estadoCita`, `idEmpleado_FK`, `idCliente_FK`, `idServicio_FK`) VALUES
(1025623, '2019-05-15', '12:15:00', 'Activo', 1896785, 421740, 1049562839),
(1021456523, '2022-05-23', '17:35:00', 'Activo', 1490457899, 237772, 1025689457),
(1022459765, '2022-06-16', '17:35:00', 'Desactivo', 168007800, 416607, 1029364728),
(1022568944, '2020-06-25', '07:14:00', 'Desactivo', 1501893013, 593738, 1524589634),
(1024257964, '2022-05-30', '14:25:00', 'Activo', 1478946308, 251297, 1236654789),
(1024578456, '2022-04-25', '20:46:00', 'Desactivo', 1004564093, 549971, 1236589147),
(1024597664, '2022-03-12', '12:00:00', 'Activo', 1309989098, 742005, 1025689457),
(1024597865, '2021-02-09', '14:25:00', 'Desactivo', 1983487256, 202072, 1254886541),
(1025478112, '2019-06-23', '17:35:00', 'Activo', 1368594794, 281099, 1024352237),
(1025689332, '2020-06-27', '10:10:00', 'Activo', 1209230816, 424990, 1245789963),
(1025689562, '2022-04-12', '12:46:00', 'Activo', 1489678004, 390418, 1478523695),
(1025988745, '2020-07-03', '16:30:00', 'Activo', 1060999679, 458797, 1025899456),
(1206589785, '2020-06-30', '21:46:00', 'Activo', 1108975709, 588294, 1025456889),
(1232568825, '2020-02-12', '07:13:00', 'Activo', 1426499780, 307353, 1025489756),
(1243579567, '2021-03-12', '17:45:00', 'Activo', 1212349678, 620213, 1236589147),
(1245600327, '2020-03-18', '08:46:00', 'Activo', 1020455098, 742686, 1266547893),
(1245668859, '2019-07-06', '22:35:00', 'Activo', 1967845673, 205716, 1324354655),
(1245678632, '2022-05-28', '23:46:00', 'Activo', 1550989043, 449525, 1478523695),
(1245678932, '2022-06-12', '16:35:00', 'Activo', 1680097800, 418354, 1255478966),
(1245896325, '2019-06-17', '13:46:00', 'Activo', 1695678, 542101, 1835206625),
(1245986320, '2019-07-16', '23:15:00', 'Activo', 1758356723, 372001, 1689745631),
(1246632899, '2019-07-14', '17:35:00', 'Activo', 1254673680, 205717, 1523647895),
(1256478996, '2019-06-27', '19:46:00', 'Desactivo', 1364586967, 756588, 1028564738),
(1256894578, '2020-03-15', '13:58:00', 'Activo', 1022867784, 869843, 1235447890),
(1259689235, '2022-07-22', '14:00:00', 'Activo', 1005674308, 452387, 1046573822);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` int(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `servicios` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time(6) NOT NULL,
  `mensaje` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`nombre`, `apellido`, `telefono`, `correo`, `servicios`, `fecha`, `hora`, `mensaje`) VALUES
('duban', 'rincon', 2147483647, 'duban@duban', 'servicio 3', '2023-08-17', '21:43:00.000000', 'por favor cuiden a sacha gracias'),
('cuisa', 'bernal', 2147483647, 'luisateamo@gmail.com', 'servicio 2', '2023-09-20', '12:00:00.000000', 'milo muerde duro tener cuidado ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(10) NOT NULL COMMENT 'Llave primaria del Cliente',
  `numDocCliente` int(10) NOT NULL COMMENT 'Número de documento del Cliente',
  `tipoDocCliente` varchar(30) NOT NULL COMMENT 'Tipo de documento del Cliente',
  `nombreCliente` varchar(30) NOT NULL COMMENT 'Nombre del Cliente',
  `apellidoCliente` varchar(30) NOT NULL COMMENT 'Apellidos del Cliente',
  `direccionCliente` varchar(30) NOT NULL COMMENT 'Dirección del Cliente',
  `telefonoCliente` int(10) NOT NULL COMMENT 'Número de teléfono del Cliente',
  `estadoCliente` varchar(30) NOT NULL COMMENT 'Estado del Cliente, puede ser Activo / Inactivo',
  `idUsuario_FK` int(10) NOT NULL COMMENT 'Llave foránea que determina el id que tendrá\r\n\r\nel Cliente respecto a su usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `numDocCliente`, `tipoDocCliente`, `nombreCliente`, `apellidoCliente`, `direccionCliente`, `telefonoCliente`, `estadoCliente`, `idUsuario_FK`) VALUES
(202072, 2147483647, 'C.C', 'Pedro', '	Reyes', 'CL 25 # 11 A - 08', 2147483647, 'Activo', 1597843),
(205716, 2064030000, 'C.C', 'Enrique', 'Mejia', 'CL 3 # 6 - 22', 2147483647, 'Activo', 7342561),
(205717, 2147483647, 'C.C', 'Carmen', 'Morales', 'CL 52 # 7 - 32', 2147483647, 'Activo', 8692236),
(234240, 2147483647, 'C.C', 'Karla', 'Muñoz', 'EL DESCANSO VILLA LILIA', 2147483647, 'Activo', 6750185),
(237772, 1190078539, 'C.C', 'Aurelio', 'Hernández', 'VRD SAN BENITO FCA LA BAÑERA', 2147483647, 'Activo', 6321475),
(251297, 2147483647, 'C.C', 'Yunni', 'García', 'KR 5 # 7 - 11', 2147483647, 'Activo', 1478962),
(281099, 2147483647, 'C.C', 'Ethan', 'Martínez', 'KR 11 A # 13 B SUR - 40', 2147483647, 'Desactivo', 2548795),
(307353, 2147483647, 'C.C', 'Luhana', 'Pérez', 'KR 36 # 8 - 20', 2147483647, 'Activo', 2989735),
(372001, 2147483647, 'C.C', 'Nacari', 'Moreno', 'TV 89 #03', 0, 'Activo', 2578464),
(390418, 2147483647, 'C.C', 'Carolina', 'González', 'DG 2 SUR # 10 - 19', 2147483647, 'Activo', 1285241),
(416607, 2147483647, 'C.C', 'Martin', 'Gómez', 'KM 1.5 VIA ZIPAQUIRA GRANJA', 2147483647, 'Desactivo', 1594872),
(418354, 2010995000, 'C.C', 'Eneida', 'Giménez', 'CL 3 # 11 - 44 OF 310', 2147483647, 'Activo', 2589634),
(421740, 2088160000, 'C.C', 'Jesus', 'Jiménez', 'KR 5 # 4 - 79', 2147483647, 'Activo', 3585777),
(424990, 2147483647, 'C.C', 'Jhostin', 'Pérez', 'KR 7 # 8 - 09', 2147483647, 'Activo', 1296335),
(449525, 2147483647, 'C.C', 'Hector', 'Fernández', 'CL 31 # 2 - 90 BL 16 CS 32', 2147483647, 'Activo', 1478632),
(458797, 1103264449, 'C.C', 'Jose', 'Ramírez', 'CL 19 # 5 A - 79 IN 1', 2147483647, 'Desactivo', 1589458),
(542101, 2147483647, 'C.C', 'Derek', 'López', 'KM 5 VIA LA CALERA ', 2147483647, 'Activo', 2437442),
(549971, 1448139700, 'C.C', 'Nayrobi', 'Gutiérrez', 'KR 14 # 15 - 62', 2147483647, 'Activo', 8465927),
(588294, 2147483647, 'C.C', 'Manuel', 'Duarte', 'KR 5 # 18 - 53', 2147483647, 'Activo', 1589443),
(593738, 1367871900, 'C.C', 'Alejandro', 'Pereira', 'AV PRADILLA NO. 5 67', 2147483647, 'Activo', 2598459),
(620213, 1989641527, 'C.C', 'Estefania', 'Pineda', 'KR 6 ESTE # 1 A - 60 TO 11 AP ', 2147483647, 'Activo', 1456345),
(742005, 2147483647, 'C.C', 'Sandys', 'Espinoza', 'CL 19 # 30 - 70 CS 80', 2147483647, 'Activo', 1594785),
(742686, 2147483647, 'C.C', 'Patricia', 'Muñoz', 'KR 4 # 12 - 60', 2147483647, 'Activo', 2627878),
(756588, 2147483647, 'C.C', 'Alexander', 'Pereira', 'KR 7 # 3 - 63 OF 222', 2147483647, 'Activo', 2576500),
(869843, 2147483647, 'C.C', 'Lucia', 'Díaz', 'VE GRANJA - TELECOM SAN MIGUEL', 2147483647, 'Activo', 4057079);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(10) NOT NULL COMMENT 'Llave primaria del Empleado',
  `numDocEmpleado` int(10) NOT NULL COMMENT 'Número de documento del Empleado',
  `tipoDocEmpleado` varchar(30) NOT NULL COMMENT 'Tipo de documento del Empleado',
  `nombreEmpleado` varchar(30) NOT NULL COMMENT 'Nombre del Empleado',
  `apellidoEmpleado` varchar(30) NOT NULL COMMENT 'Apellidos del Empleado',
  `direccionEmpleado` varchar(30) NOT NULL COMMENT 'Dirección del Empleado',
  `telefonoEmpleado` int(10) NOT NULL COMMENT 'Número de teléfono del EmpleadoInactivo',
  `estadoEmpleado` varchar(30) NOT NULL COMMENT 'Estado del Empleado, puede ser Activo /\r\n\r\nInactivo',
  `idUsuario_FK` int(10) NOT NULL COMMENT 'Llave foránea que determina el id que tendrá\r\n\r\nel Empleado respecto a su usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `numDocEmpleado`, `tipoDocEmpleado`, `nombreEmpleado`, `apellidoEmpleado`, `direccionEmpleado`, `telefonoEmpleado`, `estadoEmpleado`, `idUsuario_FK`) VALUES
(1695678, 1467836402, 'C.C', 'Andres', 'Cepeda', 'CL 93 # 18 - 28 OF 304 ', 2147483647, 'Activo', 3585777),
(10256889, 1034765690, 'T.I', 'Luciana', 'Villa ', 'TV 56 A # 103 B - 01 ', 2147483647, 'Activo', 6750185),
(1004564093, 1738987306, 'C.C', 'Valeria', 'Díaz', 'CL 190 H # 88 - 80', 2147483647, 'Activo', 1285241),
(1005674308, 2147483647, 'T.I', 'Leonardo', 'Gutiérrez', 'CL11 # 76 C - 87', 2147483647, 'Desactivo', 1594872),
(1020455098, 2147483647, 'C.C', 'Sara', 'Calcedo', 'KR7 # 69 - 33', 2147483647, 'Activo', 4057079),
(1022867784, 1273834587, 'C.C', 'Andrea', 'Gomez', 'KR19 A # 82 - 45', 2147483647, 'Activo', 2989735),
(1060999679, 2147483647, 'C.C', 'Sebastian', 'Pérez', 'KR25 BIS # 3 SUR - 18', 2147483647, 'Activo', 1589443),
(1108975709, 1792520903, 'T.I', 'Diego', 'Cardenas', 'KR7 # 56 - 09', 2147483647, 'Activo', 1296335),
(1209230816, 2147483647, 'C.C', 'Ambar', 'Jimenez', 'CL127 # 14 - 54 OF 217', 2147483647, 'Activo', 2598459),
(1212349678, 2147483647, 'T.I', 'Valentina', 'Ramírez', 'KR19 B # 166 - 82', 2147483647, 'Activo', 1597843),
(1254673680, 2147483647, 'T.I', 'Ángel', 'Hernández', 'CL67 # 7 - 35 OF 408', 2147483647, 'Activo', 7342561),
(1309989098, 2147483647, 'C.C', 'Regina', 'Hernández', 'TV19 C # 16 - 80', 2147483647, 'Activo', 1456345),
(1364586967, 2147483647, 'C.C', 'Daniel', 'López', 'CL 53 # 71 - 21', 2147483647, 'Desactivo', 2548795),
(1368594794, 2147483647, 'C.C', 'Diego', 'Garcia', 'KR18 # 86 A - 14', 2147483647, 'Activo', 2437442),
(1426499780, 1536912593, 'T.I', 'Laura', 'Cesar', 'CL97 # 21 - 62', 2147483647, 'Activo', 2578464),
(1478946308, 1564314524, 'C.C', 'Sebastian', 'Rojas', 'CL18 # 96 B - 67', 2147483647, 'Activo', 1478632),
(1489678004, 2136856349, 'T.I', 'Camila', 'Rodríguez', 'KR09  # 06 - 22', 2147483647, 'Activo', 1594785),
(1490457899, 1265136252, 'C.C', 'Santiago', 'Pérez', 'KR12 K # 66 - 92', 2147483647, 'Activo', 8465927),
(1501893013, 2147483647, 'T.I', 'Maria', 'Lopez', 'CL 109 # 14 B - 60 OF 305', 2147483647, 'Activo', 2627878),
(1550989043, 1676431572, 'C.C', 'Mateo', ' Torres', 'CL 89 BIS # 39 - 22', 2147483647, 'Activo', 6321475),
(1680077800, 2147483647, 'C.C', 'Diego', 'Vargas', 'CL19 # 06 A - 67', 2147483647, 'Activo', 1478962),
(1680097800, 2147483647, 'C.C', 'David', 'Vega', 'TV11 # 116 B - 77', 2147483647, 'Activo', 2589634),
(1758356723, 1874367269, 'T.I', 'Victoria', 'Ramírez', 'CL80 # 23 - 21', 2147483647, 'Activo', 8692236),
(1967845673, 2147483647, 'C.C', 'Alexander', 'González', 'KR 7 # 158 - 60', 2147483647, 'Activo', 2576500),
(1983487256, 2108102837, 'C.C', 'Renata', 'Rodríguez', 'CL17 # 90 BIS - 98', 2147483647, 'Desactivo', 1589458);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(10) NOT NULL COMMENT 'Llave primaria del Rol del usuario',
  `descripcionRol` varchar(30) NOT NULL COMMENT 'Descripción del Rol',
  `estadoRol` varchar(30) NOT NULL COMMENT 'Estado del rol del Usuario, puede ser Activo /\r\n\r\nInactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `descripcionRol`, `estadoRol`) VALUES
(1245789, 'Empleado ', 'Activo'),
(10083098, 'Cliente', 'Activo'),
(10400998, 'Cliente', 'Activo'),
(10443098, 'Cliente', 'Activo'),
(12086776, 'Administrador', 'Activo'),
(12209876, 'Administrador', 'Activo'),
(12299089, 'Administrador', 'Activo'),
(12299809, 'Administrador', 'Activo'),
(13334004, 'Administrador', 'Activo'),
(13334544, 'Administrador', 'Activo'),
(13876004, 'Administrador', 'Activo'),
(14555678, 'Cliente', 'Activo'),
(14567527, 'Cliente', 'Activo'),
(14567567, 'Cliente', 'Activo'),
(14567987, 'Cliente', 'Activo'),
(15056732, 'Empleado', 'Desactivo'),
(15080787, 'Empleado', 'Desactivo'),
(15332896, 'Cliente', 'Activo'),
(15340978, 'Cliente', 'Activo'),
(15344678, 'Cliente', 'Activo'),
(15347896, 'Cliente', 'Activo'),
(15839567, 'Empleado', 'Desactivo'),
(16253700, 'Empleado', 'Activo'),
(16253790, 'Empleado ', 'Activo'),
(16258948, 'Empleado ', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(10) NOT NULL COMMENT 'Llave primaria del Servicio',
  `descripcionServicio` varchar(30) NOT NULL COMMENT 'Descripción del Servicio a agendar',
  `estadoServicio` varchar(10) NOT NULL COMMENT 'Estado del Servicio, puede ser Activo / Inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `descripcionServicio`, `estadoServicio`) VALUES
(1245789, 'Se le da al cliente la facilid', 'Activo'),
(1024352237, 'Se le da al cliente la facilid', 'Activo'),
(1025456889, 'Se le da al cliente la facilid', 'Desactivad'),
(1025489756, 'Se le da al cliente la facilid', 'Desactivad'),
(1025689457, 'Se le da al cliente la facilid', 'Activo'),
(1025899456, 'Se le da al cliente la facilid', 'Activo'),
(1028564738, 'Se le da al cliente la facilid', 'Desactivad'),
(1029364728, 'Se le da al cliente la facilid', 'Activo'),
(1046573822, 'Se le da al cliente la facilid', 'Desvativad'),
(1235447890, 'Se le da al cliente la facilid', 'Activo'),
(1236589147, 'Se le da al cliente la facilid', 'Activo'),
(1236654789, 'Se le da al cliente la facilid', 'Desactivad'),
(1245789630, 'Se le da al cliente la facilid', 'Activo'),
(1245789963, 'Se le da al cliente la facilid', 'Activo'),
(1254689223, 'Se le da al cliente la facilid', 'Activo'),
(1254886541, 'Se le da al cliente la facilid', 'Desactivad'),
(1255478966, 'Se le da al cliente la facilid', 'Activo'),
(1266547893, 'Se le da al cliente la facilid', 'Activo'),
(1324354655, 'Se le da al cliente la facilid', 'Avtivo'),
(1478523695, 'Se le da al cliente la facilid', 'Activo'),
(1523647895, 'Se le da al cliente la facilid', 'Activo'),
(1524589634, 'Se le da al cliente la facilid', 'Activo'),
(1689745631, 'Se le da al cliente la facilid', 'Activo'),
(1835206625, 'Se le da al cliente la facilid', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) NOT NULL COMMENT 'Llave primaria del usuario',
  `nombreusuario` varchar(100) NOT NULL,
  `correoUsuario` varchar(30) NOT NULL COMMENT 'Correo Electrónico del usuario',
  `passwordUsuario` varchar(150) NOT NULL COMMENT 'Contraseña del usuario',
  `estadoUsuario` varchar(30) NOT NULL COMMENT 'Estado del Usuario, puede ser Activo / Inactivo',
  `idRol_FK` int(10) NOT NULL COMMENT 'Llave foránea que determina el rol que tendrá\r\n\r\nel usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreusuario`, `correoUsuario`, `passwordUsuario`, `estadoUsuario`, `idRol_FK`) VALUES
(1025879, '', 'edelmira.tarazona@gmail.com', '2nn345', 'Activo', 16253748),
(1285241, '', 'ruthmari19@gmail.com', 's5f6d8', 'Activo', 14567987),
(1296335, '', 'colemplast@hotmail.com', 'as9954', 'Activo', 15347896),
(1456345, '', 'pipebross1@hotmail.com', '15der2', 'Activo', 15340978),
(1478632, '', 'maproquimltda@hotmail.com', 'd2f6t5', 'Activo', 16253700),
(1478962, '', 'johnjgc123@gmail.com', 'dd15ff', 'Activo', 15332896),
(1589443, '', 'pjjohanna@outlook.com', 'sd2fr9', 'Activo', 12299089),
(1589458, '', 'miltonborja@hotmail.com', '59fe77', 'activo', 15080787),
(1592364, '', 'metalcomer@hotmail.com', '152344', 'Activo', 16258948),
(1594785, '', 'talanuchemical@hotmail.com', 's2d5t7', 'Activo', 12086776),
(1594872, '', 'farmatec@outlook.com', 's2d5s8', 'Desactivo', 15056732),
(1597843, '', 'betaylor408@hotmail.com', '15eer5', 'Activo', 16258948),
(2437442, '', 'mpacheco@fotojapon.com', '675thy', 'Activo', 12209876),
(2548795, '', 'marinamejia@gmail.com', '1edr25', 'Desactivo', 15839567),
(2576500, '', 'jorge.pedraza@gmail.com', 'l4p3rr', 'Activo', 14555678),
(2578464, '', 'americasltda2@hotmail.com', '9fj67r', 'Activo', 10083098),
(2589634, '', 'ciadeayc@hotmail.com', 's5d7r9', 'Activo', 12299809),
(2598459, '', 'm.pinzon@gmail.com', '15ert5', 'Activo', 16253790),
(2627878, '', 'diacidos35@yahoo.com', 'ujy678', 'Activo', 13334004),
(2989735, '', 'info@gmail.com', '6y7t6y6', 'Activo', 14567527),
(3585777, '', 'contact@gmail.com', 'dth674', 'Activo', 15344678),
(4057079, '', 'manager@gmail.com', '45rf56', 'Activo', 10443098),
(6321475, '', 'metalfischer1937@gmail.com', 's4d8f2', 'Activo', 13876004),
(7342561, '', 'gerencia@gmail.com', 'mos435', 'Activo', 13334544),
(8465927, '', 'vitagroltda@hotmail.com', 't4g8j4', 'Activo', 10400998),
(8692236, '', 'areneravillamaria@gmail.com', 'k8u96h', 'Activo', 14567567),
(8692237, 'duban', 'soyneff@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', 0),
(8692239, 'paula', 'paulatonta@gmail.com', '443647bd06b4309e3cc46b605aef2cc66eda7f1fb437c155c68e269ce11c05895af4b8c3725c4a0170dcd130e0c3e78d1d0c85f3d13e54f08c19f3cad06633c4', '', 0),
(8692240, 'luisa', 'luisa@gmail.com', 'c60ddc553ceb403014f3de00eb59a6d7a0420c08fccd4885603b99a528ef2be6e40bfc251694556927ded76556cb607663d54ae0ee722c5e1a3e4d2b2347cebe', '', 0),
(8692241, 'duban2', 'duban@duban', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_registro`
--

CREATE TABLE `usuario_registro` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` int(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_cliente`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_cliente` (
`idCliente` int(10)
,`numDocCliente` int(10)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_usuario`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_usuario` (
`correoUsuario` varchar(30)
,`estadoUsuario` varchar(30)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_cliente`
--
DROP TABLE IF EXISTS `vista_cliente`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_cliente`  AS SELECT `cliente`.`idCliente` AS `idCliente`, `cliente`.`numDocCliente` AS `numDocCliente` FROM `cliente` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_usuario`
--
DROP TABLE IF EXISTS `vista_usuario`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_usuario`  AS SELECT `usuario`.`correoUsuario` AS `correoUsuario`, `usuario`.`estadoUsuario` AS `estadoUsuario` FROM `usuario` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `idEmpleado_FK` (`idEmpleado_FK`),
  ADD KEY `idCliente_FK` (`idCliente_FK`),
  ADD KEY `idServicio_FK` (`idServicio_FK`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `idUsuario_FK` (`idUsuario_FK`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `idUsuario_FK` (`idUsuario_FK`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idRol_FK` (`idRol_FK`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria del usuario', AUTO_INCREMENT=8692242;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
