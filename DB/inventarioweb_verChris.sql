-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2022 a las 07:24:20
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

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
(51, 'Bebidas'),
(52, 'Cremeria'),
(53, 'Dulceria'),
(54, 'Verdura');

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
(51, 'Coca-Cola', 83, 15, 5, '100', '123456789', '2.00', NULL, 1, 51),
(52, 'Chocolate Kinder Delice', 16, 15, 5, '101', '1234567890', '2.00', NULL, 1, 53);

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
(58, 221203210, 51, 1),
(59, 221203210, 52, 2),
(60, 221203953, 51, 1),
(61, 221203953, 52, 2),
(62, 221203754, 51, 1),
(63, 221203754, 52, 2),
(64, 221203556, 51, 1),
(65, 221203556, 52, 2),
(66, 221203126, 51, 1),
(67, 221203126, 52, 2),
(68, 221203231, 51, 1),
(69, 221203231, 52, 2),
(70, 221203848, 51, 1),
(71, 221203848, 52, 2),
(72, 221203001, 51, 1),
(73, 221203001, 52, 2),
(74, 221204476, 51, 1),
(75, 221204476, 52, 2),
(76, 221204957, 51, 1),
(77, 221204957, 52, 2),
(78, 221204746, 51, 1),
(79, 221204746, 52, 2),
(80, 221204009, 51, 1),
(81, 221204009, 52, 2),
(82, 221204816, 51, 1),
(83, 221204816, 52, 2),
(84, 221204935, 51, 1),
(85, 221204935, 52, 2);

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
(221203001, 'Se registro una salida por: SALE API-Success', '2022-12-03 23:54:37'),
(221203126, 'Se registro una salida por: SALE API-Success', '2022-12-03 23:52:17'),
(221203210, 'Se registro una salida por: SALE API-Success', '2022-12-03 22:59:54'),
(221203231, 'Se registro una salida por: SALE API-Success', '2022-12-03 23:52:27'),
(221203556, 'Se registro una salida por: SALE API-Success', '2022-12-03 23:47:17'),
(221203754, 'Se registro una salida por: SALE API-Success', '2022-12-03 23:45:21'),
(221203848, 'Se registro una salida por: SALE API-Success', '2022-12-03 23:52:45'),
(221203953, 'Se registro una salida por: SALE API-Success', '2022-12-03 23:36:56'),
(221204009, 'Se registro una salida por: SALE API-Success', '2022-12-04 00:15:02'),
(221204476, 'Se registro una salida por: SALE API-Success', '2022-12-04 00:01:19'),
(221204746, 'Se registro una salida por: SALE API-Success', '2022-12-04 00:12:17'),
(221204816, 'Se registro una salida por: SALE API-Success', '2022-12-04 00:15:17'),
(221204935, 'Se registro una salida por: SALE API-Success', '2022-12-04 00:23:58'),
(221204957, 'Se registro una salida por: SALE API-Success', '2022-12-04 00:12:03');

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
  MODIFY `Id_registro_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

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
