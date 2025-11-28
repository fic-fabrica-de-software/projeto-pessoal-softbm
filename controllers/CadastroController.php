<?php
require_once(__DIR__ . '/../includes/conexao.php');

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST["CADASTRO"])) {
        $email = trim($_POST["email"] ?? "");
        $cpf = trim($_POST["cpf"] ?? ""); 
        $nome = trim($_POST["nome"] ?? ""); 
        $sobrenome = trim($_POST["sobrenome"] ?? ""); 
        $data = trim($_POST["data"] ?? ""); 
        $preferencia = trim($_POST["preferencia"] ?? ""); 
        $password = trim($_POST["password"] ?? ""); 
        $telefone = trim($_POST["telefone"] ?? ""); 
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
    } else {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Verifica se o email já está cadastrado
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        // Verifica se o cpf já está cadastrado
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE cpf = ?");
        $stmt->bind_param("s", $cpf);
        $stmt->execute();
        $resultado2 = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $error = "Email já cadastrado.";
        } elseif ($resultado2->num_rows > 0) {
            $error = "CPF já cadastrado."; // Mensagem de erro
        } else {
            $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, cpf, telefone, senha, data_cadastro, preferencia ) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $nome, $email, $cpf, $telefone, $passwordHash, $data, $preferencia);


            if ($stmt->execute()) {
                $_SESSION["email"] = $email;
                $_SESSION["name"] = $nome;
                header('Location: /index.php');
                exit;
            } else {
                $error = "Erro ao cadastrar. Tente novamente.";
            }
        }
    }
}
?>
