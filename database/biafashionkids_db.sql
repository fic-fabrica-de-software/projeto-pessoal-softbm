CREATE DATABASE IF NOT EXISTS `biafashionkids`;

USE biafashionkids;

CREATE TABLE IF NOT EXISTS `usuarios` (
  idusuarios INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  cpf VARCHAR(14) UNIQUE NOT NULL,
  telefone VARCHAR(15),
  senha VARCHAR(255) NOT NULL,
  data_cadastro DATE,
  preferencia VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS `enderecos` (
  idendereco INT AUTO_INCREMENT PRIMARY KEY,
  usuarios_idusuarios INT,
  rua VARCHAR(100),
  cidade VARCHAR(60),
  estado VARCHAR(30),
  cep VARCHAR(10),
  FOREIGN KEY (usuarios_idusuarios) REFERENCES usuarios(idusuarios)
);

CREATE TABLE IF NOT EXISTS `marcas` (
  idmarcas INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  imagem VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS `produtos` (
  idprodutos INT PRIMARY KEY, /*COLOCAR O IDPRODUTO QUE JA TEM CADASTRADO NA ACERVO DA LOJA BFK*/
  idmarcas INT,
  nome VARCHAR(80) NOT NULL, /*NOME*/
  descricao TEXT,
  tamanho VARCHAR(10), /*TAMANHOS*/
  preco DECIMAL(10,2),
  avaliacao DECIMAL(10,2),
  estoque INT DEFAULT 0,
  cor VARCHAR(80) NOT NULL,
  imagem VARCHAR(255),
  FOREIGN KEY (idmarcas) REFERENCES marcas(idmarcas)
);

CREATE TABLE IF NOT EXISTS `carrinho` (
  idcarrinho INT AUTO_INCREMENT PRIMARY KEY,
  usuarios_idusuarios INT,
  data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,
  ativo BOOLEAN DEFAULT TRUE,
  FOREIGN KEY (usuarios_idusuarios) REFERENCES usuarios(idusuarios)
);

CREATE TABLE IF NOT EXISTS `carrinho_produto` (
  idcarrinho_produto INT AUTO_INCREMENT PRIMARY KEY,
  idcarrinho INT,
  idproduto INT,
  quantidade INT DEFAULT 1,
  FOREIGN KEY (idcarrinho) REFERENCES carrinho(idcarrinho),
  FOREIGN KEY (idproduto) REFERENCES produtos(idprodutos)
);

CREATE TABLE IF NOT EXISTS `pagamento` (
  idpagamento INT AUTO_INCREMENT PRIMARY KEY,
  forma_pagamento VARCHAR(30),
  status_pagamento VARCHAR(30)
);

CREATE TABLE IF NOT EXISTS `vendas` (
  idvenda INT AUTO_INCREMENT PRIMARY KEY,
  idusuario INT,
  idpagamento INT,
  data_venda DATETIME DEFAULT CURRENT_TIMESTAMP,
  valor_total DECIMAL(10,2),
  FOREIGN KEY (idusuario) REFERENCES usuarios(idusuarios),
  FOREIGN KEY (idpagamento) REFERENCES pagamento(idpagamento)
);

CREATE TABLE IF NOT EXISTS `venda_produto` (
  idvenda_produto INT AUTO_INCREMENT PRIMARY KEY,
  idvenda INT,
  idproduto INT,
  quantidade INT DEFAULT 1,
  valor_unitario DECIMAL(10,2),
  FOREIGN KEY (idvenda) REFERENCES vendas(idvenda),
  FOREIGN KEY (idproduto) REFERENCES produtos(idprodutos)
);

CREATE TABLE IF NOT EXISTS 'admin'(
  idadmin INT AUTO_INCREMENT PRIMARY KEY,
  nome_admin VARCHAR(87),
  email_admin (255),
  senha_admin (45)
);
