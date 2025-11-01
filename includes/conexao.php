<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = ''; // senha do XAMPP padrão
$banco = 'biafashionkids';
$charset = 'utf8mb4';

$dsn = "mysql:host=$servidor;dbname=$banco;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // lançar exceções em caso de erro
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // retorna arrays associativos
    PDO::ATTR_EMULATE_PREPARES => false, // usa prepared statements reais
];

try {
    $pdo = new PDO($dsn, $usuario, $senha, $options);
} catch (PDOException $e) {
    die("Falha na conexão: " . $e->getMessage());
}
