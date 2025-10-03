<?php
$nome = 'biafashionkids';
$servidor = 'localhost';
$usuario = 'root';
$senha = '';

$conexao = new mysqli ($nome, $servidor, $usuario, $senha);
if ($conexao->connect_error){
    die ("Falha ao conectar." . $conexao->connect_error);
}
?>