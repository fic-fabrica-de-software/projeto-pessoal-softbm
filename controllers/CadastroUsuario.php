<?php

require_once '../database/conexao.php'; 

session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["login"])) {
    // Captura e limpa os dados do formulário
    $nome_completo = trim($_POST["nome_completo"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $data_nascimento = trim($_POST["data_nascimento"] ?? "");
    $telefone = trim($_POST["telefone"] ?? "");
    $cpf = trim($_POST["cpf"] ?? "");
    $preferencia_moda = trim($_POST["preferencia_moda"] ?? "");
    $password = trim($_POST["password"] ?? "");

    // Validação da senha
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

    if (empty($error)) {
        // Criptografa a senha
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Verifica se o e-mail já existe
        $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email_usuarios = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $resultEmail = $stmt->get_result();

        if ($resultEmail->num_rows > 0) {
            $error = "Email já cadastrado.";
        } else {
            // Verifica se o CPF já existe
            $stmt = $conn->prepare("SELECT id FROM usuarios WHERE cpf_usuarios = ?");
            $stmt->bind_param("s", $cpf);
            $stmt->execute();
            $resultCpf = $stmt->get_result();

            if ($resultCpf->num_rows > 0) {
                $error = "CPF já cadastrado.";
            }
        }
    }

    if (empty($error)) {
        // Insere os dados no banco de dados
        $stmt = $conn->prepare("INSERT INTO usuarios (nome_usuarios, email_usuarios, data_usuarios, telefone_usuarios, cpf_usuarios, preferencia_usuarios, password_usuarios) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $nome_completo, $email, $data_nascimento, $telefone, $cpf, $preferencia_moda, $passwordHash);

        if ($stmt->execute()) {
            $_SESSION["email"] = $email;
            $_SESSION["name"] = $nome_completo;

            // Redireciona para página de sucesso ou login
            header("Location: /Index.php?sucesso=1");
            exit;
        } else {
            $error = "Erro ao cadastrar. Tente novamente.";
        }
    }

    // Se houve erro, redireciona com a mensagem
    if (!empty($error)) {
        header("Location: /Login.php?erro=" . urlencode($error));
        exit;
    }
} else {
    // Acesso direto sem POST
    header("Location: /Index.php");
    exit;
}
