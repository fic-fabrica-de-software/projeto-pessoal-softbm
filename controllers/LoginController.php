<?php
require_once(__DIR__ . '/../includes/conexao.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['acao'] ?? '') === 'login') {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    try {
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->execute(['email' => $email]);

        if ($sql->rowCount() === 0) {
            echo json_encode(['status' => 'erro', 'msg' => 'E-mail não encontrado.']);
            exit;
        }

        $user = $sql->fetch(PDO::FETCH_ASSOC);

        if (password_verify($senha, $user['senha'])) {
            $_SESSION['usuario_id'] = $user['idusuarios'];
            $_SESSION['usuario_nome'] = $user['nome'];
            echo json_encode(['status' => 'sucesso', 'msg' => 'Login realizado com sucesso!']);
        } else {
            echo json_encode(['status' => 'erro', 'msg' => 'Senha incorreta.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['status' => 'erro', 'msg' => 'Erro no servidor: ' . $e->getMessage()]);
    }
    exit;
}
?>
