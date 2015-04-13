CREATE TABLE `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;

INSERT INTO `users` (`idUser`, `name`, `password`, `email`, `type`) VALUES
(1, 'Ema Dobao', 'df3a6210958cba9f1d077ade59a9759d', 'admin@nuevediez.com.ar', 'admin');


CREATE TABLE IF NOT EXISTS `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `client` text CHARACTER SET utf8 NOT NULL,
  `year` text CHARACTER SET utf8 NOT NULL,
  `location` text CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `images` text CHARACTER SET utf8 NOT NULL,
  `cover` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `order_by` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fPublicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fCreacion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fModificacion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;