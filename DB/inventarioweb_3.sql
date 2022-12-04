-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2022 a las 03:43:03
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventarioweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id_categoria`, `nombre_categoria`) VALUES
(1, 'Drilled Shafts'),
(2, 'Marlite Panels (FED)'),
(3, 'Wall Protection'),
(4, 'RF Shielding'),
(5, 'Prefabricated Alumin'),
(6, 'Painting & Vinyl Wal'),
(7, 'Plumbing & Medical G'),
(8, 'Prefabricated Alumin'),
(9, 'Drywall & Acoustical'),
(10, 'Electrical'),
(11, 'HVAC'),
(12, 'Doors, Frames & Hard'),
(13, 'Doors, Frames & Hard'),
(14, 'Retaining Wall and B'),
(15, 'Masonry & Precast'),
(16, 'Epoxy Flooring'),
(17, 'HVAC'),
(18, 'Asphalt Paving'),
(19, 'Ornamental Railings'),
(20, 'Structural and Misc '),
(21, 'Waterproofing & Caul'),
(22, 'Masonry & Precast'),
(23, 'HVAC'),
(24, 'Asphalt Paving'),
(25, 'Rebar & Wire Mesh In'),
(26, 'Painting & Vinyl Wal'),
(27, 'Soft Flooring and Ba'),
(28, 'Waterproofing & Caul'),
(29, 'Fire Sprinkler Syste'),
(30, 'Landscaping & Irriga'),
(31, 'Elevator'),
(32, 'Framing (Steel)'),
(33, 'Glass & Glazing'),
(34, 'Casework'),
(35, 'Curb & Gutter'),
(36, 'Construction Clean a'),
(37, 'Retaining Wall and B'),
(38, 'Prefabricated Alumin'),
(39, 'Overhead Doors'),
(40, 'Structural & Misc St'),
(41, 'Wall Protection'),
(42, 'EIFS'),
(43, 'Epoxy Flooring'),
(44, 'Rebar & Wire Mesh In'),
(45, 'Hard Tile & Stone'),
(46, 'Epoxy Flooring'),
(47, 'Curb & Gutter'),
(48, 'Drywall & Acoustical'),
(49, 'Retaining Wall and B'),
(50, 'Fire Protection');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordencompra`
--

CREATE TABLE `ordencompra` (
  `Id_compra` bigint(20) NOT NULL,
  `id_proveedor_fk` int(11) NOT NULL,
  `fecha_orden` datetime NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `total_compra` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ordencompra`
--

INSERT INTO `ordencompra` (`Id_compra`, `id_proveedor_fk`, `fecha_orden`, `create_at`, `total_compra`) VALUES
(1, 3, '2022-01-06 00:00:00', '2022-11-22 21:34:41', NULL),
(2, 18, '2022-05-09 00:00:00', '2022-11-22 21:34:42', NULL),
(3, 8, '2022-10-02 00:00:00', '2022-11-22 21:34:42', NULL),
(4, 20, '2022-11-04 00:00:00', '2022-11-22 21:34:42', NULL),
(5, 6, '2022-04-11 00:00:00', '2022-11-22 21:34:42', NULL),
(6, 12, '2021-12-01 00:00:00', '2022-11-22 21:34:42', NULL),
(7, 18, '2021-11-22 00:00:00', '2022-11-22 21:34:42', NULL),
(8, 19, '2022-03-31 00:00:00', '2022-11-22 21:34:42', NULL),
(9, 3, '2022-06-04 00:00:00', '2022-11-22 21:34:42', NULL),
(10, 9, '2022-04-25 00:00:00', '2022-11-22 21:34:42', NULL),
(11, 13, '2021-12-06 00:00:00', '2022-11-22 21:34:42', NULL),
(12, 6, '2022-05-20 00:00:00', '2022-11-22 21:34:42', NULL),
(13, 17, '2022-08-30 00:00:00', '2022-11-22 21:34:42', NULL),
(14, 10, '2021-12-23 00:00:00', '2022-11-22 21:34:43', NULL),
(15, 18, '2022-11-03 00:00:00', '2022-11-22 21:34:43', NULL),
(16, 2, '2021-12-22 00:00:00', '2022-11-22 21:34:43', NULL),
(17, 4, '2022-06-28 00:00:00', '2022-11-22 21:34:43', NULL),
(18, 11, '2022-05-21 00:00:00', '2022-11-22 21:34:43', NULL),
(19, 10, '2022-03-06 00:00:00', '2022-11-22 21:34:43', NULL),
(20, 8, '2022-04-17 00:00:00', '2022-11-22 21:34:43', NULL),
(21, 9, '2022-04-02 00:00:00', '2022-11-22 21:34:43', NULL),
(22, 1, '2022-04-11 00:00:00', '2022-11-22 21:34:43', NULL),
(23, 11, '2022-05-30 00:00:00', '2022-11-22 21:34:43', NULL),
(24, 9, '2022-01-03 00:00:00', '2022-11-22 21:34:43', NULL),
(25, 12, '2022-06-19 00:00:00', '2022-11-22 21:34:43', NULL),
(26, 9, '2022-05-21 00:00:00', '2022-11-22 21:34:43', NULL),
(27, 8, '2022-09-28 00:00:00', '2022-11-22 21:34:43', NULL),
(28, 20, '2022-07-19 00:00:00', '2022-11-22 21:34:43', NULL),
(29, 8, '2021-12-07 00:00:00', '2022-11-22 21:34:43', NULL),
(30, 4, '2022-02-04 00:00:00', '2022-11-22 21:34:43', NULL),
(31, 17, '2022-07-03 00:00:00', '2022-11-22 21:34:43', NULL),
(32, 9, '2022-01-24 00:00:00', '2022-11-22 21:34:44', NULL),
(33, 17, '2022-02-28 00:00:00', '2022-11-22 21:34:44', NULL),
(34, 17, '2022-08-19 00:00:00', '2022-11-22 21:34:44', NULL),
(35, 3, '2022-08-26 00:00:00', '2022-11-22 21:34:44', NULL),
(36, 11, '2022-10-25 00:00:00', '2022-11-22 21:34:44', NULL),
(37, 4, '2022-05-30 00:00:00', '2022-11-22 21:34:44', NULL),
(38, 12, '2022-08-05 00:00:00', '2022-11-22 21:34:44', NULL),
(39, 5, '2022-01-23 00:00:00', '2022-11-22 21:34:44', NULL),
(40, 1, '2022-10-03 00:00:00', '2022-11-22 21:34:44', NULL),
(41, 18, '2022-05-04 00:00:00', '2022-11-22 21:34:44', NULL),
(42, 8, '2022-10-14 00:00:00', '2022-11-22 21:34:44', NULL),
(43, 11, '2022-03-03 00:00:00', '2022-11-22 21:34:44', NULL),
(44, 19, '2022-04-15 00:00:00', '2022-11-22 21:34:44', NULL),
(45, 10, '2022-05-28 00:00:00', '2022-11-22 21:34:44', NULL),
(46, 2, '2022-02-25 00:00:00', '2022-11-22 21:34:44', NULL),
(47, 12, '2022-03-17 00:00:00', '2022-11-22 21:34:44', NULL),
(48, 3, '2022-10-27 00:00:00', '2022-11-22 21:34:44', NULL),
(49, 12, '2022-06-10 00:00:00', '2022-11-22 21:34:44', NULL),
(50, 11, '2022-07-15 00:00:00', '2022-11-22 21:34:44', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `stock` int(9) NOT NULL,
  `precio_venta` double NOT NULL,
  `stock_minimo` int(4) NOT NULL,
  `sku` varchar(12) NOT NULL,
  `bar_code` varchar(14) DEFAULT NULL,
  `porcentaje_ganancia` decimal(4,2) DEFAULT NULL,
  `ruta_img` varchar(50) DEFAULT NULL,
  `estatus` tinyint(2) DEFAULT NULL,
  `id_categoria_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_producto`, `nombre_producto`, `stock`, `precio_venta`, `stock_minimo`, `sku`, `bar_code`, `porcentaje_ganancia`, `ruta_img`, `estatus`, `id_categoria_fk`) VALUES
(1, 'prueba', 2, 20.5, 2, '2222222', '5569348883', '2.20', 'http://dummyimage.com/226x100.png/ff4444/ffffff', 1, 22),
(2, 'Red Snapper - Fillet, Skin On', 71, 63.43, 31, '0594634148', '9004197826', '22.58', 'http://dummyimage.com/197x100.png/cc0000/ffffff', 0, 8),
(3, 'Turkey - Ground. Lean', 60, 79.82, 13, '5822141919', '6775892748', '14.63', 'http://dummyimage.com/172x100.png/5fa2dd/ffffff', 1, 25),
(4, 'Chips - Potato Jalapeno', 45, 58.21, 83, '9345200762', '5031540419', '55.40', 'http://dummyimage.com/118x100.png/ff4444/ffffff', 1, 12),
(5, 'Lamb - Pieces, Diced', 70, 55.4, 67, '0401698890', '8067827729', '14.62', 'http://dummyimage.com/110x100.png/dddddd/000000', 1, 1),
(6, 'Chocolate - Pistoles, Lactee, Milk', 70, 50.19, 89, '2562977688', '2524079198', '5.18', 'http://dummyimage.com/135x100.png/dddddd/000000', 0, 1),
(7, 'Duck - Legs', 8, 86.86, 38, '5041631786', '2309273635', '88.73', 'http://dummyimage.com/190x100.png/dddddd/000000', 0, 9),
(8, 'Wasabi Paste', 68, 65.26, 90, '3308466031', '2317058926', '69.84', 'http://dummyimage.com/234x100.png/dddddd/000000', 1, 4),
(9, 'Lettuce - Boston Bib', 97, 45.99, 36, '0425338126', '3356372319', '27.40', 'http://dummyimage.com/101x100.png/dddddd/000000', 0, 17),
(10, 'Carbonated Water - Orange', 57, 92.19, 52, '8464362773', '9296991110', '75.26', 'http://dummyimage.com/141x100.png/ff4444/ffffff', 0, 17),
(11, 'Veal - Tenderloin, Untrimmed', 57, 18.26, 8, '0339548975', '2655191560', '87.25', 'http://dummyimage.com/244x100.png/ff4444/ffffff', 1, 16),
(12, 'Kippers - Smoked', 8, 74.89, 47, '4868192418', '2563577454', '51.01', 'http://dummyimage.com/154x100.png/dddddd/000000', 1, 2),
(13, 'Napkin - Beverage 1 Ply', 14, 83.4, 61, '0127306056', '4318886409', '91.76', 'http://dummyimage.com/103x100.png/5fa2dd/ffffff', 0, 23),
(14, 'Wakami Seaweed', 38, 7.19, 69, '5462721625', '8326500178', '71.31', 'http://dummyimage.com/112x100.png/ff4444/ffffff', 0, 3),
(15, 'Pasta - Spaghetti, Dry', 4, 11.57, 14, '4195267412', '2627070940', '52.26', 'http://dummyimage.com/153x100.png/dddddd/000000', 1, 12),
(16, 'Chips - Assorted', 25, 62.03, 12, '9930022376', '2439194263', '60.97', 'http://dummyimage.com/100x100.png/dddddd/000000', 1, 18),
(17, 'Wine - Beaujolais Villages', 31, 85.97, 61, '7501665001', '7954804909', '99.36', 'http://dummyimage.com/191x100.png/dddddd/000000', 1, 11),
(18, 'Corn - On The Cob', 32, 68.8, 2, '3714806911', '9340589769', '91.98', 'http://dummyimage.com/164x100.png/ff4444/ffffff', 0, 19),
(19, 'Soup - Knorr, Country Bean', 60, 19.83, 28, '8002330099', '0291144268', '41.21', 'http://dummyimage.com/213x100.png/ff4444/ffffff', 1, 17),
(20, 'Tart Shells - Sweet, 3', 32, 66.46, 97, '7843035931', '5015092679', '64.04', 'http://dummyimage.com/231x100.png/cc0000/ffffff', 0, 14),
(21, 'Sauce - Demi Glace', 61, 7.52, 61, '3792998920', '4110409020', '12.74', 'http://dummyimage.com/237x100.png/ff4444/ffffff', 0, 23),
(22, 'Chocolate - Mi - Amere Semi', 49, 44.09, 36, '7665599931', '8529480716', '12.64', 'http://dummyimage.com/131x100.png/dddddd/000000', 0, 5),
(23, 'Pizza Pizza Dough', 67, 38.27, 25, '4550708530', '4088080521', '67.43', 'http://dummyimage.com/211x100.png/cc0000/ffffff', 1, 13),
(24, 'Vinegar - Tarragon', 33, 83.41, 1, '5447386209', '5413345534', '80.12', 'http://dummyimage.com/150x100.png/dddddd/000000', 0, 8),
(25, 'Teriyaki Sauce', 9, 85.72, 80, '3813464822', '6827687821', '14.60', 'http://dummyimage.com/185x100.png/cc0000/ffffff', 1, 12),
(26, 'Gingerale - Diet - Schweppes', 8, 87.63, 27, '4791028805', '8284473437', '68.48', 'http://dummyimage.com/115x100.png/dddddd/000000', 0, 6),
(27, 'Beef - Top Butt Aaa', 63, 17.12, 62, '4228144810', '5360939044', '81.38', 'http://dummyimage.com/116x100.png/ff4444/ffffff', 1, 3),
(28, 'Chocolate - Chips Compound', 11, 9.45, 6, '6567701676', '2182682856', '2.97', 'http://dummyimage.com/239x100.png/5fa2dd/ffffff', 0, 9),
(29, 'Chinese Foods - Thick Noodles', 57, 68.97, 41, '6812930792', '0954144104', '43.65', 'http://dummyimage.com/239x100.png/dddddd/000000', 0, 1),
(30, 'Tart - Butter Plain Squares', 70, 58.67, 46, '7938658197', '1126971111', '47.88', 'http://dummyimage.com/191x100.png/5fa2dd/ffffff', 0, 6),
(31, 'Wine - White, Mosel Gold', 20, 67.93, 20, '2022731395', '7955147421', '63.95', 'http://dummyimage.com/213x100.png/5fa2dd/ffffff', 0, 10),
(32, 'Wine - Chianti Classica Docg', 59, 29.91, 13, '0350786984', '7354473626', '84.56', 'http://dummyimage.com/113x100.png/5fa2dd/ffffff', 1, 5),
(33, 'Water - San Pellegrino', 7, 75.97, 7, '8790450116', '4381190149', '64.29', 'http://dummyimage.com/175x100.png/ff4444/ffffff', 0, 17),
(34, 'Soup - French Can Pea', 20, 12.25, 5, '7579056186', '7985009035', '68.43', 'http://dummyimage.com/175x100.png/dddddd/000000', 0, 19),
(35, 'Pork - Belly Fresh', 10, 83.31, 11, '1050676033', '5675391096', '82.96', 'http://dummyimage.com/151x100.png/dddddd/000000', 1, 24),
(36, 'Sugar - Splenda Sweetener', 46, 70.62, 93, '4193969010', '8511490647', '14.61', 'http://dummyimage.com/211x100.png/dddddd/000000', 1, 25),
(37, 'Swiss Chard', 75, 52.38, 78, '3861752743', '3597489427', '72.71', 'http://dummyimage.com/198x100.png/ff4444/ffffff', 0, 11),
(38, 'Soy Protein', 52, 90.3, 27, '3185797809', '1657895300', '88.34', 'http://dummyimage.com/136x100.png/cc0000/ffffff', 0, 20),
(39, 'Appetizer - Tarragon Chicken', 60, 97.53, 71, '6219257154', '9257217159', '43.62', 'http://dummyimage.com/117x100.png/dddddd/000000', 1, 15),
(40, 'Butter Sweet', 52, 69.08, 74, '6436983686', '5640929014', '16.10', 'http://dummyimage.com/242x100.png/cc0000/ffffff', 1, 22),
(41, 'Beef - Short Loin', 92, 52.54, 97, '9170560447', '4287153073', '84.50', 'http://dummyimage.com/172x100.png/ff4444/ffffff', 0, 4),
(42, 'Langers - Ruby Red Grapfruit', 28, 33.62, 15, '1935908847', '7722122027', '61.24', 'http://dummyimage.com/154x100.png/5fa2dd/ffffff', 0, 17),
(43, 'Roe - Flying Fish', 89, 81.05, 64, '3858129232', '2175098303', '79.46', 'http://dummyimage.com/191x100.png/ff4444/ffffff', 0, 6),
(44, 'Shrimp - Black Tiger 16/20', 90, 79.05, 23, '8622012751', '7415192222', '68.71', 'http://dummyimage.com/167x100.png/cc0000/ffffff', 1, 14),
(45, 'Banana - Green', 84, 84.86, 27, '3712086784', '9223513030', '11.64', 'http://dummyimage.com/140x100.png/cc0000/ffffff', 1, 25),
(46, 'Sardines', 41, 4.5, 13, '6591532560', '7092485916', '40.20', 'http://dummyimage.com/237x100.png/ff4444/ffffff', 0, 8),
(47, 'Flour - So Mix Cake White', 94, 89.91, 29, '7823705109', '7486722917', '70.79', 'http://dummyimage.com/235x100.png/ff4444/ffffff', 0, 10),
(48, 'Sauce - Thousand Island', 94, 3.96, 75, '0379777819', '5598604086', '70.16', 'http://dummyimage.com/247x100.png/cc0000/ffffff', 1, 16),
(49, 'Cheese - Cheddar, Old White', 25, 47.51, 60, '5797512696', '5946514415', '22.53', 'http://dummyimage.com/206x100.png/cc0000/ffffff', 1, 4),
(50, 'Marjoram - Fresh', 56, 20.81, 97, '8271582038', '9800306757', '58.11', 'http://dummyimage.com/249x100.png/5fa2dd/ffffff', 0, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id_proveedor` int(11) NOT NULL,
  `razon_social` varchar(60) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `rfc` varchar(15) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`Id_proveedor`, `razon_social`, `direccion`, `telefono`, `correo`, `rfc`, `create_at`) VALUES
(1, 'Jabbersphere', '18206 Laurel Alley', '560-296-7261', 'jginie0@pbs.org', 'ccolville0', '0000-00-00 00:00:00'),
(2, 'Lajo', '0 Buena Vista Crossing', '614-340-7433', 'dlegallo1@baidu.com', 'tgravet1', '0000-00-00 00:00:00'),
(3, 'Tagpad', '56500 Artisan Trail', '614-867-6243', 'sabraham2@etsy.com', 'aloggie2', '0000-00-00 00:00:00'),
(4, 'Vitz', '66904 Bluejay Junction', '933-266-1970', 'igout3@ox.ac.uk', 'jsuarez3', '0000-00-00 00:00:00'),
(5, 'Flipstorm', '4260 Nova Center', '696-204-8515', 'usevitt4@foxnews.com', 'aanderbrugge4', '0000-00-00 00:00:00'),
(6, 'Wikizz', '99895 Pearson Avenue', '539-539-5838', 'ogiraths5@google.com.au', 'ovizard5', '0000-00-00 00:00:00'),
(7, 'LiveZ', '79450 Oriole Place', '288-264-2280', 'dgouldie6@slate.com', 'ageaves6', '0000-00-00 00:00:00'),
(8, 'Dynabox', '1 Lakeland Circle', '720-965-1979', 'dtue7@baidu.com', 'mpidon7', '0000-00-00 00:00:00'),
(9, 'Skibox', '3 Briar Crest Hill', '360-336-9110', 'atriebner8@intel.com', 'rdouce8', '0000-00-00 00:00:00'),
(10, 'Rhybox', '5737 Montana Terrace', '222-871-1438', 'lscraggs9@stumbleupon.com', 'igalero9', '0000-00-00 00:00:00'),
(11, 'Meezzy', '88986 Rowland Crossing', '313-377-9985', 'ccheala@sun.com', 'kdemougeota', '0000-00-00 00:00:00'),
(12, 'Skalith', '61337 Summer Ridge Court', '677-781-2770', 'wbullerwellb@illinois.edu', 'atordoffb', '0000-00-00 00:00:00'),
(13, 'Gabtype', '036 Crest Line Hill', '843-506-2083', 'ameaseyc@unicef.org', 'mbeeseyc', '0000-00-00 00:00:00'),
(14, 'Oyope', '17942 Browning Place', '137-619-5142', 'cgarretsond@abc.net.au', 'htroueld', '0000-00-00 00:00:00'),
(15, 'Voolia', '51 Southridge Avenue', '267-952-4671', 'fyakobovicze@un.org', 'hcondliffee', '0000-00-00 00:00:00'),
(16, 'Oyoba', '74 Pennsylvania Way', '402-715-6098', 'rtalloef@imdb.com', 'ocraigsf', '0000-00-00 00:00:00'),
(17, 'Youfeed', '8645 Larry Place', '524-114-0484', 'vdownerg@mit.edu', 'gpavolillog', '0000-00-00 00:00:00'),
(18, 'Twinder', '068 Meadow Ridge Plaza', '832-599-1216', 'gboeckeh@deviantart.com', 'acotherillh', '0000-00-00 00:00:00'),
(19, 'Meedoo', '2 Fairview Lane', '699-923-2584', 'pdwellyi@paypal.com', 'lparadei', '0000-00-00 00:00:00'),
(20, 'Yodo', '36568 Talmadge Center', '851-970-1322', 'acorderoj@washingtonpost.com', 'jnailej', '0000-00-00 00:00:00'),
(21, 'Mita', '8999 Porter Alley', '249-997-9484', 'cclayfieldk@dropbox.com', 'kneillansk', '0000-00-00 00:00:00'),
(22, 'Youtags', '144 Sunnyside Alley', '383-794-6684', 'bkillnerl@china.com.cn', 'dnottingaml', '0000-00-00 00:00:00'),
(23, 'Gabvine', '338 Hovde Parkway', '355-910-7251', 'kfassbindlerm@nifty.com', 'lfippem', '0000-00-00 00:00:00'),
(24, 'Wikivu', '28492 Homewood Plaza', '539-165-3107', 'kstringmann@bizjournals.com', 'snapolitanon', '0000-00-00 00:00:00'),
(25, 'Oyope', '3448 Shopko Terrace', '622-314-6154', 'cdeniskevicho@shareasale.com', 'pmorebyo', '0000-00-00 00:00:00'),
(26, 'Photobean', '312 South Point', '666-920-1945', 'tpeckp@pcworld.com', 'kskirvingp', '0000-00-00 00:00:00'),
(27, 'Voolith', '012 Fuller Parkway', '833-158-0741', 'wgiaomozzoq@google.ru', 'tnusseyq', '0000-00-00 00:00:00'),
(28, 'Jaxbean', '8532 Del Sol Plaza', '485-521-2058', 'hbaggaleyr@opensource.org', 'jgregrr', '0000-00-00 00:00:00'),
(29, 'Thoughtsphere', '8 Fulton Way', '807-330-1268', 'hlittleys@typepad.com', 'ecassedys', '0000-00-00 00:00:00'),
(30, 'Dynazzy', '105 Annamark Trail', '509-579-8862', 'rglossopt@typepad.com', 'lmcgillreicht', '0000-00-00 00:00:00'),
(31, 'Abata', '80932 Miller Crossing', '607-847-4125', 'agillcristu@zdnet.com', 'splanqueu', '0000-00-00 00:00:00'),
(32, 'Gigaclub', '8 Fieldstone Parkway', '910-432-1765', 'gbootymanv@barnesandnoble.com', 'cgollopv', '0000-00-00 00:00:00'),
(33, 'Mymm', '6 Dennis Terrace', '169-216-2920', 'frosettiniw@patch.com', 'fmcmickanw', '0000-00-00 00:00:00'),
(34, 'Zoombeat', '38881 Lerdahl Way', '485-454-0569', 'fhurlestonx@yellowbook.com', 'lmurtyx', '0000-00-00 00:00:00'),
(35, 'Flipbug', '5738 Porter Pass', '121-604-6881', 'babletty@tmall.com', 'lsolleyy', '0000-00-00 00:00:00'),
(36, 'Yodoo', '2 Elgar Point', '500-734-2787', 'pmarconiz@dailymail.co.uk', 'fbarszczewskiz', '0000-00-00 00:00:00'),
(37, 'Geba', '8 Oak Valley Drive', '750-166-7559', 'ksutch10@plala.or.jp', 'chaycock10', '0000-00-00 00:00:00'),
(38, 'Browsedrive', '3011 Stang Avenue', '883-561-5690', 'icammock11@devhub.com', 'lbesse11', '0000-00-00 00:00:00'),
(39, 'Camimbo', '85029 Clemons Way', '774-455-1067', 'smcnalley12@example.com', 'cdhenin12', '0000-00-00 00:00:00'),
(40, 'Dabtype', '46967 Stoughton Avenue', '723-787-5200', 'djacombs13@newsvine.com', 'igeldart13', '0000-00-00 00:00:00'),
(41, 'Latz', '87854 Anthes Plaza', '811-502-4859', 'jbrokenbrow14@sakura.ne.jp', 'mposselwhite14', '0000-00-00 00:00:00'),
(42, 'Vinte', '57 Dixon Crossing', '124-729-8669', 'tbrazear15@yandex.ru', 'khartly15', '0000-00-00 00:00:00'),
(43, 'Avamba', '79703 Forest Crossing', '536-500-0836', 'pharower16@a8.net', 'nthorouggood16', '0000-00-00 00:00:00'),
(44, 'Quatz', '7094 High Crossing Pass', '335-557-6299', 'bmcgaugie17@smugmug.com', 'rmacclay17', '0000-00-00 00:00:00'),
(45, 'Jetpulse', '00 Goodland Parkway', '330-578-7812', 'kemslie18@jalbum.net', 'kpinke18', '0000-00-00 00:00:00'),
(46, 'Twitterworks', '8 East Circle', '757-214-4047', 'grapier19@businessinsider.com', 'jbrimfield19', '0000-00-00 00:00:00'),
(47, 'Quimba', '4 Upham Drive', '770-715-2269', 'bbingell1a@statcounter.com', 'nphython1a', '0000-00-00 00:00:00'),
(48, 'Flipopia', '270 Cascade Terrace', '866-879-2691', 'fsummerley1b@goodreads.com', 'rharniman1b', '0000-00-00 00:00:00'),
(49, 'Wikibox', '46406 School Terrace', '559-204-7591', 'tfutty1c@dedecms.com', 'fwestcot1c', '0000-00-00 00:00:00'),
(50, 'Brainsphere', '388 Saint Paul Junction', '489-467-9646', 'bperin1d@squidoo.com', 'aallchorne1d', '0000-00-00 00:00:00'),
(51, 'Oyoba', '3 Monterey Crossing', '713-142-2499', 'jhouchen1e@blogspot.com', 'edeaconson1e', '0000-00-00 00:00:00'),
(52, 'Zoonder', '2511 Marquette Hill', '973-714-6725', 'tsertin1f@uiuc.edu', 'dbigly1f', '0000-00-00 00:00:00'),
(53, 'Topicblab', '5781 Evergreen Pass', '999-384-9226', 'pwolfenden1g@naver.com', 'dfranklin1g', '0000-00-00 00:00:00'),
(54, 'Shuffletag', '49 Eggendart Street', '214-907-8580', 'mtidey1h@ebay.co.uk', 'swyvill1h', '0000-00-00 00:00:00'),
(55, 'Devpoint', '00214 David Parkway', '349-848-0051', 'kfirks1i@webnode.com', 'pspick1i', '0000-00-00 00:00:00'),
(56, 'Eadel', '13928 Kipling Plaza', '379-462-1610', 'ltootell1j@marketwatch.com', 'ccallis1j', '0000-00-00 00:00:00'),
(57, 'Roodel', '8270 John Wall Crossing', '469-339-0074', 'sarrowsmith1k@hexun.com', 'cduval1k', '0000-00-00 00:00:00'),
(58, 'Blogtags', '40092 East Center', '763-515-4183', 'cmathiot1l@ifeng.com', 'adulwich1l', '0000-00-00 00:00:00'),
(59, 'Mudo', '20 Nancy Street', '217-312-3551', 'rcarde1m@smugmug.com', 'aboyat1m', '0000-00-00 00:00:00'),
(60, 'Gabtype', '49741 Elmside Street', '313-671-7285', 'dpeealess1n@spiegel.de', 'aclaus1n', '0000-00-00 00:00:00'),
(61, 'Yoveo', '68950 Spohn Junction', '735-181-5875', 'brraundl1o@opera.com', 'tlarmor1o', '0000-00-00 00:00:00'),
(62, 'Eamia', '14269 Alpine Avenue', '560-444-5988', 'mcrenage1p@chron.com', 'rcourtliff1p', '0000-00-00 00:00:00'),
(63, 'Cogidoo', '8 Granby Park', '719-533-2369', 'bfyldes1q@springer.com', 'blangdon1q', '0000-00-00 00:00:00'),
(64, 'Oozz', '97 Katie Lane', '958-571-4079', 'gganley1r@wix.com', 'uarmall1r', '0000-00-00 00:00:00'),
(65, 'Aimbu', '7208 Boyd Lane', '427-373-5174', 'dkenningley1s@homestead.com', 'mgollop1s', '0000-00-00 00:00:00'),
(66, 'Mynte', '80700 Pleasure Way', '278-473-5368', 'lfausch1t@cnbc.com', 'wowthwaite1t', '0000-00-00 00:00:00'),
(67, 'Podcat', '2 Meadow Ridge Avenue', '248-611-3658', 'rlampert1u@topsy.com', 'pdouty1u', '0000-00-00 00:00:00'),
(68, 'Dazzlesphere', '61482 Evergreen Avenue', '915-660-9903', 'bruddick1v@networkadvertising.', 'umapholm1v', '0000-00-00 00:00:00'),
(69, 'Quaxo', '4211 Miller Place', '515-133-8902', 'dsicha1w@prnewswire.com', 'smulqueeny1w', '0000-00-00 00:00:00'),
(70, 'Jabberstorm', '762 Heath Alley', '306-687-2574', 'sbalasini1x@dedecms.com', 'hiacabucci1x', '0000-00-00 00:00:00'),
(71, 'Roodel', '283 Brown Court', '798-287-6482', 'bdobbin1y@vistaprint.com', 'lcatto1y', '0000-00-00 00:00:00'),
(72, 'Kaymbo', '59 Forster Avenue', '815-939-5771', 'igilford1z@whitehouse.gov', 'jaloshkin1z', '0000-00-00 00:00:00'),
(73, 'Bluejam', '911 East Court', '752-207-2028', 'zsebrook20@mysql.com', 'soreagan20', '0000-00-00 00:00:00'),
(74, 'Flipbug', '51 Cascade Plaza', '955-451-1870', 'aallright21@umn.edu', 'cmcnicol21', '0000-00-00 00:00:00'),
(75, 'Quire', '36480 Schurz Crossing', '744-287-2975', 'mbugdall22@ustream.tv', 'gsigward22', '0000-00-00 00:00:00'),
(76, 'Riffpath', '53 Montana Court', '198-550-1539', 'vmacrory23@cbsnews.com', 'cdunbabin23', '0000-00-00 00:00:00'),
(77, 'Edgewire', '80459 Montana Place', '128-238-2154', 'pemnoney24@dot.gov', 'yshapter24', '0000-00-00 00:00:00'),
(78, 'Aimbu', '3 Carioca Street', '120-915-6793', 'fforrington25@netvibes.com', 'bmalitrott25', '0000-00-00 00:00:00'),
(79, 'Browsezoom', '26 Artisan Court', '512-111-2551', 'rrixon26@gnu.org', 'igentric26', '0000-00-00 00:00:00'),
(80, 'Eamia', '870 Cascade Terrace', '890-458-5288', 'dboustead27@networkadvertising', 'jdrummer27', '0000-00-00 00:00:00'),
(81, 'Eire', '5117 Fair Oaks Way', '847-571-0866', 'nleither28@wikispaces.com', 'ostruan28', '0000-00-00 00:00:00'),
(82, 'Babbleblab', '4 Debra Road', '197-502-3274', 'dlunam29@statcounter.com', 'pbroun29', '0000-00-00 00:00:00'),
(83, 'Edgepulse', '8502 Mendota Hill', '224-864-1569', 'fyanyshev2a@unesco.org', 'njedras2a', '0000-00-00 00:00:00'),
(84, 'Wikizz', '68721 Dawn Junction', '926-276-8595', 'ktoffler2b@ca.gov', 'ogoddard2b', '0000-00-00 00:00:00'),
(85, 'Camimbo', '02 Heffernan Junction', '726-641-6669', 'neslie2c@dailymail.co.uk', 'bantoons2c', '0000-00-00 00:00:00'),
(86, 'Youspan', '6029 Randy Hill', '205-381-4165', 'cmurname2d@sitemeter.com', 'jsimonds2d', '0000-00-00 00:00:00'),
(87, 'Yotz', '84719 Ronald Regan Center', '502-954-8998', 'cshakspeare2e@sina.com.cn', 'lkynastone2e', '0000-00-00 00:00:00'),
(88, 'Flipstorm', '57483 Sutteridge Place', '904-643-9883', 'aturfes2f@cmu.edu', 'amcsporrin2f', '0000-00-00 00:00:00'),
(89, 'Skivee', '03031 Stuart Drive', '842-362-1694', 'bellerker2g@microsoft.com', 'mpym2g', '0000-00-00 00:00:00'),
(90, 'Roombo', '93487 Ridge Oak Terrace', '392-548-1782', 'ohuckerbe2h@npr.org', 'nhustings2h', '0000-00-00 00:00:00'),
(91, 'Voolith', '379 Nevada Center', '560-293-8523', 'eblything2i@creativecommons.or', 'cdurtnell2i', '0000-00-00 00:00:00'),
(92, 'Oyoloo', '53 Vernon Hill', '910-330-0730', 'jspraggs2j@elegantthemes.com', 'ashilliday2j', '0000-00-00 00:00:00'),
(93, 'Tagfeed', '0 Merry Place', '197-200-9948', 'fstevenson2k@gizmodo.com', 'nlewsy2k', '0000-00-00 00:00:00'),
(94, 'Zazio', '240 Kingsford Pass', '192-200-3917', 'tfentem2l@mozilla.org', 'wgravenell2l', '0000-00-00 00:00:00'),
(95, 'Brainsphere', '9 Washington Alley', '751-758-1940', 'tskerme2m@blog.com', 'hwooding2m', '0000-00-00 00:00:00'),
(96, 'Trudoo', '80348 Norway Maple Drive', '771-967-2518', 'fwisam2n@1und1.de', 'apeppett2n', '0000-00-00 00:00:00'),
(97, 'Wikido', '3 Declaration Road', '192-915-2053', 'mbane2o@purevolume.com', 'ccrozier2o', '0000-00-00 00:00:00'),
(98, 'Dabtype', '6538 Lotheville Trail', '538-106-4701', 'dtobias2p@skyrock.com', 'vtoderbrugge2p', '0000-00-00 00:00:00'),
(99, 'Mycat', '76134 Basil Point', '577-179-7808', 'fsteanson2q@reverbnation.com', 'bgitthouse2q', '0000-00-00 00:00:00'),
(100, 'Feedmix', '0692 Rutledge Hill', '726-276-1815', 'gjayme2r@prlog.org', 'acuer2r', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroentrada`
--

CREATE TABLE `registroentrada` (
  `Id_entrada` int(11) NOT NULL,
  `id_producto_fk` int(11) NOT NULL,
  `id_orden_fk` bigint(20) NOT NULL,
  `cantidad` int(9) NOT NULL,
  `precio_compra` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registroentrada`
--

INSERT INTO `registroentrada` (`Id_entrada`, `id_producto_fk`, `id_orden_fk`, `cantidad`, `precio_compra`) VALUES
(1, 9, 1, 8, '19.09'),
(2, 8, 17, 10, '57.41'),
(3, 18, 5, 4, '80.01'),
(4, 3, 6, 1, '21.84'),
(5, 14, 13, 8, '224.58'),
(6, 20, 7, 14, '118.82'),
(7, 18, 20, 8, '243.58'),
(8, 4, 12, 1, '10.28'),
(9, 9, 19, 5, '90.88'),
(10, 16, 15, 16, '94.97'),
(11, 14, 13, 12, '137.94'),
(12, 8, 12, 16, '35.03'),
(13, 6, 9, 10, '191.23'),
(14, 10, 2, 19, '8.87'),
(15, 7, 12, 17, '297.20'),
(16, 6, 20, 13, '2.49'),
(17, 20, 5, 3, '253.80'),
(18, 4, 18, 10, '234.71'),
(19, 5, 9, 7, '299.85'),
(20, 10, 17, 11, '277.89'),
(21, 11, 16, 10, '44.61'),
(22, 14, 18, 4, '112.57'),
(23, 3, 15, 20, '177.22'),
(24, 18, 15, 12, '217.12'),
(25, 6, 8, 6, '102.01'),
(26, 5, 6, 18, '111.75'),
(27, 18, 3, 16, '174.17'),
(28, 2, 16, 13, '59.79'),
(29, 11, 14, 6, '66.98'),
(30, 13, 11, 14, '27.84'),
(31, 2, 1, 6, '18.40'),
(32, 14, 17, 14, '299.35'),
(33, 13, 10, 1, '54.24'),
(34, 3, 8, 10, '32.55'),
(35, 12, 2, 6, '177.03'),
(36, 4, 13, 9, '193.13'),
(37, 3, 20, 1, '103.05'),
(38, 7, 3, 12, '271.46'),
(39, 19, 1, 4, '108.54'),
(40, 12, 1, 19, '290.98'),
(41, 12, 13, 3, '228.70'),
(42, 14, 12, 20, '116.49'),
(43, 17, 15, 11, '15.05'),
(44, 19, 15, 18, '274.33'),
(45, 2, 13, 16, '266.05'),
(46, 19, 6, 8, '21.80'),
(47, 18, 18, 17, '112.85'),
(48, 8, 12, 1, '237.14'),
(49, 13, 9, 7, '78.65'),
(50, 3, 18, 9, '22.14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosalida`
--

CREATE TABLE `registrosalida` (
  `Id_registro_s` int(11) NOT NULL,
  `id_salida_fk` bigint(20) NOT NULL,
  `id_producto_fk` int(11) NOT NULL,
  `cantidad` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrosalida`
--

INSERT INTO `registrosalida` (`Id_registro_s`, `id_salida_fk`, `id_producto_fk`, `cantidad`) VALUES
(1, 11, 4, 8),
(2, 6, 3, 11),
(3, 11, 15, 31),
(4, 17, 4, 7),
(5, 4, 15, 17),
(6, 19, 2, 71),
(7, 3, 2, 46),
(8, 16, 1, 35),
(9, 2, 15, 1),
(10, 2, 7, 19),
(11, 9, 10, 14),
(12, 2, 13, 90),
(13, 9, 13, 46),
(14, 7, 5, 94),
(15, 5, 18, 73),
(16, 3, 10, 37),
(17, 4, 5, 66),
(18, 4, 3, 45),
(19, 5, 18, 51),
(20, 15, 17, 50),
(21, 14, 20, 84),
(22, 12, 15, 95),
(23, 16, 2, 3),
(24, 5, 3, 99),
(25, 1, 2, 49),
(26, 5, 20, 81),
(27, 2, 12, 40),
(28, 11, 9, 46),
(29, 3, 6, 86),
(30, 15, 2, 87),
(31, 16, 3, 5),
(32, 17, 7, 98),
(33, 6, 15, 34),
(34, 16, 3, 89),
(35, 12, 1, 98),
(36, 14, 16, 42),
(37, 19, 9, 87),
(38, 3, 13, 10),
(39, 3, 12, 78),
(40, 14, 14, 57),
(41, 11, 10, 100),
(42, 16, 18, 53),
(43, 6, 10, 64),
(44, 10, 8, 41),
(45, 8, 8, 68),
(46, 19, 19, 19),
(47, 3, 5, 83),
(48, 1, 1, 86),
(49, 9, 13, 83),
(50, 20, 17, 85);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida`
--

CREATE TABLE `salida` (
  `Id_salida` bigint(20) NOT NULL,
  `log` text DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salida`
--

INSERT INTO `salida` (`Id_salida`, `log`, `create_at`) VALUES
(1, 'Salio de almacen', '2022-11-22 21:59:49'),
(2, 'Salio de almacen', '2022-11-22 21:59:49'),
(3, 'Se realizo una venta', '2022-11-22 21:59:49'),
(4, 'Se realizo una venta', '2022-11-22 21:59:49'),
(5, 'Se mermo tal', '2022-11-22 21:59:49'),
(6, 'Salio de almacen', '2022-11-22 21:59:49'),
(7, 'Salio de almacen', '2022-11-22 21:59:49'),
(8, 'Se mermo tal', '2022-11-22 21:59:49'),
(9, 'Se realizo una venta', '2022-11-22 21:59:49'),
(10, 'Salio de almacen', '2022-11-22 21:59:50'),
(11, 'Salio de almacen', '2022-11-22 21:59:50'),
(12, 'Salio de almacen', '2022-11-22 21:59:50'),
(13, 'Salio de almacen', '2022-11-22 21:59:50'),
(14, 'Salio de almacen', '2022-11-22 21:59:50'),
(15, 'Salio de almacen', '2022-11-22 21:59:50'),
(16, 'Se realizo una venta', '2022-11-22 21:59:50'),
(17, 'Salio de almacen', '2022-11-22 21:59:50'),
(18, 'Salio de almacen', '2022-11-22 21:59:50'),
(19, 'Se realizo una venta', '2022-11-22 21:59:50'),
(20, 'Salio de almacen', '2022-11-22 21:59:50'),
(21, 'Salio de almacen', '2022-11-22 21:59:50'),
(22, 'Se mermo tal', '2022-11-22 21:59:51'),
(23, 'Se realizo una venta', '2022-11-22 21:59:51'),
(24, 'Se realizo una venta', '2022-11-22 21:59:51'),
(25, 'Se realizo una venta', '2022-11-22 21:59:51'),
(26, 'Se realizo una venta', '2022-11-22 21:59:51'),
(27, 'Se mermo tal', '2022-11-22 21:59:51'),
(28, 'Se mermo tal', '2022-11-22 21:59:51'),
(29, 'Se mermo tal', '2022-11-22 21:59:51'),
(30, 'Salio de almacen', '2022-11-22 21:59:51'),
(31, 'Salio de almacen', '2022-11-22 21:59:51'),
(32, 'Se realizo una venta', '2022-11-22 21:59:51'),
(33, 'Se mermo tal', '2022-11-22 21:59:52'),
(34, 'Se mermo tal', '2022-11-22 21:59:52'),
(35, 'Salio de almacen', '2022-11-22 21:59:52'),
(36, 'Se mermo tal', '2022-11-22 21:59:52'),
(37, 'Salio de almacen', '2022-11-22 21:59:52'),
(38, 'Se realizo una venta', '2022-11-22 21:59:52'),
(39, 'Se mermo tal', '2022-11-22 21:59:52'),
(40, 'Salio de almacen', '2022-11-22 21:59:52'),
(41, 'Salio de almacen', '2022-11-22 21:59:52'),
(42, 'Se realizo una venta', '2022-11-22 21:59:52'),
(43, 'Se mermo tal', '2022-11-22 21:59:52'),
(44, 'Se realizo una venta', '2022-11-22 21:59:52'),
(45, 'Se realizo una venta', '2022-11-22 21:59:52'),
(46, 'Salio de almacen', '2022-11-22 21:59:53'),
(47, 'Se realizo una venta', '2022-11-22 21:59:53'),
(48, 'Salio de almacen', '2022-11-22 21:59:53'),
(49, 'Salio de almacen', '2022-11-22 21:59:53'),
(50, 'Se mermo tal', '2022-11-22 21:59:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `secret_key` varchar(20) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_categoria`);

--
-- Indices de la tabla `ordencompra`
--
ALTER TABLE `ordencompra`
  ADD PRIMARY KEY (`Id_compra`),
  ADD KEY `id_proveedor_fk` (`id_proveedor_fk`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_producto`),
  ADD KEY `id_categoria_fk` (`id_categoria_fk`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id_proveedor`);

--
-- Indices de la tabla `registroentrada`
--
ALTER TABLE `registroentrada`
  ADD PRIMARY KEY (`Id_entrada`),
  ADD KEY `id_producto_fk` (`id_producto_fk`),
  ADD KEY `id_orden_fk` (`id_orden_fk`);

--
-- Indices de la tabla `registrosalida`
--
ALTER TABLE `registrosalida`
  ADD PRIMARY KEY (`Id_registro_s`),
  ADD KEY `id_salida_fk` (`id_salida_fk`),
  ADD KEY `id_producto_fk` (`id_producto_fk`);

--
-- Indices de la tabla `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`Id_salida`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `registroentrada`
--
ALTER TABLE `registroentrada`
  MODIFY `Id_entrada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `registrosalida`
--
ALTER TABLE `registrosalida`
  MODIFY `Id_registro_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ordencompra`
--
ALTER TABLE `ordencompra`
  ADD CONSTRAINT `ordencompra_ibfk_1` FOREIGN KEY (`id_proveedor_fk`) REFERENCES `proveedor` (`Id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria_fk`) REFERENCES `categoria` (`Id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registroentrada`
--
ALTER TABLE `registroentrada`
  ADD CONSTRAINT `registroentrada_ibfk_3` FOREIGN KEY (`id_producto_fk`) REFERENCES `producto` (`Id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registroentrada_ibfk_4` FOREIGN KEY (`id_orden_fk`) REFERENCES `ordencompra` (`Id_compra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registrosalida`
--
ALTER TABLE `registrosalida`
  ADD CONSTRAINT `registrosalida_ibfk_2` FOREIGN KEY (`id_salida_fk`) REFERENCES `salida` (`Id_salida`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registrosalida_ibfk_3` FOREIGN KEY (`id_producto_fk`) REFERENCES `producto` (`Id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
