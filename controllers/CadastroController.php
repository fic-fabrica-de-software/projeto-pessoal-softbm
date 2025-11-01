<?php
require_once(__DIR__ . '/../includes/conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['acao'] ?? '') === 'cadastrar') {
    // Recebe e limpa os dados do formulário
    $nome = trim($_POST['nome'] ?? '');
    $sobrenome = trim($_POST['sobrenome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $cpf = trim($_POST['cpf'] ?? '');
    $telefone = trim($_POST['telefone'] ?? '');
    $data_nasc = trim($_POST['data_nasc'] ?? '');
    $preferencia = trim($_POST['preferencia'] ?? 'nao-informar');
    $senha = trim($_POST['senha'] ?? '');

    // Validação básica
    if (empty($nome) || empty($sobrenome) || empty($email) || empty($cpf) || empty($senha)) {
        echo json_encode(['status' => 'erro', 'msg' => 'Preencha todos os campos obrigatórios.']);
        exit;
    }

    try {
        // Criptografa a senha
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        // Data atual para cadastro
        $data_cadastro = date('Y-m-d');

        // Concatena nome e sobrenome para armazenar no campo "nome" do banco
        $nome_completo = $nome . ' ' . $sobrenome;

        // Insere no banco
        $sql = $pdo->prepare("
            INSERT INTO usuarios (nome, email, cpf, telefone, senha, data_cadastro, preferencia)
            VALUES (:nome, :email, :cpf, :telefone, :senha, :data_cadastro, :preferencia)
        ");

        $sql->execute([
            ':nome' => $nome_completo,
            ':email' => $email,
            ':cpf' => $cpf,
            ':telefone' => $telefone,
            ':senha' => $senha_hash,
            ':data_cadastro' => $data_cadastro,
            ':preferencia' => $preferencia
        ]);

        echo json_encode(['status' => 'sucesso', 'msg' => 'Cadastro realizado com sucesso!']);
    } catch (PDOException $e) {
        // Erro ao tentar cadastrar (ex: email ou cpf duplicados)
        echo json_encode(['status' => 'erro', 'msg' => 'Erro ao cadastrar: ' . $e->getMessage()]);
    }
    exit;
}
?>
