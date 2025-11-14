<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = 'root'; 
$banco = 'biafashionkids';
$charset = 'utf8mb4';

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
$conn->set_charset($charset);