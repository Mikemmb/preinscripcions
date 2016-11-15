CREATE TABLE IF NOT EXISTS `usuarios` (
  `user` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `privilegio` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `imagen` varchar(512) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `usuarios` (`user`, `password`, `nombre`, `privilegio`, `admin`, `email`, `imagen`) 
VALUES ('admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador', 1000, 1, 
'admin@miapp.com','images/users/user.png');

