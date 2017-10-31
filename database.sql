
CREATE TABLE `beneficios` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`nombre` varchar(255) NOT NULL,
	`telefono` varchar(100) NOT NULL,
	`direccion` varchar(255) NOT NULL,
	`link` varchar(255) NOT NULL,
	`filename` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categoria_eventos`
--

CREATE TABLE `categoria_eventos` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`nombre` varchar(255) NOT NULL,
	`slug` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categoria_notas`
--

CREATE TABLE `categoria_notas` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`nombre` varchar(100) NOT NULL,
	`slug` varchar(100) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
	`id` varchar(40) NOT NULL,
	`ip_address` varchar(45) NOT NULL,
	`timestamp` int(10) unsigned NOT NULL DEFAULT '0',
	`data` blob NOT NULL,
	KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('12385513b5a3f0cd1a42ea03883eaf6a18549229', '127.0.0.1', 1509470554, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437303535343b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d6572726f727c733a33303a224e6f207469656e652061636365736f20612065737461206f7063696f6e2e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226e6577223b7d),
('52cde99442369034bad1e672091e67b683df26c8', '127.0.0.1', 1509471491, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437313139323b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d6572726f727c733a33303a224e6f207469656e652061636365736f20612065737461206f7063696f6e2e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('bd0d2e8bd441afef7e7e24b8d6580e9367406be4', '127.0.0.1', 1509471799, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437313534323b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('bf9288a49d8f09c74899d3d291b67f87d94aa266', '127.0.0.1', 1509472108, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437313935353b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('59014c79db003ac27f97463d63314b37370ef212', '127.0.0.1', 1509472780, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437323535343b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('c991632cbe270d5259a3bf68b8a1a83e600f79fb', '127.0.0.1', 1509473146, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437323836343b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('da9a0dc39476210dade78c01cf68658b0717f53c', '127.0.0.1', 1509473409, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437333238313b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('a32a5985d8cefde480d39c54ff35360ef291f1ab', '127.0.0.1', 1509473869, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437333630373b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('d974f665ac7206882351fe10dee48fa14f6c1fb5', '127.0.0.1', 1509473997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437333934303b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('9ca3cef25f17b4c806f986efd3225b19cc5af5df', '127.0.0.1', 1509474613, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437343331353b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('34548977bee8a60827a589763b0525ab36831f4d', '127.0.0.1', 1509474916, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437343631363b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('90d0199b26e50128ade3e48906e2aea75f2f4ce4', '127.0.0.1', 1509476058, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437363035383b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('d67185f91b9275087eddc3f1360c75e1edcb67c6', '127.0.0.1', 1509476782, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437363738323b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('daa987b93c32fb1592a6c36c38b397d9ebb47411', '127.0.0.1', 1509477471, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437373138353b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('3c558ac614b750edfebb06fcd0e1895350da3c52', '127.0.0.1', 1509477674, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437373531373b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('9ab21a5da0e76a1140157d01439b05bf82be636f', '127.0.0.1', 1509478316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437383231363b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d),
('ac776307ddec572948ac31ab311333ef6054990b', '127.0.0.1', 1509479206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393437393030303b6c6f676765645f696e7c613a323a7b733a323a226964223b733a313a2231223b733a353a22656d61696c223b733a31353a2261646d696e40656d61696c2e636f6d223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `imagenes_lugares`
--

CREATE TABLE `imagenes_lugares` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`lugar_id` int(11) NOT NULL,
	`filename` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `imagenes_notas`
--

CREATE TABLE `imagenes_notas` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`nota_id` int(11) NOT NULL,
	`filename` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `imagenes_usuarios`
--

CREATE TABLE `imagenes_usuarios` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`usuario_id` int(11) NOT NULL,
	`filename` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lugares`
--

CREATE TABLE `lugares` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`nombre` varchar(255) NOT NULL,
	`direccion` varchar(255) NOT NULL,
	`telefono` varchar(100) NOT NULL,
	`link` varchar(100) NOT NULL,
	`visible` int(1) NOT NULL,
	`beneficio` int(11) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
	`version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(12);

-- --------------------------------------------------------

--
-- Table structure for table `modulos`
--

CREATE TABLE `modulos` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`nombre` varchar(250) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `modulos`
--

INSERT INTO `modulos` (`id`, `nombre`) VALUES
(1, 'admins'),
(2, 'roles'),
(3, 'permisos'),
(4, 'notas');

-- --------------------------------------------------------

--
-- Table structure for table `notas`
--

CREATE TABLE `notas` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`titulo` varchar(255) NOT NULL,
	`descripcion` text NOT NULL,
	`fecha_desde` date NOT NULL,
	`fecha_hasta` date NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE `permisos` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`role_id` int(2) NOT NULL,
	`modulo` varchar(100) NOT NULL,
	`url` varchar(100) NOT NULL,
	`permiso` int(1) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `permisos`
--

INSERT INTO `permisos` (`id`, `role_id`, `modulo`, `url`, `permiso`) VALUES
(1, 1, '1', '', 1),
(2, 1, '2', 'edit', 1),
(3, 1, 'roles', 'delete', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`nombre` varchar(60) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'Superadmin'),
(2, 'Editores'),
(3, 'Visualizador');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`email` varchar(100) NOT NULL,
	`password` varchar(100) NOT NULL,
	`salt` varchar(100) NOT NULL,
	`role_id` int(2) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`id`, `email`, `password`, `salt`, `role_id`) VALUES
(1, 'admin@email.com', 'password', '12312312321', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`nickname` varchar(120) NOT NULL,
	`password` varchar(255) NOT NULL,
	`salt` varchar(80) NOT NULL,
	`email` varchar(120) NOT NULL,
	`apellido` varchar(60) NOT NULL,
	`nombre` varchar(60) NOT NULL,
	`dni` varchar(25) NOT NULL,
	`sexo` varchar(20) NOT NULL,
	`nacimiento` varchar(80) NOT NULL,
	`edad` int(10) NOT NULL,
	`telcontacto` varchar(40) NOT NULL,
	`barrio` varchar(100) NOT NULL,
	`calle` varchar(100) NOT NULL,
	`numero` varchar(20) NOT NULL,
	`piso` varchar(20) NOT NULL,
	`depto` varchar(20) NOT NULL,
	`conocio` varchar(100) NOT NULL,
	`profesion` varchar(100) NOT NULL,
	`localidad` varchar(100) NOT NULL,
	`fuma` int(1) NOT NULL,
	`toma` int(1) NOT NULL,
	`descripcion` text NOT NULL,
	`telcelular` varchar(80) NOT NULL,
	`estado_civil` int(1) NOT NULL,
	`educacion` int(1) NOT NULL,
	`provincia` varchar(50) NOT NULL,
	`zodiaco` varchar(20) NOT NULL,
	`busco` int(2) NOT NULL,
	`ocupacion` varchar(120) NOT NULL,
	`celular_cia` varchar(80) NOT NULL,
	`tel_citas` varchar(80) NOT NULL,
	`validado` int(1) NOT NULL,
	`hijos` int(2) NOT NULL,
	`codigo_verificacion` varchar(25) NOT NULL,
	`negocios` varchar(180) NOT NULL,
	`cod_postal` varchar(10) NOT NULL,
	`religion` varchar(20) NOT NULL,
	`foto_main` varchar(255) NOT NULL,
	`nacionalidad` varchar(50) NOT NULL,
	`activo` int(1) NOT NULL,
	`estatura` int(3) NOT NULL,
	`peso` int(3) NOT NULL,
	`contextura_fisica` int(11) NOT NULL,
	`color_pelo` int(11) NOT NULL,
	`color_ojos` int(11) NOT NULL,
	`convivencia` int(1) NOT NULL,
	`facebook` varchar(255) NOT NULL,
	`twitter` varchar(255) NOT NULL,
	`linkedin` varchar(255) NOT NULL,
	`youtube` varchar(255) NOT NULL,
	`myspace` varchar(255) NOT NULL,
	`badoo` varchar(255) NOT NULL,
	`msn` varchar(255) NOT NULL,
	`skype` varchar(255) NOT NULL,
	`whatsapp` varchar(120) NOT NULL,
	`google` varchar(255) NOT NULL,
	`tipo_busuqeda` varchar(255) NOT NULL,
	`completa_signin` varchar(255) NOT NULL,
	`claves_erroneas` int(10) NOT NULL,
	`id_paises` int(11) NOT NULL,
	`score` int(11) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;