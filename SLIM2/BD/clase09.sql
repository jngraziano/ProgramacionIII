-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2017 a las 01:23:47
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clase09`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `MAIL` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `CLAVE` int(10) NOT NULL,
  `ESTADO` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `MAIL`, `CLAVE`, `ESTADO`) VALUES
(1, 'ffeaveryear0@newyork', 1234, 'BLOQUEADO'),
(2, 'smcbain1@examiner.co', 1234, 'BLOQUEADO'),
(3, 'bdomokos2@ihg.com', 1234, 'BLOQUEADO'),
(4, 'cwastie3@yale.edu', 1234, 'BLOQUEADO'),
(5, 'ychancelier4@timeson', 1234, 'BLOQUEADO'),
(6, 'rsmaile5@archive.org', 1234, 'BLOQUEADO'),
(7, 'cbauchop6@telegraph.', 1234, 'BLOQUEADO'),
(8, 'cvannoni7@tmall.com', 1234, 'BLOQUEADO'),
(9, 'lwasling8@auda.org.a', 1234, 'BLOQUEADO'),
(10, 'igiacoppoli9@cocolog', 1234, 'BLOQUEADO'),
(11, 'phawkswooda@guardian', 1234, 'BLOQUEADO'),
(12, 'cmcgreyb@cpanel.net', 1234, 'BLOQUEADO'),
(13, 'acaughtc@4shared.com', 1234, 'BLOQUEADO'),
(14, 'rvasenkovd@mapquest.', 1234, 'BLOQUEADO'),
(15, 'rkleuere@mail.ru', 1234, 'BLOQUEADO'),
(16, 'mmacnishf@cbsnews.co', 1234, 'BLOQUEADO'),
(17, 'iwhimpg@bloomberg.co', 1234, 'BLOQUEADO'),
(18, 'ahuycheh@slideshare.', 1234, 'BLOQUEADO'),
(19, 'hdumpletoni@moonfrui', 1234, 'BLOQUEADO'),
(20, 'jtoolinj@google.it', 1234, 'BLOQUEADO'),
(21, 'achartresk@blogs.com', 1234, 'BLOQUEADO'),
(22, 'mpendalll@woothemes.', 1234, 'BLOQUEADO'),
(23, 'lpedycanm@google.com', 1234, 'BLOQUEADO'),
(24, 'mjeanneaun@rediff.co', 1234, 'BLOQUEADO'),
(25, 'takredo@issuu.com', 1234, 'BLOQUEADO'),
(26, 'jsagerp@phoca.cz', 1234, 'BLOQUEADO'),
(27, 'kmackneisq@auda.org.', 1234, 'BLOQUEADO'),
(28, 'toluneyr@msu.edu', 1234, 'BLOQUEADO'),
(29, 'adowleys@virginia.ed', 1234, 'BLOQUEADO'),
(30, 'stoffolonit@trellian', 1234, 'BLOQUEADO'),
(31, 'aleightonu@guardian.', 1234, 'BLOQUEADO'),
(32, 'kphilimorev@webs.com', 1234, 'BLOQUEADO'),
(33, 'gvenablew@php.net', 1234, 'BLOQUEADO'),
(34, 'bbussellx@washington', 1234, 'BLOQUEADO'),
(35, 'kleydeny@ihg.com', 1234, 'BLOQUEADO'),
(36, 'bpitkeathlyz@soundcl', 1234, 'BLOQUEADO'),
(37, 'cchadbourne10@edublo', 1234, 'BLOQUEADO'),
(38, 'csailor11@cnbc.com', 1234, 'BLOQUEADO'),
(39, 'mdecourt12@zdnet.com', 1234, 'BLOQUEADO'),
(40, 'wlitterick13@typepad', 1234, 'BLOQUEADO'),
(41, 'masey14@blog.com', 1234, 'BLOQUEADO'),
(42, 'pbaack15@home.pl', 1234, 'BLOQUEADO'),
(43, 'gizakov16@buzzfeed.c', 1234, 'BLOQUEADO'),
(44, 'smarians17@businessw', 1234, 'BLOQUEADO'),
(45, 'mwitherdon18@so-net.', 1234, 'BLOQUEADO'),
(46, 'cleese19@rambler.ru', 1234, 'BLOQUEADO'),
(47, 'jsparwell1a@earthlin', 1234, 'BLOQUEADO'),
(48, 'lgreeve1b@cargocolle', 1234, 'BLOQUEADO'),
(49, 'cangier1c@walmart.co', 1234, 'BLOQUEADO'),
(50, 'amooreed1d@mail.ru', 1234, 'BLOQUEADO'),
(51, 'vnasey1e@fda.gov', 1234, 'BLOQUEADO'),
(52, 'ttrayling1f@hp.com', 1234, 'BLOQUEADO'),
(53, 'aburriss1g@cbsnews.c', 1234, 'BLOQUEADO'),
(54, 'cpilger1h@census.gov', 1234, 'BLOQUEADO'),
(55, 'cclarkson1i@timesonl', 1234, 'BLOQUEADO'),
(56, 'srichardet1j@google.', 1234, 'BLOQUEADO'),
(57, 'jtyt1k@booking.com', 1234, 'BLOQUEADO'),
(58, 'teverson1l@statcount', 1234, 'BLOQUEADO'),
(59, 'agawler1m@hud.gov', 1234, 'BLOQUEADO'),
(60, 'ipanks1n@nbcnews.com', 1234, 'BLOQUEADO'),
(61, 'lhillyatt1o@imagesha', 1234, 'BLOQUEADO'),
(62, 'gballay1p@fema.gov', 1234, 'BLOQUEADO'),
(63, 'asuttell1q@privacy.g', 1234, 'BLOQUEADO'),
(64, 'gjakubovski1r@multip', 1234, 'BLOQUEADO'),
(65, 'mlermit1s@unesco.org', 1234, 'BLOQUEADO'),
(66, 'sdanzey1t@mozilla.or', 1234, 'BLOQUEADO'),
(67, 'abartlosz1u@pinteres', 1234, 'BLOQUEADO'),
(68, 'mevill1v@oaic.gov.au', 1234, 'BLOQUEADO'),
(69, 'jgrafton1w@twitter.c', 1234, 'BLOQUEADO'),
(70, 'soflaverty1x@epa.gov', 1234, 'BLOQUEADO'),
(71, 'jbenasik1y@indiatime', 1234, 'BLOQUEADO'),
(72, 'mstrain1z@hubpages.c', 1234, 'BLOQUEADO'),
(73, 'mchampe20@princeton.', 1234, 'BLOQUEADO'),
(74, 'mgueny21@nhs.uk', 1234, 'BLOQUEADO'),
(75, 'mcurtayne22@yahoo.co', 1234, 'BLOQUEADO'),
(76, 'jnorcliffe23@walmart', 1234, 'BLOQUEADO'),
(77, 'mmcfarlan24@facebook', 1234, 'BLOQUEADO'),
(78, 'kbranthwaite25@twitt', 1234, 'BLOQUEADO'),
(79, 'jhughes26@icio.us', 1234, 'BLOQUEADO'),
(80, 'sdovington27@ftc.gov', 1234, 'BLOQUEADO'),
(81, 'cgiacomini28@wp.com', 1234, 'BLOQUEADO'),
(82, 'dthurley29@auda.org.', 1234, 'BLOQUEADO'),
(83, 'tstanworth2a@flickr.', 1234, 'BLOQUEADO'),
(84, 'kkildale2b@hao123.co', 1234, 'BLOQUEADO'),
(85, 'fcoxwell2c@zdnet.com', 1234, 'BLOQUEADO'),
(86, 'nmorey2d@macromedia.', 1234, 'BLOQUEADO'),
(87, 'bstarbuck2e@census.g', 1234, 'BLOQUEADO'),
(88, 'eburehill2f@mail.ru', 1234, 'BLOQUEADO'),
(89, 'sdahlback2g@aol.com', 1234, 'BLOQUEADO'),
(90, 'mbeacock2h@mashable.', 1234, 'BLOQUEADO'),
(91, 'nduggan2i@intel.com', 1234, 'BLOQUEADO'),
(92, 'jsidwick2j@over-blog', 1234, 'BLOQUEADO'),
(93, 'cbayfield2k@rakuten.', 1234, 'BLOQUEADO'),
(94, 'vdankov2l@ibm.com', 1234, 'BLOQUEADO'),
(95, 'wvasilevich2m@icio.u', 1234, 'BLOQUEADO'),
(96, 'kbail2n@t.co', 1234, 'BLOQUEADO'),
(97, 'lkerridge2o@comsenz.', 1234, 'BLOQUEADO'),
(98, 'gtyson2p@epa.gov', 1234, 'BLOQUEADO'),
(99, 'vbranston2q@google.c', 1234, 'BLOQUEADO'),
(100, 'cdarrel2r@twitpic.co', 1234, 'BLOQUEADO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
