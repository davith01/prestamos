-- UTC Colombia
SET time_zone = "-05:00";

--
-- Base de datos: `prestamos_bd`
--
CREATE DATABASE IF NOT EXISTS `prestamos_bd` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `prestamos_bd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

DROP TABLE IF EXISTS `prestamos_bd`.`clients`;
CREATE TABLE IF NOT EXISTS `prestamos_bd`.`clients` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `birth_date` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `genere` int(1) DEFAULT NULL COMMENT 'valores 1:Masculino 2;Femenino',
  `type` int(1) NOT NULL COMMENT 'valores 1:Cliente 2:Oficina',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT 'valores 1:Activo 2:Eliminado',
  `registry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `prestamos_bd`.`users`;
CREATE TABLE IF NOT EXISTS `prestamos_bd`.`users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `registry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `prestamos_bd`.`clients` (`id`, `name`, `last_name`, `birth_date`, `image`, `genere`, `type`, `status`, `registry_date`) VALUES
(1, 'diego ruiz', 'mejia', '2019-08-16', NULL, 1, 1, 0, '2019-08-03 20:36:20'),
(3, 'carla', 'jiraldo', '2019-08-05', NULL, 2, 1, 1, '2019-08-03 20:36:20'),
(5, 'Sue', 'Kirby', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:20'),
(6, 'Wade', 'Orozco', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(7, 'Brett', 'Hobbs', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(8, 'Kate', 'Rollins', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(9, 'Joanna', 'Wilkins', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(10, 'Michael', 'Novak', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(11, 'Blayne', 'Chase', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(12, 'Sheridan', 'Humphrey', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(13, 'Sean', 'Gibson', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(14, 'Francis', 'Mayer', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(15, 'Blake', 'Daugherty', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(16, 'Elein', 'Fletcher', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(17, 'Taylore', 'Crawford', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(18, 'Janetta', 'Russell', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(19, 'Julian', 'Brady', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(20, 'Sherleen', 'Pratt', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(21, 'Bree', 'Brennan', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(22, 'Lillian', 'Novak', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(23, 'Malachi', 'Sutton', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(24, 'Lynn', 'Pineda', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(25, 'Levi', 'Bridges', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(26, 'Jeremy', 'Christian', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(27, 'Byron', 'Scott', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(28, 'Taye', 'Yoder', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(29, 'Trevor', 'Mann', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(30, 'Hope', 'Ayers', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(31, 'Brighton', 'Shepherd', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(32, 'Rita', 'Khan', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(33, 'Arcadio', 'Ferrer', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(34, 'Patricio', 'Pérez', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(35, 'Mercedes', 'Ortega', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(36, 'Valentín', 'Gil', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(37, 'Alejo', 'Giménez', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(38, 'Ángeles', 'Rodríguez', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(39, 'Germán', 'Vargas', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(40, 'Cayo', 'Santos', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(41, 'Anatolio', 'Aguilar', NULL, NULL, 1, 1, 1, '2019-08-03 21:20:50'),
(42, 'Vanesa', 'Cruz', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(43, 'Demócrito', 'Román', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(44, 'Damon', 'Hamilton', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(45, 'Eli', 'Booth', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(46, 'Joseph', 'Stanley', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(47, 'Ricardo', 'Spencer', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(48, 'Lynn', 'Kramer', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(49, 'Imogen', 'Escobar', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(50, 'Joan', 'Moses', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(51, 'Gregory', 'Arnold', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(52, 'Jack', 'Dunlap', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(53, 'Aaron', 'Terry', NULL, 'resources/images/clients/img.jpg', 2, 1, 1, '2019-08-03 21:20:50'),
(54, 'Ocean', 'Hood', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(55, 'Natalie', 'Keith', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(56, 'Imogen', 'Mitchell', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(57, 'Breean', 'Harvey', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(58, 'Byron', 'Meadows', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(59, 'Marguerite', 'Gill', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(60, 'Caylen', 'Holland', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(61, 'Lillian', 'Gardner', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(62, 'Brandt', 'Atkins', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(63, 'Bailey', 'Mcgrath', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(64, 'Ellice', 'Coffey', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(65, 'Oscar', 'Serrano', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(66, 'Isaac', 'Wilkinson', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(67, 'Caleb', 'Bates', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(68, 'Annabel', 'Frey', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(69, 'Juliet', 'Benton', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(70, 'Charles', 'Haney', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(71, 'Nadeen', 'Mendez', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(72, 'Orlando', 'Davila', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(73, 'Gabriel', 'Madden', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(74, 'Tavian', 'Henson', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(75, 'Avery', 'Strong', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(76, 'Luke', 'Stephenson', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(77, 'Glenn', 'Key', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(78, 'Murphy', 'Cook', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(79, 'Adelaide', 'Turner', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(80, 'Heath', 'Miles', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(81, 'Zion', 'Benson', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(82, 'Chase', 'Bryant', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(83, 'Taye', 'Poole', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(84, 'Caylen', 'Pope', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(85, 'Leo', 'Dixon', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(86, 'Aiden', 'Lamb', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(87, 'Amelia', 'Bentley', NULL, NULL, 2, 1, 1, '2019-08-03 21:20:50'),
(88, 'Lilibeth', 'Mcgrath', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(89, 'Evelyn', 'Kaiser', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(90, 'Kent', 'Hurley', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(91, 'Kent', 'Rivas', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(92, 'Denise', 'Martin', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(93, 'Rene', 'Maddox', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(94, 'Robert', 'Castillo', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(95, 'Eli', 'French', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(96, 'Verena', 'Benson', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(97, 'Jordon', 'Leach', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(98, 'Janetta', 'Henry', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(99, 'Zane', 'Lozano', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(100, 'Caprice', 'Key', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(101, 'Caleb', 'Armstrong', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(102, 'Marcellus', 'Todd', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(103, 'Emerson', 'Mann', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(104, 'Natalie', 'Reilly', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50'),
(105, 'RERUN', 'Roberson', NULL, NULL, NULL, 1, 1, '2019-08-03 21:20:50');

update clients set birth_date = date_add(STR_TO_DATE("1992,8,14", "%Y,%m,%d"), INTERVAL -FLOOR(RAND()*(20*365)+1) DAY);
--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `prestamos_bd`.`users` (`id`, `name`, `user_name`, `password`, `registry_date`) VALUES
(1, 'dav', 'dav', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-08-03 20:37:06'),
(2, 'Derek Klein', 'derekkv', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-08-03 20:40:20'),
(3, 'Addison Houston', 'addisonh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-08-03 20:39:23'),
(4, 'Jaime Rios', 'jaimer', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-08-03 20:39:23'),
(5, 'Danika Fuentes', 'danikaf', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-08-03 20:40:20'),
(6, 'Lailah Briggs', 'lailab', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-08-03 20:40:46'),
(7, 'Livia Lam', 'livial', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-08-03 20:40:46'),
(8, 'Arielle Briggs', 'arielleb', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-08-03 20:41:11'),
(9, 'Izaiah Hebert', 'izaiahh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2019-08-03 20:41:11');
COMMIT;
