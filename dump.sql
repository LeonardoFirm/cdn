CREATE DATABASE login;
USE login;

CREATE TABLE `login`.`usuarios` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(30) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));

INSERT INTO `usuarios` (`usuario_id`,`usuario`,`senha`) VALUES (1,'Leonardo','Leonardo1812@');