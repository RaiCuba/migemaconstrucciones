-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2023 a las 18:45:53
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
(13, 2, 'acopiar 200 m3 de gravilla', '2023-03-02', 'descr', 'lugar', '1'),
(18, 11, 'compra cementeo', '2023-08-25', 'eargher', 'erher', '2'),
(19, 12, 'control de operadorios', '2023-06-05', 'seguimiento', 'misicuni', '1'),
(20, 12, 'inspeccionar proyecto riego viloma', '2023-09-13', 'avance de obra 1', 'viloma', '1');

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
(24, 19, 24, '2023-08-22 00:00:00', '2023-08-22 00:00:00', '2023-08-21 17:38:10', '1'),
(25, 18, 25, '2023-08-22 00:00:00', '2023-08-22 00:00:00', '2023-08-21 21:37:02', '1'),
(26, 20, 17, '2023-09-06 00:00:00', '2023-09-07 00:00:00', '2023-09-06 16:45:08', '1'),
(27, 19, 25, '2023-10-13 00:00:00', '2023-10-14 00:00:00', '2023-10-12 21:58:26', '1');

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
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asi`, `id_emp`, `id_ent_sal`, `latitud`, `longitud`, `fecha`) VALUES
(77, 9, 95, '-17.5614044', '-66.3439587', '2023-08-21 17:45:06'),
(78, 24, 96, '-17.5613697', '-66.343985', '2023-08-21 17:45:19'),
(79, 25, 97, '-17.5613697', '-66.343985', '2023-08-21 21:39:18'),
(80, 9, 98, '-17.5612641', '-66.343778', '2023-09-06 01:32:00'),
(81, 9, 99, '-17.5612641', '-66.343778', '2023-09-06 02:39:48'),
(82, 9, 100, '-17.5612641', '-66.343778', '2023-09-06 02:41:27'),
(83, 9, 101, '-17.561383', '-66.3439635', '2023-10-12 22:05:51'),
(84, 9, 102, '-17.5613636', '-66.3439715', '2023-10-12 22:17:39'),
(85, 9, 103, '-17.5613565', '-66.3439717', '2023-10-12 22:18:06'),
(86, 9, 104, '-17.5612601', '-66.3437994', '2023-10-24 15:53:48');

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
(8, 'almacen', 'control de herramientas');

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
(5, 'Graba', 'seleccion de material de graba', '1'),
(6, 'limo', 'para cultivo agropecuaria', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciu` int(11) NOT NULL,
  `id_dep` int(11) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(9, 2, 'arena lavada', 95, '2023-08-01 21:55:24', '1'),
(11, 1, 'soladura', 32, '2023-08-01 21:56:07', '1'),
(12, 1, 'gravilla', 80, '2023-08-01 21:56:46', '1'),
(13, 1, 'grava gruesa', 60, '2023-08-01 21:57:02', '1'),
(15, 5, 'gravilla para concreto', 98, '2023-08-17 15:45:06', '1'),
(16, 6, 'limo fina', 30, '2023-08-21 18:37:36', '1');

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
(21, 4, 'brasil 2');

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
(34, 14, 35, 5, '2023-08-17 18:24:24', 95, 'pro des', 475),
(35, 14, 36, 10, '2023-08-17 18:24:44', 95, 'pro des', 950),
(36, 18, 37, 12, '2023-08-17 18:24:59', 98, 'sin', 1176),
(37, 18, 38, 8, '2023-08-17 18:25:10', 98, 'sin', 784),
(38, 15, 39, 20, '2023-08-17 18:25:30', 80, 'gra pirque', 1600),
(39, 18, 40, 8, '2023-08-17 18:32:11', 98, 'sin', 784),
(40, 14, 41, 20, '2023-08-17 19:21:39', 95, 'pro des', 1900),
(41, 17, 42, 24, '2023-08-17 19:26:13', 40, 'en almacen de pirque para seleccionar', 960),
(42, 17, 43, 6, '2023-08-21 06:43:27', 32, 'en almacen de pirque para seleccionar', 192),
(43, 15, 44, 20, '2023-08-21 17:31:26', 80, 'gra pirque', 1600);

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
(9, 3, 5, 2, '2023-06-19 03:04:23', '1', '13'),
(12, 5, 3, 2, '2023-07-02 22:34:46', '0', 'trabajo de administración'),
(17, 18, 5, 2, '2023-07-19 23:23:04', '1', 'obser reinaldo'),
(19, 20, 5, 4, '2023-07-25 08:46:36', '0', 'contrato por un mes'),
(20, 21, 5, 4, '2023-08-17 21:27:25', '0', 'obser emple'),
(23, 20, 25, 4, '2023-08-21 04:13:43', '1', 'observa emple'),
(24, 21, 5, 1, '2023-08-21 17:22:52', '1', 'recibio con inventario nro 2'),
(25, 24, 5, 2, '2023-08-21 21:31:47', '1', 'sin observacion');

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
(23, 19, 1, 'chofer de volqueta mediana', '2023-07-25 08:46:36', '1'),
(26, 22, 1, 'cargo descrip', '2023-08-20 13:04:20', '1'),
(27, 23, 2, 'descr cargo empl', '2023-08-21 04:13:43', '1'),
(28, 24, 8, 'gestion de almacenes', '2023-08-21 17:22:52', '1'),
(29, 25, 8, 'temporal a prueva', '2023-08-21 21:31:47', '1');

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
(95, '17:45:06', '00:00:00', '2023-08-21 17:45:06', '1'),
(96, '17:45:19', '00:00:00', '2023-08-21 17:45:19', '1'),
(97, '21:39:18', '00:00:00', '2023-08-21 21:39:18', '1'),
(98, '10:17:48', '00:00:00', '2023-09-14 10:17:48', '1'),
(99, '02:39:48', '00:00:00', '2023-09-06 02:39:48', '1'),
(100, '02:41:27', '00:00:00', '2023-09-06 02:41:27', '1'),
(101, '22:05:51', '00:00:00', '2023-10-12 22:05:51', '1'),
(102, '22:17:39', '00:00:00', '2023-10-12 22:17:39', '1'),
(103, '22:18:06', '00:00:00', '2023-10-12 22:18:06', '1'),
(104, '15:53:48', '00:00:00', '2023-10-24 15:53:48', '1');

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
(2, '07:00:00.000000', '12:00:00.000000', '14:00:00.000000', '17:00:00.000000', '2023-06-15 23:12:23', '1'),
(4, '06:30:00.000000', '12:30:00.000000', '14:30:00.000000', '16:30:00.000000', '2023-07-09 00:58:07', '1'),
(5, '09:00:00.000000', '12:30:00.000000', '14:00:00.000000', '17:00:00.000000', '2023-08-18 16:19:49', '1'),
(6, '07:30:00.000000', '11:30:00.000000', '14:30:00.000000', '18:30:00.000000', '2023-08-18 16:20:31', '1');

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
(1, 'quillacollo', 'lado del edificio blanco', 'km. 9 blaco dalindo', '1'),
(2, 'zona norte', 'puerta negra de tipo garaje', 'ave. circunvalacion', '1'),
(3, 'sacaba', 'servicio de caminos', 'km 2 carretera a sacaba', '1'),
(9, 'Pirque', 'al norte de rio', 'nro 12', '1');

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
(7, 3, 6, 1, 'material bruta', 'lugar1', '1');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_09_134426_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17);

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
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'home', 'web', '2023-07-19 23:31:20', '2023-07-19 23:31:20');

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
(3, 'raimundo', 'cuba chinchilla', '65084333', '674333', '13@gmail.com', '2023-06-09 00:00:00', '2023-06-15 00:00:00'),
(5, 'juan jose', 'padilla cespedes', '46598', '67656', 'juan@gmail.com', '1987-09-02 00:00:00', '2023-07-02 00:00:00'),
(6, 'emiliano', 'caster lara', '987654', '1546', 'emiliano@gamil.com', '1990-01-05 00:00:00', '2023-07-05 00:00:00'),
(15, 'alex', 'secr alexander', '7897789', '654321', 'alex@gmail.com', '2023-07-21 00:00:00', '2023-07-08 00:00:00'),
(18, 'reinaldo', 'ortuño meneses', '6846546', '67427979', 'rei@gmail.com', '1990-03-02 00:00:00', '2023-07-19 00:00:00'),
(19, 'ademar', 'poza', '654981', '49879', 'ademar@gmail.com', '1990-03-02 00:00:00', '2023-07-24 00:00:00'),
(20, 'leny', 'ortis', '654321', '4654', 'leny@gmail.com', '1990-06-05 00:00:00', '2023-07-25 00:00:00'),
(21, 'ana maria', 'fonseca canoso', '65052', '754711', 'ana@gmail.com', '1990-03-02 00:00:00', '2023-08-17 00:00:00'),
(22, 'estevan', 'illanes mendes', '65081112', '672120', 'estevan@gmail.com', '2008-05-06 00:00:00', '2023-08-21 00:00:00'),
(23, 'julian', 'condori fuentes', '650841', '6745', 'julian@gmail.com', '1987-09-05 00:00:00', '2023-08-21 00:00:00'),
(24, 'denis', 'caballero ardaya', '98654', '6548479', 'denis@gmail.com', '1990-08-02 00:00:00', '2023-08-21 00:00:00');

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
(13, 9, 9, 500, 'descrip pro', '1', '2023-08-01 21:58:16'),
(14, 9, 9, 250, 'pro des', '1', '2023-08-01 21:58:49'),
(15, 9, 12, 10, 'gra pirque', '1', '2023-08-01 22:19:07'),
(16, 19, 15, 50, 'almacen de sacaba', '1', '2023-08-17 15:47:57'),
(17, 19, 11, 170, 'en almacen de pirque para seleccionar', '1', '2023-08-17 15:48:37'),
(18, 19, 15, 12, 'sin', '1', '2023-08-17 15:49:28'),
(19, 9, 13, 30, 'sin sin', '1', '2023-08-17 19:44:14'),
(20, 9, 16, 300, 'restos de la seleccion de material', '1', '2023-08-21 18:38:46'),
(21, 9, 15, 150, 'añadir', '1', '2023-08-21 18:39:39'),
(22, 9, 12, 230, 'tranportes', '1', '2023-08-21 18:40:29');

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
(3, 'material bruto', 'otb malla', '987654', 'organizacion de', '1');

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
(1, 5, 9),
(2, 7, 1),
(3, 3, 3),
(4, 7, 3),
(5, 5, 2),
(6, 6, 1),
(7, 7, 1),
(8, 8, 9),
(9, 9, 3),
(10, 10, 2),
(11, 11, 2),
(12, 12, 3),
(13, 13, 9),
(14, 14, 1),
(15, 15, 9),
(16, 16, 3),
(17, 17, 9),
(18, 18, 2),
(19, 19, 9),
(20, 20, 9),
(21, 21, 9),
(22, 22, 1);

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
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-07-19 23:31:20', '2023-07-19 23:31:20'),
(2, 'empleado', 'web', '2023-07-19 23:31:20', '2023-07-19 23:31:20'),
(3, 'gerente', 'web', '2023-07-19 23:31:20', '2023-07-19 23:31:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, 'producir material', 'seleccionar y lavar material', '1'),
(10, 'comprar combustible', 'mantener a las maquinas', '1'),
(11, 'compras', 'compra de cemento', '1'),
(12, 'comisiones', 'verificar obras', '1');

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
(3, 'con contrato', '1'),
(5, 'temporal', '1'),
(25, 'pasantias', '1');

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
  `id_emp` int(11) NOT NULL,
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

INSERT INTO `users` (`id`, `id_emp`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 9, 'raimundo', 'raimundo', 'rain@gmail.com', NULL, '$2y$10$.oJSw182Fp1066Wo.8PlEO42vxdGcBNeLtOEYgQPVkiERiGye.XOO', NULL, '2023-06-16 10:41:52', '2023-06-16 10:41:52'),
(11, 17, 'reinaldo', 'reinaldo', 'rei@gmail.com', NULL, '$2y$10$xJI6Py8OTYIsJthnOkiNb.Wf053cFg2ZA9ETkQQZjG.mhmumz8RGO', NULL, '2023-08-17 17:58:28', '2023-08-17 17:58:28'),
(15, 23, 'leny ortis', 'leny', 'leny@gmail.com', NULL, '$2y$10$LA8ikHv7trlsqDh971Klge8BoyDebZU8nHXEZT//deKILeNXYgj3y', NULL, '2023-08-21 08:15:50', '2023-08-21 08:15:50'),
(16, 24, 'ana maria fonseca canoso', 'ana', 'ana@gmail.com', NULL, '$2y$10$rLoKZW8zMhEam.Tsz4tp/uyMq2EMKxHBvZdEuCrwTTwyWNa5tP0CW', NULL, '2023-08-21 21:25:08', '2023-08-21 21:25:08'),
(17, 25, 'denis caballero ardaya', 'denis', 'denis@gmail.com', NULL, '$2y$10$wy7hbWXl5Wfyd/15xckEVuJGBYMEzGLBW2hZyabul9u8le42VsxtW', NULL, '2023-08-22 01:33:07', '2023-08-22 01:33:07');

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
(23, 2, 1, '1', '2023-08-01 23:38:16'),
(24, 2, 2, '1', '2023-08-01 23:41:42'),
(25, 2, 3, '1', '2023-08-02 01:03:55'),
(26, 2, 4, '1', '2023-08-02 01:07:05'),
(27, 2, 5, '1', '2023-08-02 01:09:39'),
(28, 2, 6, '1', '2023-08-02 01:14:09'),
(29, 2, 7, '1', '2023-08-02 01:16:52'),
(30, 2, 8, '1', '2023-08-02 12:35:35'),
(31, 13, 9, '1', '2023-08-17 15:50:30'),
(32, 2, 10, '1', '2023-08-17 18:09:24'),
(33, 2, 11, '1', '2023-08-17 18:11:27'),
(34, 2, 12, '1', '2023-08-17 18:13:50'),
(35, 2, 13, '1', '2023-08-17 18:24:24'),
(36, 2, 14, '1', '2023-08-17 18:24:44'),
(37, 2, 15, '1', '2023-08-17 18:24:59'),
(38, 2, 16, '1', '2023-08-17 18:25:10'),
(39, 2, 17, '1', '2023-08-17 18:25:30'),
(40, 2, 18, '1', '2023-08-17 18:32:11'),
(41, 2, 19, '1', '2023-08-17 19:21:39'),
(42, 2, 20, '1', '2023-08-17 19:26:13'),
(43, 15, 21, '1', '2023-08-21 06:43:27'),
(44, 16, 22, '1', '2023-08-21 17:31:26');

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
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

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
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `fk_id_empt` (`id_emp`);

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
  MODIFY `id_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `act_emp`
--
ALTER TABLE `act_emp`
  MODIFY `id_act_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id_cos_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `depertamento`
--
ALTER TABLE `depertamento`
  MODIFY `id_dep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_det_ven` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `emp_car`
--
ALTER TABLE `emp_car`
  MODIFY `id_emp_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `entrada_salida`
--
ALTER TABLE `entrada_salida`
  MODIFY `id_ent_sal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hora_asig`
--
ALTER TABLE `hora_asig`
  MODIFY `id_hor_asi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_ima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id_lug` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `lugar_ext`
--
ALTER TABLE `lugar_ext`
  MODIFY `id_lug_ext` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `id_mat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pro_lug`
--
ALTER TABLE `pro_lug`
  MODIFY `id_pro_lug` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_act`
--
ALTER TABLE `tipo_act`
  MODIFY `id_tip_act` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipo_emp`
--
ALTER TABLE `tipo_emp`
  MODIFY `id_tip_emp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_ven` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`id_tip_act`) REFERENCES `tipo_act` (`id_tip_act`);

--
-- Filtros para la tabla `depertamento`
--
ALTER TABLE `depertamento`
  ADD CONSTRAINT `depertamento_ibfk_1` FOREIGN KEY (`id_pai`) REFERENCES `pais` (`id_pai`);

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`id_per`) REFERENCES `persona` (`id_per`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_id_empt` FOREIGN KEY (`id_emp`) REFERENCES `empleado` (`id_emp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
