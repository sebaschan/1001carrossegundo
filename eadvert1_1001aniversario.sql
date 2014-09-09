-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-09-2014 a las 08:45:34
-- Versión del servidor: 5.5.38-35.2-log
-- Versión de PHP: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `eadvert1_1001aniversario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

DROP TABLE IF EXISTS `datos`;
CREATE TABLE IF NOT EXISTS `datos` (
  `nombre` text NOT NULL,
  `telefono` text NOT NULL,
  `cedula` text NOT NULL,
  `carro` text NOT NULL,
  `vende` text NOT NULL,
  `marca` text NOT NULL,
  `modelo` text NOT NULL,
  `ano` text NOT NULL,
  `fbid` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `telefono`, `cedula`, `carro`, `vende`, `marca`, `modelo`, `ano`, `fbid`) VALUES
('Sebastian Rodriguez', '0984155390', '1719086645', 'si', 'si', 'Renault', 'Sandero', '2014', '615480770'),
('Oscar Llivigañay Torres', '0998622556', '1103823082', 'si', 'si', '', '', '', '100000405666393'),
('Diego Te', '0995570212', '1719753798', 'no', 'no', '', '', '', '100003958979065'),
('Margarita Cordovez', '0999566110', '1711266674', 'si', 'cambiar', 'toyota', 'fortuner', '2011', '502572425'),
('Vivi Erazo', '0984581905', '1716778301', 'no', '', '', '', '', '1057983337'),
('Byron Daniel', '0983527949', '1724399751', 'si', 'cambiar', 'NISSAN', 'PATHFINDER ', '98', '100005843504364'),
('Jose Rogelio Nicolalde Cruz', '0984444559', '1716168966', 'no', 'comprar', '', '', '', '100000513338799'),
('Ana Domínguez', '0992991778', '1715181333', 'no', 'comprar', '', '', '', '557630241'),
('Santiago Salas', '0999728023', '1712894607', 'si', 'vender', 'renault', 'clio', '2005', '1166930386'),
('Luis Paez', '0991976207', '1717384489', 'no', 'comprar', '', '', '', '1830292549'),
('Marì­a Gabriela Rivadeneira', '0985044657', '1719262915', 'no', 'comprar', '', '', '', '100000618221467'),
('Andres Bonilla Fernandez', '0987312971', '1717545956', 'no', 'comprar', '', '', '', '100000431747857'),
('Andres Bonilla Fernandez', '0987312971', '1717545956', 'no', 'comprar', '', '', '', '100000431747857'),
('Vico Sacanambuy Victor', '0998872962', '0604036483', 'no', 'comprar', '', '', '', '100001865049920'),
('Renan Borja', '0979119682', '1719873653', 'no', 'comprar', '', '', '', '100005685761751'),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('Sarita Jativa', '0983932511', '1720065786', 'no', 'comprar', '', '', '', '100000343787328'),
('Carlos Amores', '0982290175', '0502363542', 'si', 'comprar', 'skoda', 'fabia', '2006', '707503335'),
('Edgar Quishpe', '2566492', '1714336870', 'no', 'comprar', '', '', '', '1180662800'),
('ERIC TINOCO CLAVIJO', '0997274466', '1721747069', 'si', 'comprar', 'TOYOTA', 'PRIUS C', '2012', '503187679'),
('Mariuxi Perez Monge', '0992058771', '1713567640', 'si', 'comprar', '', '', '', '557940730'),
('Christian NoroÃ±a', '0998334300', '1715863294', 'si', 'comprar', 'VOLKSWAGEN', 'ESCARABAJO', '1980', '100000054264734'),
('Gaby MuÃ±oz', '0998317923', '1716807241', 'no', 'comprar', '', '', '', '1666912259'),
('Alexandra Margarita', '', '', 'no', 'cambiar', '', '', '', '76904365'),
('Dario N Toapanta', '0969067416', '1722342316', 'no', 'comprar', '', '', '', '1377003665'),
('Laura CalderÃ³n Jaramillo', '2788233 /0995229617', '1707810568', 'no', 'comprar', '', '', '', '100002607004773');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntos`
--

DROP TABLE IF EXISTS `puntos`;
CREATE TABLE IF NOT EXISTS `puntos` (
  `fbid` text NOT NULL,
  `pts` text NOT NULL,
  `checkp` text NOT NULL,
  `fecha` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puntos`
--

INSERT INTO `puntos` (`fbid`, `pts`, `checkp`, `fecha`) VALUES
('677359740', '100', '1', 'Mon, 08 Sep 2014'),
('502572425', '100', '1', 'Tue, 09 Sep 2014'),
('615480770', '100', '1', 'Mon, 08 Sep 2014'),
('100003958979065', '100', '1', 'Mon, 08 Sep 2014'),
('100000405666393', '100', '1', 'Mon, 08 Sep 2014'),
('100000405666393', '100', '1', 'Mon, 08 Sep 2014'),
('100003958979065', '100', '1', 'Mon, 08 Sep 2014'),
('1057983337', '100', '1', 'Mon, 08 Sep 2014'),
('100000581603891', '100', '1', 'Mon, 08 Sep 2014'),
('1057983337', '100', '1', 'Mon, 08 Sep 2014'),
('502572425', '100', '1', 'Tue, 09 Sep 2014'),
('556437252', '100', '1', 'Mon, 08 Sep 2014'),
('100005843504364', '100', '1', 'Mon, 08 Sep 2014'),
('100005843504364', '100', '1', 'Mon, 08 Sep 2014'),
('100000513338799', '100', '1', 'Mon, 08 Sep 2014'),
('100000973298200', '100', '1', 'Mon, 08 Sep 2014'),
('100000513338799', '100', '1', 'Mon, 08 Sep 2014'),
('1672672543', '100', '1', 'Mon, 08 Sep 2014'),
('100001049295728', '100', '1', 'Mon, 08 Sep 2014'),
('100000129024464', '100', '1', 'Mon, 08 Sep 2014'),
('557630241', '100', '1', 'Mon, 08 Sep 2014'),
('557630241', '100', '1', 'Mon, 08 Sep 2014'),
('1166930386', '100', '1', 'Mon, 08 Sep 2014'),
('1166930386', '100', '1', 'Mon, 08 Sep 2014'),
('1830292549', '100', '1', 'Mon, 08 Sep 2014'),
('1830292549', '100', '1', 'Mon, 08 Sep 2014'),
('100000618221467', '100', '1', 'Mon, 08 Sep 2014'),
('100000618221467', '100', '1', 'Mon, 08 Sep 2014'),
('100000431747857', '100', '1', 'Mon, 08 Sep 2014'),
('100000431747857', '100', '1', 'Mon, 08 Sep 2014'),
('100000431747857', '100', '1', 'Mon, 08 Sep 2014'),
('100001865049920', '100', '1', 'Mon, 08 Sep 2014'),
('100005685761751', '100', '1', 'Mon, 08 Sep 2014'),
('100001865049920', '100', '1', 'Mon, 08 Sep 2014'),
('100005685761751', '100', '1', 'Mon, 08 Sep 2014'),
('', '100', '1', 'Mon, 08 Sep 2014'),
('', '100', '1', 'Mon, 08 Sep 2014'),
('100000343787328', '100', '1', 'Mon, 08 Sep 2014'),
('100000343787328', '100', '1', 'Mon, 08 Sep 2014'),
('707503335', '100', '1', 'Tue, 09 Sep 2014'),
('707503335', '100', '1', 'Tue, 09 Sep 2014'),
('1180662800', '100', '1', 'Tue, 09 Sep 2014'),
('748897514', '100', '1', 'Tue, 09 Sep 2014'),
('1180662800', '100', '1', 'Tue, 09 Sep 2014'),
('503187679', '100', '1', 'Tue, 09 Sep 2014'),
('503187679', '100', '1', 'Tue, 09 Sep 2014'),
('557940730', '100', '1', 'Tue, 09 Sep 2014'),
('557940730', '100', '1', 'Tue, 09 Sep 2014'),
('100000054264734', '100', '1', 'Tue, 09 Sep 2014'),
('100000054264734', '100', '1', 'Tue, 09 Sep 2014'),
('1666912259', '100', '1', 'Tue, 09 Sep 2014'),
('1666912259', '100', '1', 'Tue, 09 Sep 2014'),
('76904365', '100', '1', 'Tue, 09 Sep 2014'),
('76904365', '100', '1', 'Tue, 09 Sep 2014'),
('1377003665', '100', '1', 'Tue, 09 Sep 2014'),
('1377003665', '100', '1', 'Tue, 09 Sep 2014'),
('100002607004773', '100', '1', 'Tue, 09 Sep 2014'),
('100002607004773', '100', '1', 'Tue, 09 Sep 2014');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `fbid` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `cumple` text NOT NULL,
  `sexo` text NOT NULL,
  `ciudad` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`fbid`, `nombre`, `apellido`, `username`, `email`, `cumple`, `sexo`, `ciudad`) VALUES
('615480770', 'Sebastian', 'Rodriguez', 'SeMaRoGa', 'sebas_can@hotmail.com', '02/23/1984', 'male', 'Quito, Ecuador'),
('502572425', 'Margarita', 'Cordovez', 'margarita.cordovez', 'margacordovez@hotmail.com', '12/10/1984', 'female', 'CumbayÃ¡'),
('100003958979065', 'Diego', 'Te', 'diego.te.31', 'ddominguez@tebusco.com.ec', '11/19/1980', 'male', 'Quito, Ecuador'),
('100000405666393', 'Oscar', 'LlivigaÃ±ay Torres', 'javitoptorres', 'osktorres@gmail.com', '09/23/1987', 'male', ''),
('1057983337', 'Vivi', 'Erazo', 'vivi.erazo.58', 'vivierazog@gmail.com', '02/19/1982', 'female', ''),
('677359740', 'Luis', 'Masuelli', 'RiseOfTheInnerRealm', 'luismasuelli@hotmail.com', '12/25/1985', 'male', 'Quito, Ecuador'),
('100005843504364', 'Byron', 'Daniel', 'byron.daniel.374', 'byron.vilema122@gmail.com', '08/04/1990', 'male', 'Quito, Ecuador'),
('100000513338799', 'Jose Rogelio', 'Nicolalde Cruz', 'joserogelio.nicolaldecruz', 'josenic80@hotmail.com', '05/22/1980', 'male', ''),
('100000973298200', 'Alcivar', 'Chicaiza', 'alcivar.chiciaza', 'santiagochicaiza@yahoo.es', '08/24/1989', 'male', ''),
('1672672543', 'AndRe', 'Cruz', 'andre.cruz.963', 'andyc_kchido@yahoo.com', '12/16/1984', 'female', ''),
('100001049295728', 'Carlos', 'GualotuÃ±a', 'carlos.gualotuna.3', 'gualojo@hotmail.com', '07/04/1991', 'male', ''),
('100000129024464', 'Diani', 'Saavedra', 'diani.saavedra', 'dicasaar@hotmail.com', '06/10/1986', 'female', 'Quito, Ecuador'),
('557630241', 'Anys', 'Dc', 'anys.dc', 'anysdc@gmail.com', '05/22/1984', 'female', ''),
('1166930386', 'Santiago', 'Salas', 'santiago.tolstoy', 'sant_75@yahoo.com', '10/19/1975', 'male', 'Quito, Ecuador'),
('1830292549', 'Luis', 'Paez', 'paezjean', 'paezjean@hotmail.com', '10/28/1981', 'male', 'Santo Domingo, Pichincha, Ecuador'),
('100000618221467', 'MarÃ­a Gabriela', 'Rivadeneira', 'mariagabriela.rivadeneira', 'gabita.1985@hotmail.com', '06/06/1985', 'female', ''),
('100000431747857', 'Andres', 'Bonilla Fernandez', 'andres.ebocasbonilla', 'andres_bonilla_1991@hotmail.com', '09/03/1991', 'male', 'Quito, Ecuador'),
('100001865049920', 'Vico', 'Sacanambuy Victor', 'vico.sacanambuyvictor', '', '02/15/1983', 'male', 'Tena, Ecuador'),
('100005685761751', 'Renan', 'Borja', 'juanrenanborja', 'juanborja@outlook.com', '02/07/1986', 'male', ''),
('100000343787328', 'Sarita', 'JÃ¡tiva', 'sarita.jativa', 'saritiupaty@yahoo.es', '07/06/1990', 'female', ''),
('707503335', 'Carlos', 'Amores', 'xolutionsdesign.ec', 'carlos.amores.olivo@gmail.com', '10/23/1978', 'male', ''),
('1180662800', 'Edgar', 'Quishpe', 'edgar.quishpe.7', 'edd_chino@hotmail.com', '07/19/1983', 'male', 'Quito, Ecuador'),
('748897514', 'Fabricio', 'Salazar', 'fabriciosalazar666', 'fabriuxi@hotmail.com', '11/25/1987', 'male', 'Quito, Ecuador'),
('503187679', 'Eric', 'Tinoco', 'eric.tinoco.1', 'eric.stc@hotmail.com', '05/13/1989', 'male', ''),
('557940730', 'Mariuxi', 'Perez Monge', 'mariuxipm', 'mariuxip@hotmail.com', '04/17/1984', 'female', ''),
('100000054264734', 'Christian', 'NoroÃ±a', 'CACHICALDO', 'crisuco018@hotmail.com', '07/01/1987', 'male', 'Quito, Ecuador'),
('1666912259', 'Gaby', 'MuÃ±oz', 'gaby.munoz.54922', 'gaby_peque_06@hotmail.com', '11/06/1987', 'female', 'Quito, Ecuador'),
('76904365', 'Alexandra', 'Margarita', 'alexandra.balarezo', 'alexandra.balarezo@gmail.com', '12/23/1987', 'female', ''),
('1377003665', 'Dario N', 'Toapanta', 'darion.toapanta', 'enigmasdelmasalla@hotmail.com', '02/27/1987', 'male', 'Quito, Ecuador'),
('100002607004773', 'Laura', 'CalderÃ³n Jaramillo', 'laura.calderonjaramillo', 'caljala@live.com', '08/24/1955', 'female', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
