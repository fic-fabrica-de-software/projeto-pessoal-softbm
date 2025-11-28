<?php
session_start();

// DEBUG — mostrar erros em tela para impedir página branca
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . '/../includes/conexao.php');

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST["CADASTRO"])) {
        $email       = trim($_POST["email"] ?? "");
        $cpf         = trim($_POST["cpf"] ?? "");
        $nome        = trim($_POST["nome"] ?? "");
        $sobrenome   = trim($_POST["sobrenome"] ?? "");
        $data        = trim($_POST["data"] ?? "");
        $preferencia = trim($_POST["preferencia"] ?? "");
        $password    = trim($_POST["password"] ?? "");
        $telefone    = trim($_POST["telefone"] ?? "");
    }


    if (strlen($password) < 8) {
        $error = "A senha deve ter pelo menos 8 caracteres.";
    } elseif (!preg_match('/[A-Z]/', $password)) {
        $error = "A senha deve conter pelo menos uma letra maiúscula.";
    } elseif (!preg_match('/[a-z]/', $password)) {
        $error = "A senha deve conter pelo menos uma letra minúscula.";
    } elseif (!preg_match('/[0-9]/', $password)) {
        $error = "A senha deve conter pelo menos um número.";
    } elseif (!preg_match('/[\W_]/', $password)) {
        $error = "A senha deve conter pelo menos um caractere especial (ex: @, #, $, %).";
    }


    if ($error !== "") {
        echo $error;
        exit;
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $stmt2 = $conn->prepare("SELECT * FROM usuarios WHERE cpf = ?");
    $stmt2->bind_param("s", $cpf);
    $stmt2->execute();
    $resultado2 = $stmt2->get_result();

    if ($resultado->num_rows > 0) {
        echo "Email já cadastrado.";
        exit;
    } elseif ($resultado2->num_rows > 0) {
        echo "CPF já cadastrado.";
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO usuarios 
        (nome, email, cpf, telefone, senha, data_cadastro, preferencia) 
        VALUES (?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param(
        "sssssss",
        $nome,
        $email,
        $cpf,
        $telefone,
        $passwordHash,
        $data,
        $preferencia
    );

    if ($stmt->execute()) {
        // Login automático após cadastro
        $_SESSION["email"] = $email;
        $_SESSION["name"]  = $nome;

        header("Location: ../index.php");
        exit;
    } else {
        die("Erro ao cadastrar: " . $stmt->error);
    }
}
