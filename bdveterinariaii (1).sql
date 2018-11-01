-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2018 a las 20:15:45
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdveterinariaii`
--
CREATE DATABASE IF NOT EXISTS `bdveterinariaii` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdveterinariaii`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `codproductos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `codproductos` ()  BEGIN
declare cod char(10);
declare n int;
declare vusu char(5);

				    if(select count(*)from producto)=0 then
               set n=0;
            else
                set n=(select max(right(id_producto,2))from producto);
            end if;
             set cod=concat('PR',right(concat('000000',n+1),7));


          select cod;
END$$

DROP PROCEDURE IF EXISTS `sp_modiproductos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_modiproductos` (`id` CHAR(5), `des` VARCHAR(200), `pre` DOUBLE(10,2), `sto` INT, `acti` INT, `ob` VARCHAR(250))  BEGIN
UPDATE producto set descripcion=des,precio=pre,stock=sto,activo=acti,observacion=ob where id_producto=id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

DROP TABLE IF EXISTS `cita`;
CREATE TABLE `cita` (
  `id_cita` bigint(20) NOT NULL,
  `id_cliente` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `nota` varchar(250) DEFAULT NULL,
  `asunto` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id_cliente` bigint(20) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `apellidos` varchar(250) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `telf1` varchar(15) DEFAULT NULL,
  `telf2` varchar(15) DEFAULT NULL,
  `ruc` char(20) DEFAULT NULL,
  `dni` char(8) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  `f_creacion` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `paginaweb` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellidos`, `direccion`, `telf1`, `telf2`, `ruc`, `dni`, `email`, `activo`, `f_creacion`, `paginaweb`) VALUES
(1, 'martin', 'martinez', 'catacaos', '12435436', NULL, NULL, '70577198', 'marjesmm@hotmail.com', 1, '2018-10-14 22:05:07', 'www.marjes.com'),
(2, 'haydee', 'chiroque', 'piura', '12435436', NULL, NULL, NULL, NULL, 1, '2018-10-10 05:00:00', 'null'),
(3, 'varios', '', NULL, NULL, NULL, NULL, '000', NULL, 1, '2018-10-14 22:23:30', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

DROP TABLE IF EXISTS `currencies`;
CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `precision` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thousand_separator` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `decimal_separator` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `precision`, `thousand_separator`, `decimal_separator`, `code`) VALUES
(1, 'US Dollar', '$', '2', ',', '.', 'USD'),
(2, 'Libra Esterlina', '&pound;', '2', ',', '.', 'GBP'),
(3, 'Euro', 'ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬', '2', '.', ',', 'EUR'),
(4, 'South African Rand', 'R', '2', '.', ',', 'ZAR'),
(5, 'Danish Krone', 'kr ', '2', '.', ',', 'DKK'),
(6, 'Soles', 'S/.', '2', ',', '.', 'SOL'),
(7, 'Swedish Krona', 'kr ', '2', '.', ',', 'SEK'),
(8, 'Kenyan Shilling', 'KSh ', '2', ',', '.', 'KES'),
(9, 'Canadian Dollar', 'C$', '2', ',', '.', 'CAD'),
(10, 'Philippine Peso', 'P ', '2', ',', '.', 'PHP'),
(11, 'Indian Rupee', 'Rs. ', '2', ',', '.', 'INR'),
(12, 'Australian Dollar', '$', '2', ',', '.', 'AUD'),
(13, 'Singapore Dollar', 'SGD ', '2', ',', '.', 'SGD'),
(14, 'Norske Kroner', 'kr ', '2', '.', ',', 'NOK'),
(15, 'New Zealand Dollar', '$', '2', ',', '.', 'NZD'),
(16, 'Vietnamese Dong', 'VND ', '0', '.', ',', 'VND'),
(17, 'Swiss Franc', 'CHF ', '2', '''', '.', 'CHF'),
(18, 'Quetzal Guatemalteco', 'Q', '2', ',', '.', 'GTQ'),
(19, 'Malaysian Ringgit', 'RM', '2', ',', '.', 'MYR'),
(20, 'Real Brasile&ntilde;o', 'R$', '2', '.', ',', 'BRL'),
(21, 'Thai Baht', 'THB ', '2', ',', '.', 'THB'),
(22, 'Nigerian Naira', 'NGN ', '2', ',', '.', 'NGN'),
(23, 'Peso Argentino', '$', '2', '.', ',', 'ARS'),
(24, 'Bangladeshi Taka', 'Tk', '2', ',', '.', 'BDT'),
(25, 'United Arab Emirates Dirham', 'DH ', '2', ',', '.', 'AED'),
(26, 'Hong Kong Dollar', '$', '2', ',', '.', 'HKD'),
(27, 'Indonesian Rupiah', 'Rp', '2', ',', '.', 'IDR'),
(28, 'Peso Mexicano', '$', '2', ',', '.', 'MXN'),
(29, 'Egyptian Pound', '&pound;', '2', ',', '.', 'EGP'),
(30, 'Peso Colombiano', '$', '2', '.', ',', 'COP'),
(31, 'West African Franc', 'CFA ', '2', ',', '.', 'XOF'),
(32, 'Chinese Renminbi', 'RMB ', '2', ',', '.', 'CNY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

DROP TABLE IF EXISTS `detalle`;
CREATE TABLE `detalle` (
  `id_detalle` bigint(20) NOT NULL,
  `id_producto` bigint(20) DEFAULT NULL,
  `precio` double(20,3) DEFAULT NULL,
  `cantidad` double(20,3) DEFAULT NULL,
  `id_documento` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`id_detalle`, `id_producto`, `precio`, `cantidad`, `id_documento`) VALUES
(59, 23, 70.000, 22.000, 29),
(60, 34, 45.000, 3.000, 30),
(61, 23, 70.000, 2.000, 31),
(62, 24, 45.000, 13.000, 31),
(63, 25, 3.000, 4.000, 32),
(64, 23, 70.000, 1.000, 33),
(65, 33, 70.000, 3.000, 33),
(66, 23, 70.000, 4.000, 34),
(67, 23, 70.000, 4.000, 35),
(68, 23, 70.000, 5.000, 36),
(69, 30, 1.500, 3.000, 36),
(70, 26, 5.000, 4.000, 37),
(71, 30, 1.500, 5.000, 38),
(72, 23, 70.000, 4.000, 39),
(73, 25, 3.000, 2.000, 39),
(74, 26, 5.000, 2.000, 39),
(75, 30, 1.500, 2.000, 39),
(76, 32, 12.000, 2.000, 39),
(77, 23, 70.000, 4.000, 40),
(78, 25, 3.000, 3.000, 40),
(79, 30, 1.500, 10.000, 40),
(80, 23, 70.000, 10.000, 41),
(81, 30, 1.500, 6.000, 41),
(82, 33, 70.000, 6.000, 41),
(83, 25, 3.000, 3.000, 41),
(84, 23, 70.000, 5.000, 42),
(85, 25, 3.000, 7.000, 42),
(86, 26, 5.000, 1.000, 42),
(87, 32, 12.000, 3.000, 42),
(88, 33, 70.000, 1.000, 42),
(89, 35, 87.000, 2.000, 42),
(90, 36, 78.000, 1.000, 42),
(91, 23, 70.000, 1.000, 43),
(92, 25, 3.000, 1.000, 43),
(93, 26, 5.000, 1.000, 43),
(94, 23, 70.000, 2.000, 44),
(95, 25, 3.000, 2.000, 44),
(96, 30, 1.500, 1.000, 44),
(97, 23, 70.000, 2.000, 45),
(98, 25, 3.000, 5.000, 45),
(99, 30, 1.500, 1.000, 45),
(100, 33, 70.000, 1.000, 45),
(101, 36, 78.000, 1.000, 45),
(102, 35, 87.000, 1.000, 45),
(103, 37, 56.000, 1.000, 45),
(104, 23, 70.000, 1.000, 46),
(105, 25, 3.000, 1.000, 46),
(106, 26, 5.000, 1.000, 46),
(107, 32, 12.000, 1.000, 46),
(108, 35, 87.000, 1.000, 46),
(109, 23, 70.000, 1.000, 47),
(110, 30, 1.500, 3.000, 47),
(111, 23, 70.000, 1.000, 48),
(112, 23, 70.000, 1.000, 49),
(113, 30, 1.500, 1.000, 49),
(114, 35, 87.000, 1.000, 49),
(115, 23, 70.000, 1.000, 50),
(116, 30, 1.500, 3.000, 50),
(117, 23, 70.000, 1.000, 51),
(118, 25, 3.000, 1.000, 51),
(119, 30, 1.500, 1.000, 51),
(120, 25, 3.000, 1.000, 52),
(121, 30, 1.500, 1.000, 52),
(122, 32, 12.000, 1.000, 52),
(123, 33, 70.000, 1.000, 52),
(124, 25, 3.000, 1.000, 53),
(125, 30, 1.500, 1.000, 53),
(126, 25, 3.000, 1.000, 54),
(127, 30, 1.500, 1.000, 54),
(128, 35, 87.000, 1.000, 54),
(129, 36, 78.000, 1.000, 54),
(130, 30, 1.500, 1.000, 55),
(131, 25, 3.000, 1.000, 55),
(132, 30, 1.500, 1.000, 55),
(133, 32, 12.000, 1.000, 55),
(134, 33, 70.000, 1.000, 55),
(135, 35, 87.000, 1.000, 55),
(136, 36, 78.000, 1.000, 55),
(137, 36, 78.000, 1.000, 55),
(138, 37, 56.000, 1.000, 55),
(139, 25, 3.000, 1.000, 56),
(140, 30, 1.500, 1.000, 56),
(141, 25, 3.000, 1.000, 57),
(142, 32, 12.000, 1.000, 57),
(143, 25, 3.000, 1.000, 58),
(144, 30, 1.500, 1.000, 58),
(145, 30, 1.500, 1.000, 59),
(146, 25, 3.000, 1.000, 60),
(147, 30, 1.500, 1.000, 60),
(148, 33, 70.000, 1.000, 60),
(149, 25, 3.000, 1.000, 61),
(150, 25, 3.000, 1.000, 62),
(151, 23, 70.000, 1.000, 63),
(152, 24, 45.000, 1.000, 63),
(153, 23, 70.000, 1.000, 64),
(154, 24, 45.000, 1.000, 64),
(155, 23, 70.000, 2.000, 65),
(156, 24, 45.000, 1.000, 65),
(157, 23, 70.000, 3.000, 66),
(158, 24, 45.000, 2.000, 66),
(159, 23, 70.000, 3.000, 67),
(160, 24, 45.000, 1.000, 67),
(161, 23, 70.000, 1.000, 68),
(162, 24, 45.000, 1.000, 68),
(163, 25, 3.000, 1.000, 68),
(164, 30, 1.500, 1.000, 68),
(165, 32, 12.000, 1.000, 68),
(166, 24, 45.000, 1.000, 69),
(167, 23, 70.000, 1.000, 70),
(168, 24, 45.000, 1.000, 70),
(169, 25, 3.000, 1.000, 70),
(170, 30, 1.500, 1.000, 70),
(171, 23, 70.000, 3.000, 71),
(172, 24, 45.000, 3.000, 71),
(173, 30, 1.500, 1.000, 71),
(174, 23, 70.000, 1.000, 72),
(175, 24, 45.000, 1.000, 72),
(176, 33, 70.000, 1.000, 72),
(177, 23, 70.000, 1.000, 73),
(178, 24, 45.000, 1.000, 73),
(179, 23, 70.000, 1.000, 74),
(180, 24, 45.000, 1.000, 74),
(181, 23, 70.000, 1.000, 75),
(182, 24, 45.000, 1.000, 75),
(183, 30, 1.500, 1.000, 75),
(184, 23, 70.000, 1.000, 76),
(185, 24, 45.000, 1.000, 76),
(186, 24, 45.000, 1.000, 77),
(187, 30, 1.500, 1.000, 77),
(188, 24, 45.000, 1.000, 78),
(189, 25, 3.000, 1.000, 78),
(190, 24, 45.000, 1.000, 79),
(191, 25, 3.000, 1.000, 79),
(192, 30, 1.500, 1.000, 79),
(193, 25, 3.000, 1.000, 80),
(194, 30, 1.500, 1.000, 80),
(195, 35, 87.000, 1.000, 80),
(196, 25, 3.000, 1.000, 81),
(197, 30, 1.500, 1.000, 81),
(198, 35, 87.000, 1.000, 81),
(199, 25, 3.000, 1.000, 82),
(200, 30, 1.500, 1.000, 82),
(201, 25, 3.000, 1.000, 83),
(202, 32, 12.000, 1.000, 83),
(203, 33, 70.000, 1.000, 83),
(204, 36, 78.000, 1.000, 83),
(205, 37, 56.000, 1.000, 83),
(206, 25, 3.000, 1.000, 84),
(207, 30, 1.500, 5.000, 84),
(208, 25, 3.000, 1.000, 85),
(209, 30, 1.500, 1.000, 85),
(210, 32, 12.000, 1.000, 85),
(211, 30, 1.500, 1.000, 86),
(212, 33, 70.000, 3.000, 86),
(213, 23, 70.000, 2.000, 87),
(214, 30, 1.500, 1.000, 87),
(215, 23, 70.000, 5.000, 88),
(216, 33, 70.000, 2.000, 88);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

DROP TABLE IF EXISTS `documento`;
CREATE TABLE `documento` (
  `id_documento` bigint(20) NOT NULL,
  `comprobante` varchar(50) DEFAULT NULL,
  `tipopago` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `total` double(20,3) DEFAULT NULL,
  `acuenta` double(20,3) DEFAULT NULL,
  `id_movimiento` bigint(20) DEFAULT NULL,
  `porcentajeigv` int(11) DEFAULT NULL,
  `id_cliente` bigint(20) DEFAULT NULL,
  `ruc` varchar(15) DEFAULT NULL,
  `razonsocial` varchar(200) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `id_usuario` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_documento`, `comprobante`, `tipopago`, `fecha`, `total`, `acuenta`, `id_movimiento`, `porcentajeigv`, `id_cliente`, `ruc`, `razonsocial`, `direccion`, `id_usuario`) VALUES
(29, 'Boleta', 'Contado', '2018-10-14', 1540.000, NULL, 1, 235, 1, NULL, NULL, NULL, 1),
(30, 'Boleta', 'Contado', '2018-10-14', 135.000, NULL, 1, 21, 1, NULL, NULL, NULL, 1),
(31, 'Boleta', 'Contado', '2018-10-14', 725.000, NULL, 1, 111, 2, NULL, NULL, NULL, 1),
(32, 'Boleta', 'Contado', '2018-10-14', 12.000, NULL, 1, 2, 1, NULL, NULL, NULL, 1),
(33, 'Boleta', 'Contado', '2018-10-14', 280.000, NULL, 1, 43, 1, NULL, NULL, NULL, 1),
(34, 'Boleta', 'Contado', '2018-10-14', 280.000, NULL, 1, 43, 2, NULL, NULL, NULL, 1),
(35, 'Boleta', 'Contado', '2018-10-14', 280.000, NULL, 1, 43, 1, NULL, NULL, NULL, 1),
(36, 'Boleta', 'Contado', '2018-10-14', 354.500, NULL, 1, 55, 2, NULL, NULL, NULL, 1),
(37, 'Boleta', 'Contado', '2018-10-14', 20.000, NULL, 1, 3, 1, NULL, NULL, NULL, 1),
(38, 'Boleta', 'Contado', '2018-10-14', 7.500, NULL, 1, 2, 2, NULL, NULL, NULL, 1),
(39, 'Boleta', 'Contado', '2018-10-14', 323.000, NULL, 1, 49, 1, NULL, NULL, NULL, 1),
(40, 'Boleta', 'Contado', '2018-10-14', 304.000, NULL, 1, 46, 1, NULL, NULL, NULL, 1),
(41, 'Boleta', 'Contado', '2018-10-14', 1138.000, NULL, 1, 174, 1, NULL, NULL, NULL, 1),
(42, 'Boleta', 'Contado', '2018-10-14', 734.000, NULL, 1, 112, 1, NULL, NULL, NULL, 1),
(43, 'Boleta', 'Contado', '2018-10-14', 78.000, NULL, 1, 12, 2, NULL, NULL, NULL, 1),
(44, 'Boleta', 'Contado', '2018-10-14', 147.500, NULL, 1, 23, 1, NULL, NULL, NULL, 1),
(45, 'Boleta', 'Contado', '2018-10-14', 447.500, NULL, 1, 68, 1, NULL, NULL, NULL, 1),
(46, 'Boleta', 'Contado', '2018-10-14', 177.000, NULL, 1, 27, 1, NULL, NULL, NULL, 1),
(47, 'Boleta', 'Contado', '2018-10-14', 75.000, NULL, 1, 12, 1, NULL, NULL, NULL, 1),
(48, 'Boleta', 'Contado', '2018-10-14', 70.000, NULL, 1, 11, 1, NULL, NULL, NULL, 1),
(49, 'Boleta', 'Contado', '2018-10-14', 159.000, NULL, 1, 25, 2, NULL, NULL, NULL, 1),
(50, 'Boleta', 'Contado', '2018-10-14', 75.000, NULL, 1, 12, 1, NULL, NULL, NULL, 1),
(51, 'Boleta', 'Contado', '2018-10-14', 74.500, NULL, 1, 12, 3, NULL, NULL, NULL, 1),
(52, 'Boleta', 'Contado', '2018-10-14', 86.500, NULL, 1, 14, 3, NULL, NULL, NULL, 1),
(53, 'Boleta', 'Contado', '2018-10-14', 4.500, NULL, 1, 1, 3, NULL, NULL, NULL, 1),
(54, 'Boleta', 'Contado', '2018-10-14', 169.500, NULL, 1, 26, 3, NULL, NULL, NULL, 1),
(55, 'Boleta', 'Contado', '2018-10-14', 387.000, NULL, 1, 59, 3, NULL, NULL, NULL, 1),
(56, 'Boleta', 'Contado', '2018-10-14', 4.500, NULL, 1, 1, 3, NULL, NULL, NULL, 1),
(57, 'Boleta', 'Contado', '2018-10-14', 15.000, NULL, 1, 2, 3, NULL, NULL, NULL, 1),
(58, 'Boleta', 'Contado', '2018-10-14', 4.500, NULL, 1, 1, 3, NULL, NULL, NULL, 1),
(59, 'Boleta', 'Contado', '2018-10-14', 1.500, NULL, 1, 1, 3, NULL, NULL, NULL, 1),
(60, 'Boleta', 'Contado', '2018-10-14', 74.500, NULL, 1, 12, 3, NULL, NULL, NULL, 1),
(61, 'Boleta', 'Contado', '2018-10-14', 3.000, NULL, 1, 0, 3, NULL, NULL, NULL, 1),
(62, 'Boleta', 'Contado', '2018-10-14', 3.000, NULL, 1, 0, 1, NULL, NULL, NULL, 1),
(63, 'Boleta', 'Contado', '2018-10-14', 115.000, NULL, 1, 18, 1, NULL, NULL, NULL, 1),
(64, 'Boleta', 'Contado', '2018-10-14', 115.000, NULL, 1, 18, 3, NULL, NULL, NULL, 1),
(65, 'Factura', 'Contado', '2018-10-14', 185.000, NULL, 1, 28, 1, '100795771982', 'computrabajo sac', 'piura piura ', 1),
(66, 'Factura', 'Contado', '2018-10-14', 300.000, NULL, 1, 46, 2, '100795771982', 'YIRE', 'PIURA', 1),
(67, 'Boleta', 'Contado', '2018-10-14', 255.000, NULL, 1, 39, 2, NULL, NULL, NULL, 1),
(68, 'Boleta', 'Contado', '2018-10-14', 131.500, NULL, 1, 21, 1, NULL, NULL, NULL, 1),
(69, 'Boleta', 'Contado', '2018-10-14', 45.000, NULL, 1, 7, 3, NULL, NULL, NULL, 1),
(70, 'Boleta', 'Contado', '2018-10-14', 119.500, NULL, 1, 19, 1, NULL, NULL, NULL, 1),
(71, 'Factura', 'Contado', '2018-10-14', 346.500, NULL, 1, 53, 1, '100795771982', 'computrabajo sac.', 'piura piura ', 1),
(72, 'Factura', 'Contado', '2018-10-14', 185.000, NULL, 1, 28, 1, '1020715899332', 'YIRE', 'PIURA', 1),
(73, 'Factura', 'Contado', '2018-10-14', 115.000, NULL, 1, 18, 1, '8459858989', 'yoida', 'csatilla', 1),
(74, 'Boleta', 'Contado', '2018-10-14', 115.000, NULL, 1, 18, 1, NULL, NULL, NULL, 1),
(75, 'Factura', 'Contado', '2018-10-14', 116.500, NULL, 1, 18, 1, '8459858989', 'yoida', 'piura piura ', 1),
(76, 'Factura', 'Contado', '2018-10-14', 115.000, NULL, 1, 18, 1, '100795771982', 'YIRE', 'piura piura ', 1),
(77, 'Factura', 'Contado', '2018-10-14', 46.500, NULL, 1, 8, 1, '100795771982', 'computrabajo sac', 'piura piura ', 1),
(78, 'Factura', 'Contado', '2018-10-14', 48.000, NULL, 1, 7, 1, '100795771982', 'computrabajo sac', 'piura piura ', 1),
(79, 'Factura', 'Contado', '2018-10-14', 49.500, NULL, 1, 8, 2, '1020715899332', 'YIRE', 'PIURA', 1),
(80, 'Factura', 'Contado', '2018-10-14', 91.500, NULL, 1, 14, 1, '8459858989', 'yoida', 'PIURA', 1),
(81, 'Factura', 'Contado', '2018-10-14', 91.500, NULL, 1, 14, 2, '100795771982', 'yoida', 'csatilla', 1),
(82, 'Boleta', 'Contado', '2018-10-14', 4.500, NULL, 1, 1, 3, NULL, NULL, NULL, 1),
(83, 'Factura', 'Contado', '2018-10-14', 219.000, NULL, 1, 33, 2, '100795771982', 'computrabajo sac', 'piura piura ', 1),
(84, 'Boleta', 'Contado', '2018-10-14', 10.500, NULL, 1, 2, 1, NULL, NULL, NULL, 1),
(85, 'Boleta', 'Contado', '2018-10-14', 16.500, NULL, 1, 3, 1, NULL, NULL, NULL, 1),
(86, 'Factura', 'Contado', '2018-10-14', 211.500, NULL, 1, 33, 2, '100795771982', 'computrabajo sac', 'piura piura ', 1),
(87, 'Boleta', 'Contado', '2018-10-15', 141.500, NULL, 1, 22, 3, NULL, NULL, NULL, 1),
(88, 'Factura', 'Contado', '2018-10-15', 490.000, NULL, 1, 75, 2, '100795771982', 'computrabajo sac', 'piura piura ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialmedico`
--

DROP TABLE IF EXISTS `historialmedico`;
CREATE TABLE `historialmedico` (
  `id_historial` bigint(20) NOT NULL,
  `registro` varchar(250) DEFAULT NULL,
  `medicamento` varchar(250) DEFAULT NULL,
  `atendido` varchar(250) DEFAULT NULL,
  `id_mascota` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

DROP TABLE IF EXISTS `mascota`;
CREATE TABLE `mascota` (
  `id_mascota` bigint(20) NOT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `especie` varchar(250) DEFAULT NULL,
  `raza` varchar(250) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `pelaje` varchar(50) DEFAULT NULL,
  `f_nac` date DEFAULT NULL,
  `fallecido` tinyint(4) DEFAULT NULL,
  `extraviado` tinyint(4) DEFAULT NULL,
  `foto` longblob,
  `activo` tinyint(4) DEFAULT NULL,
  `f_creacion` datetime DEFAULT NULL,
  `codigodvi` varchar(10) DEFAULT NULL,
  `id_cliente` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento`
--

DROP TABLE IF EXISTS `movimiento`;
CREATE TABLE `movimiento` (
  `id_movimiento` bigint(20) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  `observacion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movimiento`
--

INSERT INTO `movimiento` (`id_movimiento`, `descripcion`, `activo`, `observacion`) VALUES
(1, 'Venta', 1, NULL),
(2, 'Gastos', 1, NULL),
(3, 'Compra', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE `perfil` (
  `id_perfil` bigint(20) NOT NULL,
  `nombre_empresa` varchar(150) CHARACTER SET latin1 NOT NULL,
  `direccion` varchar(255) CHARACTER SET latin1 NOT NULL,
  `ciudad` varchar(100) CHARACTER SET latin1 NOT NULL,
  `codigo_postal` varchar(100) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(100) CHARACTER SET latin1 NOT NULL,
  `telefono` varchar(10) CHARACTER SET latin1 NOT NULL,
  `telefono2` varchar(10) DEFAULT NULL,
  `ruc` varchar(11) DEFAULT NULL,
  `email` varchar(64) CHARACTER SET latin1 NOT NULL,
  `impuesto` int(2) NOT NULL,
  `moneda` varchar(6) CHARACTER SET latin1 NOT NULL,
  `logo_url` varchar(255) CHARACTER SET latin1 NOT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  `paginaweb` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nombre_empresa`, `direccion`, `ciudad`, `codigo_postal`, `estado`, `telefono`, `telefono2`, `ruc`, `email`, `impuesto`, `moneda`, `logo_url`, `activo`, `paginaweb`) VALUES
(1, 'CLÍNICA VETERINARIA EIRL', 'Av. Ramon Castilla N° 126 - Castilla', 'Piura -', '51', 'Piura', '958517042', '98787832', '20529927704', 'vetarinaria@hotmail.com', 18, 'S/.', 'img/1537673723_logo.jpg', 0, 'www.veterinaria.com.pe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegio`
--

DROP TABLE IF EXISTS `privilegio`;
CREATE TABLE `privilegio` (
  `id_privilegio` bigint(20) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `cita` tinyint(4) DEFAULT NULL,
  `cliente` tinyint(4) DEFAULT NULL,
  `documento` tinyint(4) DEFAULT NULL,
  `historial` tinyint(4) DEFAULT NULL,
  `mascota` tinyint(4) DEFAULT NULL,
  `producto` tinyint(4) DEFAULT NULL,
  `usuario` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id_producto` bigint(20) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `stock` double DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  `idusuario` bigint(20) DEFAULT NULL,
  `observacion` varchar(250) DEFAULT NULL,
  `id_unidad_medida` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `codigo`, `descripcion`, `precio`, `stock`, `activo`, `idusuario`, `observacion`, `id_unidad_medida`) VALUES
(23, '681959252', 'MOUSE', 70, 63, 1, 1, 'MOUSE', 2),
(24, '405958017', 'TECLADO', 45, 0, 1, 1, 'TECLADO', 4),
(25, '121509640', 'CON CARNE Y POLLO', 3, 0, 1, 1, 'COMIDA DE CANES CON CARNES Y POLLO', 2),
(26, 'J6HJ7HHHHH787978', 'XD', 5, 0, 1, 1, 'UHUHUH cccccccccccccccng', 4),
(30, '753749001625', 'GUARANA', 1.5, 69, 1, 1, 'gaseosa guarana backus', 1),
(32, '204507027', 'CORREA', 12, 70, 1, 1, 'correa de cuerosddsds', 1),
(33, '108961481', 'Billetera BILLA BONG', 70, 68, 1, 1, 'billetera color marron y negro', 1),
(34, '76664566664554454', 'dfff', 45, 0, 1, 1, 'yuuyuu', 2),
(35, '78yhh', 'jnjnj', 87, 70, 1, 1, 'n', 1),
(36, 'hjhhjjh', 'hjhh', 78, 2, 1, 1, 'hjj', 1),
(37, 'jbjh', 'jdhj', 56, 97, 1, 1, 'dj', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_estadocivil`
--

DROP TABLE IF EXISTS `t_estadocivil`;
CREATE TABLE `t_estadocivil` (
  `idEstadocivil` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_estadocivil`
--

INSERT INTO `t_estadocivil` (`idEstadocivil`, `descripcion`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Viudo'),
(4, 'Divorsiado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_nivel`
--

DROP TABLE IF EXISTS `t_nivel`;
CREATE TABLE `t_nivel` (
  `idnivel` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_nivel`
--

INSERT INTO `t_nivel` (`idnivel`, `nombre`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'ENCARGADO'),
(3, 'MESA DE PARTES'),
(4, 'PRESIDENCIA'),
(5, 'ADMINISTRACIÓN'),
(6, 'SOCIAL'),
(7, 'CONTABILIDAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_persona`
--

DROP TABLE IF EXISTS `t_persona`;
CREATE TABLE `t_persona` (
  `idpersona` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `apellido` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `telefono` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `dni` varchar(8) CHARACTER SET latin1 DEFAULT NULL,
  `direccion` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sexo` int(11) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `fechanacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_persona`
--

INSERT INTO `t_persona` (`idpersona`, `nombre`, `apellido`, `email`, `telefono`, `dni`, `direccion`, `sexo`, `idEstado`, `fechanacimiento`) VALUES
(1, 'MARTIN JESUS', 'MARTINEZ MARTINEZ', 'MARJESMM@HOTMAIL.COM', '333333', '12345678', 'COLAN', 1, 1, '1980-11-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_sexo`
--

DROP TABLE IF EXISTS `t_sexo`;
CREATE TABLE `t_sexo` (
  `idSexo` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_sexo`
--

INSERT INTO `t_sexo` (`idSexo`, `descripcion`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

DROP TABLE IF EXISTS `t_usuario`;
CREATE TABLE `t_usuario` (
  `idusuario` int(11) NOT NULL,
  `idnivel` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `idregistro` int(11) DEFAULT NULL,
  `id_privilegio` int(11) NOT NULL,
  `usuario` varchar(20) CHARACTER SET latin1 NOT NULL,
  `clave` varchar(20) CHARACTER SET latin1 NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`idusuario`, `idnivel`, `idpersona`, `idregistro`, `id_privilegio`, `usuario`, `clave`, `fecha_registro`, `estado`) VALUES
(1, 1, 1, 1, 0, 'admin', 'MTIzNDU2', '2017-08-13 09:03:23', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadmedida`
--

DROP TABLE IF EXISTS `unidadmedida`;
CREATE TABLE `unidadmedida` (
  `id_unidad_medida` bigint(20) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `abreviatura` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidadmedida`
--

INSERT INTO `unidadmedida` (`id_unidad_medida`, `descripcion`, `abreviatura`) VALUES
(1, 'PRODUCTO', 'NIU'),
(2, 'SERVICIO', 'ZZ'),
(4, 'XD', 'ZT');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `fk_cliente` (`id_cliente`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `fk_producto` (`id_producto`),
  ADD KEY `fk_documento` (`id_documento`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `fk_movimiento` (`id_movimiento`),
  ADD KEY `fk_client` (`id_cliente`),
  ADD KEY `fk_usuario` (`id_usuario`);

--
-- Indices de la tabla `historialmedico`
--
ALTER TABLE `historialmedico`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `fk_mascota` (`id_mascota`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id_mascota`),
  ADD KEY `fk_clientemascota` (`id_cliente`);

--
-- Indices de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  ADD PRIMARY KEY (`id_movimiento`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `privilegio`
--
ALTER TABLE `privilegio`
  ADD PRIMARY KEY (`id_privilegio`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_unidadm` (`id_unidad_medida`),
  ADD KEY `fk_clinica` (`idusuario`);

--
-- Indices de la tabla `t_estadocivil`
--
ALTER TABLE `t_estadocivil`
  ADD PRIMARY KEY (`idEstadocivil`);

--
-- Indices de la tabla `t_nivel`
--
ALTER TABLE `t_nivel`
  ADD PRIMARY KEY (`idnivel`);

--
-- Indices de la tabla `t_persona`
--
ALTER TABLE `t_persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `t_sexo`
--
ALTER TABLE `t_sexo`
  ADD PRIMARY KEY (`idSexo`);

--
-- Indices de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idnivel` (`idnivel`),
  ADD KEY `idpersona` (`idpersona`);

--
-- Indices de la tabla `unidadmedida`
--
ALTER TABLE `unidadmedida`
  ADD PRIMARY KEY (`id_unidad_medida`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id_detalle` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;
--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id_documento` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT de la tabla `historialmedico`
--
ALTER TABLE `historialmedico`
  MODIFY `id_historial` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id_mascota` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `movimiento`
--
ALTER TABLE `movimiento`
  MODIFY `id_movimiento` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `privilegio`
--
ALTER TABLE `privilegio`
  MODIFY `id_privilegio` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `t_estadocivil`
--
ALTER TABLE `t_estadocivil`
  MODIFY `idEstadocivil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `t_nivel`
--
ALTER TABLE `t_nivel`
  MODIFY `idnivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `t_persona`
--
ALTER TABLE `t_persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `t_sexo`
--
ALTER TABLE `t_sexo`
  MODIFY `idSexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `unidadmedida`
--
ALTER TABLE `unidadmedida`
  MODIFY `id_unidad_medida` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
