CREATE DATABASE IF NOT EXISTS `biafashionkids`;

USE biafashionkids;

CREATE TABLE IF NOT EXISTS `usuarios` (
    idusuarios INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_usuarios VARCHAR(87) NOT NULL,
    email_usuarios VARCHAR(87) NOT NULL,
    data_usuarios DATE NOT NULL,
    telefone_usuarios CHAR(11) NOT NULL,
    cpf_usuarios CHAR(11) NOT NULL,
    preferencia_usuarios ENUM('Moda Feminina', 'Moda Masculina', 'Prefiro não informar') NOT NULL DEFAULT NULL
);