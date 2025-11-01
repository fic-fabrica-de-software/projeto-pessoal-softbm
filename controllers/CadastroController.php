<?php
require_once(__DIR__ . '/../includes/conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['acao'] ?? '') === 'cadastrar') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = trim($_POST['senha'] ?? '');

    if (empty($nome) || empty($email) || empty($senha)) {
        echo json_encode(['status' => 'erro', 'msg' => 'Preencha todos os campos obrigatórios.']);
        exit;
    }

    try {
        // Criptografa a senha
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        // Insere no banco
        $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $sql->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => $senha_hash
        ]);

        echo json_encode(['status' => 'sucesso', 'msg' => 'Cadastro realizado com sucesso!']);
    } catch (PDOException $e) {
        echo json_encode(['status' => 'erro', 'msg' => 'Erro ao cadastrar: ' . $e->getMessage()]);
    }
    exit;
}
?>
