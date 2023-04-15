CREATE TABLE `docente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `blog` varchar(100) NOT NULL,
  `profesional` varchar(100) NOT NULL,
  `escalafon` varchar(3) NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `experiencia` varchar(3) NOT NULL,
  `areaTrabajo` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `genero` varchar(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
 )ENGINE=InnoDB;

