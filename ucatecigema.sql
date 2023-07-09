-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2023 a las 04:25:50
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
-- Base de datos: `ucatecigema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_act` int(11) NOT NULL,
  `id_tip_act` int(11) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `dia` date DEFAULT NULL,
  `descrip` varchar(200) DEFAULT NULL,
  `lugar` varchar(30) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_act`, `id_tip_act`, `nombre`, `dia`, `descrip`, `lugar`, `estado`) VALUES
(1, 2, 'llevar grava', '0000-00-00', 'descripcion', 'pirque - cochabamba', '1'),
(2, 1, 'reparacion tractor t54', '0000-00-00', 'falla de  motor', 'taller quillacollo', '1'),
(4, 4, 'accctividadsaas  s', '2023-07-07', 'descripppp 4 de ac', 'almaca 4', '1'),
(5, 4, 'almacenar piedra', '2023-07-08', 'piedra para empredrar', 'pirque, transportar a quilla', '1'),
(6, 4, 'lavar arena', '2023-07-05', 'seleccion de material  para cocha', 'almacen pirque llevar a...', '1'),
(7, 1, 'arena', '2023-07-07', 'descripppp 4', 'lugarr', '1'),
(8, 1, 'mecanico hgv', '2023-07-07', 'descripppp 4', '132132', '1'),
(9, 3, 'llevar 45 cubas', '2023-07-07', 'des 45', 'pirque 45', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `act_emp`
--

CREATE TABLE `act_emp` (
  `id_act_emp` int(11) NOT NULL,
  `id_act` int(11) DEFAULT NULL,
  `id_emp` int(11) DEFAULT NULL,
  `fecha_ini` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `act_emp`
--

INSERT INTO `act_emp` (`id_act_emp`, `id_act`, `id_emp`, `fecha_ini`, `fecha_fin`, `fecha`, `estado`) VALUES
(1, 1, 8, '2023-02-01 00:00:00', '2023-02-05 00:00:00', '2023-07-05 03:42:59', '1'),
(2, 2, 12, '2023-02-05 00:00:00', '2023-02-08 00:00:00', '2023-07-05 16:43:05', '1'),
(3, 9, 14, '2023-07-21 00:00:00', '2023-07-21 00:00:00', '2023-07-08 00:09:47', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admiss`
--

CREATE TABLE `admiss` (
  `id_adm` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `correo` varchar(300) DEFAULT NULL,
  `contasena` varchar(300) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asi` int(11) NOT NULL,
  `id_emp` int(11) DEFAULT NULL,
  `id_ent_sal` int(11) DEFAULT NULL,
  `latitud` float NOT NULL,
  `longitud` float NOT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asi`, `id_emp`, `id_ent_sal`, `latitud`, `longitud`, `fecha`) VALUES
(2, 9, 30, -17, -66.152, '2023-06-19 17:03:32'),
(3, 9, 6, -17, -66.152, NULL),
(4, 9, 6, -17, -66.152, '2023-07-01 21:54:58'),
(5, 9, 6, -17, -66.152, '2023-07-01 22:17:43'),
(6, 9, 10, -17, -66.152, '2023-07-01 22:17:57'),
(7, 8, 12, -17, -66.152, '2023-07-01 23:00:41'),
(8, 8, 11, -17, -66.152, '2023-07-01 23:01:12'),
(9, 9, 1, -17, -66.152, '2023-07-01 23:04:00'),
(10, 8, 31, -17, -66.152, '2023-07-01 23:14:41'),
(11, 8, 31, -17, -66.152, '2023-07-01 23:16:35'),
(12, 8, 31, -17, -66.152, '2023-07-01 23:16:52'),
(13, 8, 31, -17, -66.152, '2023-07-01 23:17:26'),
(14, 8, 32, -17, -66.152, '2023-07-01 23:18:31'),
(15, 8, 33, -17, -66.152, '2023-07-01 23:18:41'),
(16, 8, 34, -17, -66.152, '2023-07-01 23:20:41'),
(17, 8, 35, -17, -66.152, '2023-07-01 23:27:13'),
(18, 8, 36, -17, -66.152, '2023-07-01 23:28:31'),
(19, 8, 37, -17, -66.152, '2023-07-01 23:48:12'),
(20, 8, 38, -17, -66.152, '2023-07-01 23:48:14'),
(21, 8, 39, -17, -66.152, '2023-07-02 15:21:12'),
(22, 9, 40, -17.3998, -66.152, '2023-07-02 22:18:11'),
(23, 9, 41, -17.3998, -66.152, '2023-07-02 22:18:33'),
(24, 9, 42, -17.3998, -66.152, '2023-07-02 22:20:39'),
(25, 12, 43, -17.3933, -66.1488, '2023-07-04 23:44:21'),
(26, 12, 44, -17.3933, -66.1488, '2023-07-04 23:44:37'),
(27, 2, 45, -17.3965, -66.1488, '2023-07-08 00:12:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_car` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descrip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_car`, `nombre`, `descrip`) VALUES
(1, 'Chofer de volqueta', 'conductor de camion de transporte'),
(2, 'operador de tractor', 'conductor de maquinaria pesada'),
(4, 'administrador', 'gestiona las actividades'),
(6, 'mecanico', 'mecanico descrip'),
(7, 'mecanico 1', 'descripcio ndel cargo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descrip` varchar(100) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `nombre`, `descrip`, `estado`) VALUES
(1, 'piedra', 'caleccion de piedra', '1'),
(2, 'arena', 'seleccion de material fina', '1'),
(3, 'limo', 'para cultivo', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciu` int(11) NOT NULL,
  `id_dep` int(11) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciu`, `id_dep`, `nombre`) VALUES
(6, 2, 'el alto'),
(7, 1, 'cercado'),
(8, 1, 'quillacollo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_com` int(11) NOT NULL,
  `id_usu` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `costo` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id_com`, `id_usu`, `cantidad`, `costo`, `fecha`) VALUES
(4, 2, 300, 10000, '2023-06-16 14:43:57'),
(5, 2, 5000, 20000, '2023-06-16 14:45:38'),
(6, 2, 5000, 20000, '2023-06-16 14:45:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id_con` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mesaje` varchar(300) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_con`, `nombre`, `apellido`, `email`, `mesaje`, `fecha`) VALUES
(1, 'juana', 'tortes', 'juana@gmail.com', 'este mensaje es de juana, consulta de material de construcción', '2023-07-06'),
(4, 'carlos', 'conde', 'carlos@gmail.com', 'mensaje de carlos', '2023-07-06'),
(5, 'nombre de contacto', 'apellido de cont', 'a@gmail.com', NULL, '2023-07-08'),
(6, 'a', 'aa', 'aaa@gmail.com', NULL, '2023-07-08'),
(7, 'el contactos', 'de perezz', 'e@gmail.com', 'hola caracola', '2023-07-08'),
(8, 'hbbkj', 'bhbjbjh', 'juan@gmail.com', 'bhjb', '2023-07-08'),
(9, 'hbbkj', 'bhbjbjh', 'juan@gmail.com', 'bhjb', '2023-07-08'),
(10, 'hbbkj', 'bhbjbjh', 'juan@gmail.com', 'bhjb', '2023-07-08'),
(11, 'jhj', 'gjhg', 'scaris64@hotmail.com', 'gvghvj', '2023-07-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costo_pro`
--

CREATE TABLE `costo_pro` (
  `id_cos_pro` int(11) NOT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `costo_pro`
--

INSERT INTO `costo_pro` (`id_cos_pro`, `id_cat`, `nombre`, `precio`, `fecha`, `estado`) VALUES
(1, 1, 'grava', 45, '2023-06-16 02:20:42', '1'),
(2, 1, 'gravilla', 65, '2023-06-16 02:21:02', '1'),
(3, 1, 'graba gruesa', 30, '2023-06-16 02:21:36', '1'),
(4, 2, 'arena hormigón', 90, '2023-06-16 02:22:23', '1'),
(5, 2, 'lavada', 85, '2023-06-16 02:22:38', '1'),
(6, 1, 'piedra para empedrado', 59, '2023-07-05 22:30:59', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depertamento`
--

CREATE TABLE `depertamento` (
  `id_dep` int(11) NOT NULL,
  `id_pai` int(11) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `depertamento`
--

INSERT INTO `depertamento` (`id_dep`, `id_pai`, `nombre`) VALUES
(1, 1, 'cochabamba'),
(2, 1, 'la paz'),
(3, 1, 'santa cruz'),
(4, 3, 'lima'),
(5, 3, 'arequipa'),
(6, 4, 'rio de janeiro'),
(7, 4, 'parana'),
(8, 5, 'santiago'),
(9, 5, 'iquique');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_det_ven` int(11) NOT NULL,
  `id_pro` int(11) DEFAULT NULL,
  `id_ven` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `descrip` varchar(50) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id_det_ven`, `id_pro`, `id_ven`, `cantidad`, `fecha`, `precio`, `descrip`, `total`) VALUES
(1, 5, 1, 10, '2023-06-19 02:04:03', 90, 'desd', 900),
(2, 5, 2, 12, '2023-06-19 02:04:03', 90, 'para construccion pro', 1080),
(3, 3, 3, 10, '2023-06-19 02:08:14', 65, 'gravilla 250', 650),
(4, 5, 4, 15, '2023-06-26 19:34:04', 90, 'para construccion pro', 1350);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_dir` int(11) NOT NULL,
  `id_ciu` int(11) DEFAULT NULL,
  `id_per` int(11) DEFAULT NULL,
  `pueblo` varchar(15) DEFAULT NULL,
  `direc` varchar(100) DEFAULT NULL,
  `zona` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_emp` int(11) NOT NULL,
  `id_per` int(11) DEFAULT NULL,
  `id_tip_emp` int(11) DEFAULT NULL,
  `id_hor_asi` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `observaciones` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_emp`, `id_per`, `id_tip_emp`, `id_hor_asi`, `fecha`, `estado`, `observaciones`) VALUES
(8, 1, 4, 2, '2023-06-19 02:58:00', '1', '1'),
(9, 3, 4, 2, '2023-06-19 03:04:23', '1', '13'),
(12, 5, 3, 2, '2023-07-02 22:34:46', '1', 'trabajo de administración'),
(13, 1, 2, 1, '2023-07-07 23:47:02', '1', 'a'),
(14, 15, 3, 2, '2023-07-08 00:04:22', '1', 'sin obsevercaiones de'),
(15, 1, 2, 1, '2023-07-08 00:06:45', '1', 'yjjt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emp_car`
--

CREATE TABLE `emp_car` (
  `id_emp_car` int(11) NOT NULL,
  `id_emp` int(11) DEFAULT NULL,
  `id_car` int(11) DEFAULT NULL,
  `descrip` varchar(300) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `emp_car`
--

INSERT INTO `emp_car` (`id_emp_car`, `id_emp`, `id_car`, `descrip`, `fecha`, `estado`) VALUES
(9, 8, 4, '1', '2023-06-19 02:58:00', '1'),
(10, 9, 2, '12', '2023-06-19 03:04:23', '1'),
(11, 10, 4, '14', '2023-06-19 03:07:16', '1'),
(12, 11, 1, '14', '2023-06-19 03:11:22', '1'),
(13, 8, 2, '22', '2023-06-19 03:13:20', '1'),
(14, 8, 4, '222', '2023-06-19 03:13:40', '1'),
(15, 12, 4, 'gestion de admin', '2023-07-02 22:34:46', '1'),
(16, 13, 1, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2023-07-07 23:47:02', '1'),
(17, 14, 6, 'descrip de alex', '2023-07-08 00:04:22', '1'),
(18, 14, 2, 'cargo 2', '2023-07-08 00:05:08', '1'),
(19, 15, 1, 'seleccion de material de..', '2023-07-08 00:06:45', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_salida`
--

CREATE TABLE `entrada_salida` (
  `id_ent_sal` int(11) NOT NULL,
  `hora_ent` time DEFAULT NULL,
  `hora_sal` time DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entrada_salida`
--

INSERT INTO `entrada_salida` (`id_ent_sal`, `hora_ent`, `hora_sal`, `fecha`, `estado`) VALUES
(1, '14:24:10', '14:24:10', '2023-06-19 14:24:10', '1'),
(2, '14:50:26', '14:50:26', '2023-06-19 14:50:26', '1'),
(3, '14:57:21', '14:57:21', '2023-06-19 14:57:21', '1'),
(4, '14:57:28', '14:57:28', '2023-06-19 14:57:28', '1'),
(5, '15:00:14', '15:00:14', '2023-06-19 15:00:14', '1'),
(6, '15:24:46', '15:24:46', '2023-06-19 15:24:46', '1'),
(7, '15:32:40', '15:32:40', '2023-06-19 15:32:40', '1'),
(8, '15:58:35', '15:58:35', '2023-06-19 15:58:35', '1'),
(9, '16:04:12', '16:04:12', '2023-06-19 16:04:12', '1'),
(10, '16:05:29', '16:05:29', '2023-06-19 16:05:29', '1'),
(11, '16:08:45', '16:08:45', '2023-06-19 16:08:45', '1'),
(12, '16:13:52', '16:13:52', '2023-06-19 16:13:52', '1'),
(13, '16:14:18', '16:14:18', '2023-06-19 16:14:18', '1'),
(14, '16:14:40', '16:14:40', '2023-06-19 16:14:40', '1'),
(15, '16:17:36', '16:17:36', '2023-06-19 16:17:36', '1'),
(16, '16:18:10', '16:18:10', '2023-06-19 16:18:10', '1'),
(17, '16:22:44', '16:22:44', '2023-06-19 16:22:44', '1'),
(18, '16:29:14', '16:29:14', '2023-06-19 16:29:14', '1'),
(19, '16:31:00', '16:31:00', '2023-06-19 16:31:00', '1'),
(20, '16:31:20', '16:31:20', '2023-06-19 16:31:20', '1'),
(21, '16:32:44', '16:32:44', '2023-06-19 16:32:44', '1'),
(22, '16:35:48', '16:35:48', '2023-06-19 16:35:48', '1'),
(23, '16:36:24', '16:36:24', '2023-06-19 16:36:24', '1'),
(24, '16:37:57', '16:37:57', '2023-06-19 16:37:57', '1'),
(25, '16:43:25', '16:43:25', '2023-06-19 16:43:25', '1'),
(26, '16:44:56', '16:44:56', '2023-06-19 16:44:56', '1'),
(27, '16:46:03', '16:46:03', '2023-06-19 16:46:03', '1'),
(28, '16:47:15', '16:47:15', '2023-06-19 16:47:15', '1'),
(29, '17:00:01', '17:00:01', '2023-06-19 17:00:01', '1'),
(30, '17:03:32', '17:03:32', '2023-06-19 17:03:32', '1'),
(31, '19:06:27', '19:06:27', '2023-06-19 19:06:27', '1'),
(32, '23:18:31', '23:18:31', '2023-07-01 23:18:31', '1'),
(33, '23:18:41', '23:18:41', '2023-07-01 23:18:41', '1'),
(34, '23:20:41', '00:00:00', '2023-07-01 23:20:41', '1'),
(35, '23:27:13', '00:00:00', '2023-07-01 23:27:13', '1'),
(36, '23:28:31', '00:00:00', '2023-07-01 23:28:31', '1'),
(37, '23:48:12', '00:00:00', '2023-07-01 23:48:12', '1'),
(38, '23:48:14', '00:00:00', '2023-07-01 23:48:14', '1'),
(39, '15:21:12', '00:00:00', '2023-07-02 15:21:12', '1'),
(40, '22:18:11', '00:00:00', '2023-07-02 22:18:11', '1'),
(41, '22:18:33', '00:00:00', '2023-07-02 22:18:33', '1'),
(42, '22:20:39', '00:00:00', '2023-07-02 22:20:39', '1'),
(43, '23:44:21', '00:00:00', '2023-07-04 23:44:21', '1'),
(44, '23:44:37', '00:00:00', '2023-07-04 23:44:37', '1'),
(45, '00:12:18', '00:00:00', '2023-07-08 00:12:18', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora_asig`
--

CREATE TABLE `hora_asig` (
  `id_hor_asi` int(11) NOT NULL,
  `hora_ent_m` time(6) DEFAULT NULL,
  `hora_sal_m` time(6) DEFAULT NULL,
  `hora_ent_t` time(6) NOT NULL,
  `hora_sal_t` time(6) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hora_asig`
--

INSERT INTO `hora_asig` (`id_hor_asi`, `hora_ent_m`, `hora_sal_m`, `hora_ent_t`, `hora_sal_t`, `fecha`, `estado`) VALUES
(1, '08:00:00.000000', '12:30:00.000000', '14:00:00.000000', '18:00:00.000000', '2023-06-15 23:04:17', '1'),
(2, '07:00:00.000000', '12:00:00.000000', '14:00:00.000000', '17:00:00.000000', '2023-06-15 23:12:23', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_ima` int(11) NOT NULL,
  `id_per` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `imagenn` varchar(300) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_ima`, `id_per`, `name`, `imagenn`, `fecha`) VALUES
(4, 5, 'juan jose', 'juan-jose.jpg', '2023-07-06 02:52:33'),
(5, 3, 'foto de arena', 'foto-de-arena.jpg', '2023-07-06 02:56:34'),
(6, 1, 'rai', 'rai.jpg', '2023-07-06 02:59:45'),
(7, 6, 'emiliano caster', 'emiliano-caster.jpg', '2023-07-06 03:07:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localizacion`
--

CREATE TABLE `localizacion` (
  `id_log` int(11) NOT NULL,
  `latitud` varchar(20) DEFAULT NULL,
  `longitud` varchar(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `id_lug` int(11) NOT NULL,
  `almacen` varchar(30) DEFAULT NULL,
  `descrip` varchar(100) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`id_lug`, `almacen`, `descrip`, `direccion`, `estado`) VALUES
(1, 'pirque', 'area de producción', 'carretera Cbba. -Oruro mk. 39', '1'),
(2, 'quillacollo 4', 'almacen de material', 'banco galindo km. 10', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar_ext`
--

CREATE TABLE `lugar_ext` (
  `id_lug_ext` int(11) NOT NULL,
  `lugar` varchar(15) DEFAULT NULL,
  `descrip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lugar_ext`
--

INSERT INTO `lugar_ext` (`id_lug_ext`, `lugar`, `descrip`) VALUES
(1, 'Rio tapacari', 'zona del puente parotani'),
(2, 'pirque', 'cerca el cinturon del frente de pirque');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `id_mat` int(11) NOT NULL,
  `id_prov` int(11) DEFAULT NULL,
  `id_com` int(11) DEFAULT NULL,
  `id_lug_ext` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id_mat`, `id_prov`, `id_com`, `id_lug_ext`, `nombre`, `lugar`, `estado`) VALUES
(6, 1, 4, 1, 'cerca las rieles', 'pirque', '1'),
(7, 2, 6, 1, 'material bruta', 'lugar1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pai` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pai`, `nombre`) VALUES
(1, 'Bolivia'),
(4, 'brasil'),
(5, 'chile'),
(6, 'peru');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_per` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `ape` varchar(25) DEFAULT NULL,
  `ci` varchar(11) DEFAULT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `correo` varchar(200) DEFAULT NULL,
  `fecha_nac` datetime DEFAULT NULL,
  `fecha_reg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_per`, `nombre`, `ape`, `ci`, `tel`, `correo`, `fecha_nac`, `fecha_reg`) VALUES
(1, 'rai', 'cuba chinchilla', '6549878', '75465845', 'rai@gmail.com', '2023-06-02 00:00:00', '2023-06-15 00:00:00'),
(3, 'arena', '1', '6508441', '67427954', '1@gmail.com', '2023-06-09 00:00:00', '2023-06-15 00:00:00'),
(5, 'juan jose', 'padilla cespedes', '46598', '67656', 'juan@gmail.com', '1987-09-02 00:00:00', '2023-07-02 00:00:00'),
(6, 'emiliano', 'caster lara', '987654', '1546', 'emiliano@gamil.com', '1990-01-05 00:00:00', '2023-07-05 00:00:00'),
(15, 'alex', 'secr alexander', '7897789', '654321', 'alex@gmail.com', '2023-07-21 00:00:00', '2023-07-08 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_pro` int(11) NOT NULL,
  `id_emp` int(11) DEFAULT NULL,
  `id_cos_pro` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descrip` varchar(100) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_pro`, `id_emp`, `id_cos_pro`, `cantidad`, `descrip`, `estado`, `fecha`) VALUES
(1, 1, 5, 300, 'descrip 300', '1', '2023-06-16 02:29:44'),
(3, 1, 2, 250, 'gravilla 250', '1', '2023-06-16 02:32:04'),
(5, 1, 4, 1000, 'para construccion pro', '1', '2023-06-19 01:47:52'),
(6, 1, 3, 250, 'para calles', '1', '2023-06-19 01:48:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_prov` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `organizacion` varchar(25) DEFAULT NULL,
  `nit` varchar(12) DEFAULT NULL,
  `descrip` varchar(100) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_prov`, `nombre`, `organizacion`, `nit`, `descrip`, `estado`) VALUES
(1, 'otb parotani', 'otb parotani', '798', 'presidente juan', '1'),
(2, 'sindicato minero1', 'org 11', '79871', 'presidente mario1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pro_lug`
--

CREATE TABLE `pro_lug` (
  `id_pro_lug` int(11) NOT NULL,
  `id_pro` int(11) DEFAULT NULL,
  `id_lug` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pro_lug`
--

INSERT INTO `pro_lug` (`id_pro_lug`, `id_pro`, `id_lug`) VALUES
(1, 5, 10),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 2),
(6, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `descrip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_act`
--

CREATE TABLE `tipo_act` (
  `id_tip_act` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descrip` varchar(100) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_act`
--

INSERT INTO `tipo_act` (`id_tip_act`, `nombre`, `descrip`, `estado`) VALUES
(1, 'mantenimiento de máquinas', 'seleccionador', '1'),
(2, 'transporte de material', 'acumular a almacenes', '1'),
(3, 'trasporte de material cli', 'ventas', '1'),
(4, 'producir material', 'seleccionar y lavar material', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_emp`
--

CREATE TABLE `tipo_emp` (
  `id_tip_emp` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_emp`
--

INSERT INTO `tipo_emp` (`id_tip_emp`, `nombre`, `estado`) VALUES
(2, 'trabajador temporal', '1'),
(3, 'con contrato', '1'),
(4, 'por dia', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usu`
--

CREATE TABLE `tipo_usu` (
  `id_tip_usu` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descrip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1@gmail.com', NULL, '$2y$10$.B3JHX1pRP17B7rwlZEFz.qsWm6dkztbCv867eL7yn1PHd8TgFPMi', NULL, '2023-06-15 07:13:20', '2023-06-15 07:13:20'),
(2, 'raimundo', 'raimundo', 'rain@gmail.com', NULL, '$2y$10$.oJSw182Fp1066Wo.8PlEO42vxdGcBNeLtOEYgQPVkiERiGye.XOO', NULL, '2023-06-16 06:41:52', '2023-06-16 06:41:52'),
(3, 'cuba rai', 'cuba', 'cuba@gmail.com', NULL, '$2y$10$IKgYgKvWJfwOyH8WIsJu/enCVtdohz12UQeNkd7c2xcPtN0xtXddW', NULL, '2023-06-19 23:31:10', '2023-06-19 23:31:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `id_tip_usu` int(11) DEFAULT NULL,
  `id_emp` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `usu` varchar(300) DEFAULT NULL,
  `pas` varchar(300) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_ven` int(11) NOT NULL,
  `id_usu` int(11) DEFAULT NULL,
  `nro` int(11) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_ven`, `id_usu`, `nro`, `estado`, `fecha`) VALUES
(1, 1, 1, '1', '2023-06-19 01:56:56'),
(2, 1, 2, '1', '2023-06-19 02:04:03'),
(3, 1, 3, '1', '2023-06-19 02:08:14'),
(4, 2, 4, '1', '2023-06-26 19:34:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_act`),
  ADD KEY `id_tip_act` (`id_tip_act`);

--
-- Indices de la tabla `act_emp`
--
ALTER TABLE `act_emp`
  ADD PRIMARY KEY (`id_act_emp`),
  ADD KEY `id_act` (`id_act`),
  ADD KEY `id_emp` (`id_emp`);

--
-- Indices de la tabla `admiss`
--
ALTER TABLE `admiss`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asi`),
  ADD KEY `id_emp` (`id_emp`),
  ADD KEY `id_ent_sal` (`id_ent_sal`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_car`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciu`),
  ADD KEY `id_dep` (`id_dep`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_com`),
  ADD KEY `id_usu` (`id_usu`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_con`);

--
-- Indices de la tabla `costo_pro`
--
ALTER TABLE `costo_pro`
  ADD PRIMARY KEY (`id_cos_pro`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indices de la tabla `depertamento`
--
ALTER TABLE `depertamento`
  ADD PRIMARY KEY (`id_dep`),
  ADD KEY `id_pai` (`id_pai`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_det_ven`),
  ADD KEY `id_pro` (`id_pro`),
  ADD KEY `id_ven` (`id_ven`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_dir`),
  ADD KEY `id_ciu` (`id_ciu`),
  ADD KEY `id_per` (`id_per`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_emp`),
  ADD KEY `id_per` (`id_per`),
  ADD KEY `id_tip_emp` (`id_tip_emp`),
  ADD KEY `id_hor_asi` (`id_hor_asi`);

--
-- Indices de la tabla `emp_car`
--
ALTER TABLE `emp_car`
  ADD PRIMARY KEY (`id_emp_car`),
  ADD KEY `id_car` (`id_car`),
  ADD KEY `id_emp` (`id_emp`);

--
-- Indices de la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  ADD PRIMARY KEY (`id_ent_sal`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `hora_asig`
--
ALTER TABLE `hora_asig`
  ADD PRIMARY KEY (`id_hor_asi`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_ima`),
  ADD KEY `id_per` (`id_per`);

--
-- Indices de la tabla `localizacion`
--
ALTER TABLE `localizacion`
  ADD PRIMARY KEY (`id_log`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id_lug`);

--
-- Indices de la tabla `lugar_ext`
--
ALTER TABLE `lugar_ext`
  ADD PRIMARY KEY (`id_lug_ext`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_mat`),
  ADD KEY `id_prov` (`id_prov`),
  ADD KEY `id_com` (`id_com`),
  ADD KEY `id_lug_ext` (`id_lug_ext`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pai`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_per`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_emp` (`id_emp`),
  ADD KEY `id_cos_pro` (`id_cos_pro`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indices de la tabla `pro_lug`
--
ALTER TABLE `pro_lug`
  ADD PRIMARY KEY (`id_pro_lug`),
  ADD KEY `id_pro` (`id_pro`),
  ADD KEY `id_lug` (`id_lug`);

--
-- Indices de la tabla `tipo_act`
--
ALTER TABLE `tipo_act`
  ADD PRIMARY KEY (`id_tip_act`);

--
-- Indices de la tabla `tipo_emp`
--
ALTER TABLE `tipo_emp`
  ADD PRIMARY KEY (`id_tip_emp`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_ven`),
  ADD KEY `id_usu` (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `act_emp`
--
ALTER TABLE `act_emp`
  MODIFY `id_act_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `costo_pro`
--
ALTER TABLE `costo_pro`
  MODIFY `id_cos_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `depertamento`
--
ALTER TABLE `depertamento`
  MODIFY `id_dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_det_ven` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `emp_car`
--
ALTER TABLE `emp_car`
  MODIFY `id_emp_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  MODIFY `id_ent_sal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hora_asig`
--
ALTER TABLE `hora_asig`
  MODIFY `id_hor_asi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_ima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id_lug` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lugar_ext`
--
ALTER TABLE `lugar_ext`
  MODIFY `id_lug_ext` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id_mat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pro_lug`
--
ALTER TABLE `pro_lug`
  MODIFY `id_pro_lug` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_act`
--
ALTER TABLE `tipo_act`
  MODIFY `id_tip_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_emp`
--
ALTER TABLE `tipo_emp`
  MODIFY `id_tip_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_ven` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_per`) REFERENCES `persona` (`id_per`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
