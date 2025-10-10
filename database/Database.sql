CREATE DATABASE IF NOT EXISTS `biafashionkids`;

USE biafashionkids;

CREATE TABLE IF NOT EXISTS `usuarios` (
    idusuarios INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_usuarios VARCHAR(87) NOT NULL,
    email_usuarios VARCHAR(87) NOT NULL,
    data_usuarios DATE NOT NULL,
    telefone_usuarios CHAR(11) NOT NULL,
    cpf_usuarios CHAR(11) NOT NULL,
    preferencia_usuarios ENUM('Moda Feminina', 'Moda Masculina', 'Prefiro não informar') DEFAULT NULL,
    password_usuarios VARCHAR(87) NOT NULL
);

CREATE TABLE IF NOT EXISTS `produtos` (
    idprodutos INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_produtos VARCHAR(87) NOT NULL,
    valor_dinheiro_produtos INT NOT NULL,
    valor_debito_produtos INT NOT NULL,
    valor_credito_produtos INT NOT NULL,
    tamanho_produtos INT NOT NULL,
    marca_produtos VARCHAR(87) NOT NULL,
    imagem_produtos VARCHAR(255) NOT NULL
);