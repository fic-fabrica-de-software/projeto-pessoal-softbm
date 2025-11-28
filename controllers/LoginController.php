<?php
session_start();
require_once(__DIR__ . '/../includes/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["acao"])) {

    $email = trim($_POST["email"] ?? "");
    $password = trim($_POST["senha"] ?? "");

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ? OR cpf = ?");
    $stmt->bind_param("ss", $email, $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $user = $resultado->fetch_assoc();

        if (password_verify($password, $user['senha'])) {

            $_SESSION["email"] = $user['email'];
            $_SESSION["name"] = $user['nome'];

            echo "<script>
                    alert('Logado com sucesso!');
                    window.location.href='../index.php';
                  </script>";
            exit;

        } else {
            $_SESSION["error"] = "Senha incorreta.";
            header('Location: ../src/templates/login_popup.php');
            exit;
        }
    } else {
        $_SESSION["error"] = "Usuário não encontrado.";
        header('Location: ../src/templates/login_popup.php');
        exit;
    }
}
?>
