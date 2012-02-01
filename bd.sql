CREATE TABLE IF NOT EXISTS `comidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `usuarios_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO `comidas` (`id`, `nombre`, `usuarios_id`) VALUES
(1, 'China', 1),
(2, 'China', 1),
(3, 'China', 1),
(4, 'China', 1),
(5, 'China', 1);

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `usuarios` (`id`, `nombre`) VALUES
(1, 'Anonimo Tres');