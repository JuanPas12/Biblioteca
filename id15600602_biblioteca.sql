-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2020 a las 05:19:53
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id15600602_biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorialibros`
--

CREATE TABLE `categorialibros` (
  `idCategoria` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorialibros`
--

INSERT INTO `categorialibros` (`idCategoria`, `Nombre`) VALUES
(1, 'Magia'),
(2, 'Geografia'),
(3, 'Ciencias'),
(4, 'Fantasia'),
(5, 'Drama'),
(6, 'Matematicas'),
(7, 'Comedia'),
(8, 'Biologia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibro` int(11) NOT NULL,
  `Titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Editorial` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Anio` int(11) NOT NULL,
  `NoEdicion` int(11) NOT NULL,
  `Autor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Paginas` int(11) NOT NULL,
  `Idioma` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `FechaRegistroLibro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibro`, `Titulo`, `Editorial`, `Anio`, `NoEdicion`, `Autor`, `Paginas`, `Idioma`, `idCategoria`, `FechaRegistroLibro`) VALUES
(0, '-', '0', 0, 0, '0', 0, '0', 0, NULL),
(1, 'Brown Bunny, The', 'Braun, Boyle and Marks', 1998, 7, 'Cleon Kilcoyne', 1928, 'Mongolian', 1, '2020-08-30'),
(2, '7 Virgins (7 vírgenes)', 'Will Group', 1996, 8, 'Harlie Disley', 678, 'Malay', 8, '2020-04-28'),
(3, 'Arrival, The', 'Walter, Medhurst and Zemlak', 2003, 11, 'Roosevelt Golborne', 416, 'Dzongkha', 1, '2020-01-19'),
(4, 'Harem suare', 'Tremblay-Leffler', 2004, 5, 'Tess O\' Markey', 651, 'Yiddish', 4, '2020-08-16'),
(5, 'Michael Clayton', 'Dare, Nicolas and Schoen', 2002, 18, 'Anny Werner', 678, 'Bulgarian', 8, '2020-10-12'),
(6, 'Knight Moves', 'Kirlin-Johnston', 2006, 15, 'Archambault Clutton', 577, 'Albanian', 4, '2020-02-01'),
(7, 'Swimfan', 'Smith, Goodwin and Dooley', 1983, 18, 'Maury Sherwen', 1311, 'Azeri', 4, '2020-12-30'),
(8, 'Unknown Soldier, The (Unbekannte Soldat, Der)', 'Bashirian, Ryan and Kerluke', 2006, 12, 'Conroy Worsam', 1347, 'Bengali', 7, '2020-03-04'),
(9, 'Monsieur Batignole', 'Harvey, Grady and MacGyver', 1999, 4, 'Syd Hughesdon', 273, 'Arabic', 1, '2020-11-26'),
(10, 'Gabriela', 'Ondricka-Thompson', 2008, 6, 'Charisse Snookes', 1085, 'Swedish', 7, '2020-08-09'),
(11, 'Born to Defense (Zhong hua ying xiong)', 'Larkin and Sons', 1999, 18, 'Riki Amorts', 1756, 'Hiri Motu', 5, '2020-02-26'),
(12, 'Love Story', 'Raynor, Ebert and Paucek', 1998, 8, 'Bernadene Barton', 541, 'Kashmiri', 1, '2020-01-18'),
(13, 'Pusher', 'Kassulke, O\'Hara and Krajcik', 2002, 15, 'Timoteo Mettetal', 1471, 'Moldovan', 2, '2020-06-10'),
(14, 'Weight of Water, The', 'Wyman-Stark', 2003, 1, 'Othilie Clowsley', 1775, 'Danish', 3, '2020-06-11'),
(15, 'Life in a Day', 'Schmidt Group', 2010, 4, 'Fidelia Cussen', 430, 'Thai', 5, '2020-04-14'),
(16, 'Every Girl Should Be Married', 'Denesik-Walker', 2000, 8, 'Raychel de Zamora', 1338, 'Swati', 2, '2020-04-24'),
(17, 'Nanny, The', 'Nicolas-Turner', 2008, 6, 'Wylie MacGillavery', 627, 'Tswana', 3, '2020-05-28'),
(18, 'Eagle Has Two Heads, The (L\'aigle à deux têtes)', 'Yundt, Nienow and Jacobi', 2006, 1, 'Francyne Chable', 1005, 'German', 6, '2020-02-09'),
(19, 'Ace Ventura: When Nature Calls', 'Fritsch Inc', 2011, 19, 'Flem Mower', 571, 'Marathi', 4, '2020-05-02'),
(20, 'Bang Boom Bang - Ein todsicheres Ding', 'Ritchie, Quigley and Feest', 2002, 16, 'Vonnie Josephs', 440, 'Pashto', 8, '2020-03-16'),
(21, 'Orders Signed in White', 'Rippin, Dare and Wolf', 2003, 16, 'Felix Elverston', 1327, 'Burmese', 2, '2020-01-01'),
(22, 'Evergreen', 'Langosh-Spinka', 1994, 3, 'Martynne Clapshaw', 1729, 'Tetum', 2, '2020-06-07'),
(23, 'Nothing to Lose', 'King-Paucek', 2008, 5, 'Bordie Colwell', 746, 'Montenegrin', 4, '2020-08-17'),
(24, 'Terror\'s Advocate (Avocat de la terreur, L\')', 'Fahey LLC', 2011, 10, 'Thomasa Suttle', 599, 'Croatian', 2, '2020-09-21'),
(25, 'Bill Cunningham New York', 'Bode-Gutkowski', 2002, 12, 'Willi Waltho', 800, 'Chinese', 5, '2020-08-03'),
(26, 'Questioning Darwin', 'Murphy and Sons', 1984, 19, 'Winona Syversen', 436, 'Bosnian', 3, '2020-02-18'),
(27, 'Tomorrow, the World!', 'Labadie Inc', 2003, 14, 'Terrance Dobbson', 190, 'Czech', 1, '2020-07-13'),
(28, 'Plaza Suite', 'Kassulke-Jacobson', 2006, 1, 'Harland Ayton', 1431, 'Bosnian', 3, '2020-08-17'),
(29, 'Mortal Thoughts', 'Cormier LLC', 1992, 7, 'Adham Magson', 1894, 'Korean', 8, '2020-03-24'),
(30, 'Loss of a Teardrop Diamond, The', 'Krajcik Group', 2013, 18, 'Giorgia Gibberd', 1190, 'Gujarati', 7, '2020-11-19'),
(31, 'Poker House, The', 'Graham-Boyer', 2006, 3, 'Bunnie Parrott', 1734, 'West Frisian', 7, '2020-05-11'),
(32, 'Cinderfella', 'Bartoletti, Jast and Collier', 1998, 1, 'Dee dee Heffron', 112, 'Gagauz', 7, '2020-11-22'),
(33, 'Don Q Son of Zorro', 'Hermiston, Moore and Schaefer', 2010, 10, 'Lynnette Garnett', 1799, 'Lao', 2, '2020-03-24'),
(34, 'Citizen Cohn', 'Kuhic, Hettinger and Hammes', 2010, 2, 'Townsend Tolossi', 622, 'Georgian', 8, '2020-06-14'),
(35, 'Last Laugh, The (Letzte Mann, Der)', 'Nienow Inc', 1998, 6, 'Max Feldmus', 1587, 'Northern Sotho', 4, '2020-06-28'),
(36, 'The Lunchbox', 'Bernier-Shields', 1992, 20, 'Solomon Blincoe', 1822, 'Kyrgyz', 2, '2020-11-20'),
(37, 'Frank and Ollie', 'VonRueden and Sons', 1987, 13, 'Talbert Blackway', 950, 'Polish', 5, '2020-02-22'),
(38, 'Miss Pettigrew Lives for a Day', 'Zemlak, Boyer and Collier', 1999, 18, 'Jordan Tedorenko', 1551, 'Georgian', 7, '2020-07-06'),
(39, '10 minutes (10 minuta)', 'Weber, Bruen and Rohan', 1996, 3, 'Casey Klaesson', 1687, 'Kazakh', 5, '2020-10-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pr`
--

CREATE TABLE `pr` (
  `idPrestamo` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idLibrosPrestados` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `HoraPrestamo` datetime NOT NULL,
  `HoraEntregaPrestamo` datetime DEFAULT NULL,
  `EstadoPrestamo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pr`
--

INSERT INTO `pr` (`idPrestamo`, `idUsuario`, `idLibrosPrestados`, `HoraPrestamo`, `HoraEntregaPrestamo`, `EstadoPrestamo`) VALUES
(1, 1, '1', '2020-12-10 19:09:01', '2020-12-07 20:09:01', 1),
(2, 1, '3', '2020-12-09 16:51:19', '2020-12-09 16:58:19', 1),
(3, 1, '2', '2020-12-10 19:09:01', NULL, 1),
(4, 7, '39,10,8', '2020-12-09 23:01:39', NULL, 1),
(5, 9, '39', '2020-12-09 23:02:26', '2020-12-09 23:32:08', 0),
(6, 9, '39', '2020-12-09 23:02:33', '2020-12-09 17:19:37', 0),
(7, 10, '31', '2020-12-09 23:34:48', '2020-12-09 23:35:40', 0),
(8, 5, '8', '2020-12-10 17:19:50', NULL, 1),
(9, 10, '3', '2020-12-08 18:03:16', NULL, 1),
(10, 10, '10', '2020-12-11 00:01:06', NULL, 1),
(11, 9, '9', '2020-12-11 00:05:15', NULL, 1),
(12, 10, '10', '2020-12-11 00:06:27', NULL, 1),
(15, 24, '0,0,0', '2020-12-11 00:26:28', '2020-12-11 00:29:34', 0),
(16, 10, '36', '2020-12-11 00:29:06', NULL, 1),
(17, 20, '0,0,0,0,0', '2020-12-11 00:33:16', NULL, 1),
(18, 10, '1', '2020-12-15 22:17:44', '2020-12-15 22:17:49', 1);

--
-- Disparadores `pr`
--
DELIMITER $$
CREATE TRIGGER `IncrementarPrestamos` AFTER INSERT ON `pr` FOR EACH ROW UPDATE Usuarios SET PrestamosRealizados = PrestamosRealizados+1 WHERE idUsuario=(SELECT idUsuario from Pr WHERE idPrestamo = (select max(idPrestamo) FROM Pr))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL,
  `Nombre` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `LibrosMaximos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `Nombre`, `LibrosMaximos`) VALUES
(1, 'Básico', 1),
(2, 'Avanzado', 3),
(3, 'Premium', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ApPaterno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ApMaterno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idTipoUsuario` int(11) NOT NULL,
  `CURP` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `FechaRegistroUsuario` date NOT NULL,
  `PrestamosRealizados` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `ApPaterno`, `ApMaterno`, `Telefono`, `Email`, `idTipoUsuario`, `CURP`, `FechaRegistroUsuario`, `PrestamosRealizados`) VALUES
(1, 'Jose', 'Tafolla', 'Soles', '3267896534', 'juanptafolla@gmail.com', 1, 'TABJ000712HMNFNNA0', '2020-12-08', 0),
(3, 'Geoffrey', 'Villar', 'Frewer', '7005493966', 'gfrewer0@xinhuanet.com', 3, 'KUHR520588HKU03BJV', '2020-02-22', 0),
(4, 'Lil', 'Cotesford', 'Basler', '5218726894', 'lbasler1@hexun.com', 2, 'MQOQ285576HVAWBZR8', '2020-03-16', 0),
(5, 'Nerta', 'Tregonna', 'Hovy', '7306912121', 'nhovy2@google.cn', 1, 'PDDT528473HXIX28IT', '2020-06-27', 0),
(6, 'Pauly', 'Keble', 'Golds', '4048556394', 'pgolds3@theguardian.com', 2, 'CHGF456389HQIR0QKP', '2020-10-31', 0),
(7, 'Ginevra', 'Ponton', 'Keyden', '1359707269', 'gkeyden4@bigcartel.com', 3, 'ZXNI213526HGHAE5S7', '2020-08-23', 0),
(8, 'Kelsey', 'Hallad', 'Alderwick', '9222733900', 'kalderwick5@t.co', 3, 'ZAJN192054HMAQ1609', '2020-02-02', 0),
(9, 'Gwyn', 'Cahn', 'FitzGilbert', '8716328997', 'gfitzgilbert6@kickstarter.com', 1, 'IVRR549270HTD2N7D3', '2020-08-22', 0),
(10, 'Bentley', 'Wattam', 'Moulder', '5231185730', 'bmoulder7@cbsnews.com', 1, 'YTKD889459HUKW1NFV', '2020-11-04', 1),
(11, 'Javier', 'MacPhail', 'Chettle', '5692620914', 'jchettle8@dmoz.org', 1, 'TVXR527183HLK3K6PI', '2020-12-08', 0),
(12, 'Goldie', 'Horning', 'Schelle', '1525728262', 'gschelle9@typepad.com', 3, 'ETOH057916HGHWNNJA', '2020-11-19', 0),
(13, 'Tedie', 'Gostling', 'Huerta', '4659181067', 'thuertaa@sphinn.com', 2, 'JEEZ372518HYVHULKQ', '2020-11-30', 0),
(14, 'Dario', 'Dobing', 'Sallans', '9967780095', 'dsallansb@chronoengine.com', 2, 'WOQG196010HNSRR1KG', '2020-09-24', 0),
(15, 'Whitney', 'Aartsen', 'Caldicot', '9933085806', 'wcaldicotc@pen.io', 2, 'OZRD555101HAIA6AII', '2020-01-18', 0),
(16, 'Brandie', 'Gyves', 'Sinnott', '8263752266', 'bsinnottd@harvard.edu', 1, 'ORLZ104561HZLGS1IH', '2020-05-05', 0),
(17, 'Farah', 'MacNeachtain', 'Maynell', '6534461499', 'fmaynelle@deliciousdays.com', 2, 'EMUH167169HJTFRNG9', '2020-10-19', 0),
(18, 'Bryana', 'Rucklesse', 'Pistol', '6082099415', 'bpistol0@fc2.com', 2, 'QPRR006325MXN07CS4', '2020-05-23', 0),
(19, 'Letizia', 'Beetham', 'Ferrillio', '6864946349', 'lferrillio1@scribd.com', 1, 'NXKT720351MIOFUGA1', '2020-07-31', 0),
(20, 'Brittne', 'Desantis', 'Inskipp', '5854872439', 'binskipp2@pen.io', 3, 'BTOT207589MTFPZQWH', '2020-05-22', 0),
(21, 'Hatty', 'Mephan', 'Surmeyers', '1293609382', 'hsurmeyers3@cnet.com', 1, 'KRLH463324MTYQQUXK', '2020-03-12', 0),
(22, 'Clemmie', 'Brealey', 'Iron', '5511510013', 'ciron4@nasa.gov', 3, 'BPDI758782MSQAT5Y9', '2020-09-15', 0),
(23, 'Elora', 'Camus', 'Reddish', '5021611788', 'ereddish5@dmoz.org', 3, 'YRSK152663MAA09Y8L', '2020-12-13', 0),
(24, 'Annamarie', 'Turbefield', 'Wynes', '3994244653', 'awynes6@fastcompany.com', 2, 'WFFC874794MXEE1BUV', '2020-09-25', 0),
(25, 'Winonah', 'Scading', 'Clarson', '7823516395', 'wclarson7@google.es', 1, 'CBEV896760MLEG4243', '2020-09-22', 0),
(26, 'Vitia', 'Rearie', 'Hatton', '5443740460', 'vhatton8@springer.com', 3, 'PRDO938921MWL8FVOL', '2020-08-26', 0),
(27, 'Maud', 'Spering', 'Broseman', '9912425218', 'mbroseman9@delicious.com', 3, 'JFPL919362MLTATR1J', '2020-12-07', 0),
(28, 'Erinn', 'Giller', 'Puddifer', '7383952554', 'epuddifera@list-manage.com', 2, 'HNGM591605MLDXSFCI', '2020-01-21', 0),
(29, 'Tildie', 'Jeffcoat', 'McGeffen', '4095840402', 'tmcgeffenb@weather.com', 3, 'TGJN001838MWJS7T3U', '2020-10-28', 0),
(30, 'Marcile', 'Kennedy', 'Kaygill', '2854232221', 'mkaygillc@hud.gov', 1, 'FFFT845578MWJ2RONX', '2020-09-04', 0),
(31, 'Kaleena', 'Pardie', 'Ramsier', '2152085783', 'kramsierd@mlb.com', 3, 'MBCK386451MIFHCSKB', '2020-10-02', 0),
(32, 'Miriam', 'Simao', 'Gosford', '6443557665', 'mgosforde@globo.com', 2, 'EEHZ967545MBFAPGMO', '2020-10-17', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorialibros`
--
ALTER TABLE `categorialibros`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`);

--
-- Indices de la tabla `pr`
--
ALTER TABLE `pr`
  ADD PRIMARY KEY (`idPrestamo`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorialibros`
--
ALTER TABLE `categorialibros`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `pr`
--
ALTER TABLE `pr`
  MODIFY `idPrestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
