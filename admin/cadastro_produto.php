<?php

/**
 * Página de Cadastro de Produto
 * Tela: Cadastrar Produto
 * Formulário para cadastrar novo produto no estoque
 */

// Inicia a sessão antes de qualquer saída
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Processar formulário (simulado)
$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensagem = 'Produto cadastrado com sucesso!';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Cadastro de Produto - Bia Fashion Kids</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
            background-color: #f5f5f5;
        }

        /* Barra de Notificação Superior */
        .notification-bar {
            background-color: #f8c5d4;
            color: #333;
            padding: 12px 20px;
            text-align: center;
            font-size: 14px;
            border-bottom: 1px solid #e8b0c5;
        }

        .notification-bar .pix-icon {
            display: inline-block;
            width: 16px;
            height: 16px;
            background-color: #2563eb;
            border-radius: 3px;
            margin: 0 6px;
            vertical-align: middle;
        }

        /* Navegação Azul */
        .nav-blue {
            background-color: #2563eb;
            padding: 15px 20px;
            display: flex;
            gap: 30px;
            color: white;
            font-size: 14px;
            font-weight: 500;
        }

        .nav-blue a {
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        .nav-blue a:hover {
            opacity: 0.8;
        }

        /* Breadcrumb */
        .breadcrumb-section {
            background-color: #3b82f6;
            padding: 12px 20px;
            color: white;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .breadcrumb-section i {
            font-size: 16px;
        }

        /* Container Principal */
        .main-container {
            background-color: #3b82f6;
            padding: 30px 20px;
            min-height: calc(100vh - 200px);
        }

        .content-wrapper {
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Search Bar */
        .search-bar {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            background-color: #f5f5f5;
            padding: 12px 15px;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
        }

        .search-bar i {
            color: #999;
            margin-right: 10px;
            font-size: 16px;
        }

        .search-bar input {
            flex: 1;
            border: none;
            background: transparent;
            outline: none;
            font-size: 14px;
            color: #333;
        }

        .search-bar input::placeholder {
            color: #999;
        }

        /* Seção de Formulário */
        .form-section {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #2563eb;
        }

        /* Formulário */
        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 13px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 10px 12px;
            border: 1px solid #d0d0d0;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
            background-color: white;
            font-family: inherit;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* Seção de Upload de Imagem */
        .image-upload-section {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .upload-area {
            background-color: white;
            border: 2px dashed #d0d0d0;
            border-radius: 6px;
            padding: 40px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .upload-area:hover {
            border-color: #2563eb;
            background-color: #f0f7ff;
        }

        .upload-area i {
            font-size: 32px;
            color: #999;
            margin-bottom: 10px;
        }

        .upload-area p {
            color: #666;
            font-size: 14px;
            margin: 0;
        }

        .upload-area input[type="file"] {
            display: none;
        }

        /* Contadores */
        .counters-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .counter-box {
            background-color: white;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            padding: 15px;
        }

        .counter-label {
            font-size: 12px;
            color: #666;
            margin-bottom: 10px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .counter-inputs {
            display: flex;
            gap: 10px;
        }

        .counter-inputs input {
            flex: 1;
            padding: 8px;
            border: 1px solid #d0d0d0;
            border-radius: 4px;
            font-size: 14px;
            text-align: center;
        }

        .counter-inputs button {
            background-color: #f0f0f0;
            border: 1px solid #d0d0d0;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.2s;
        }

        .counter-inputs button:hover {
            background-color: #e0e0e0;
        }

        /* Botões de Ação */
        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            margin-top: 30px;
        }

        .btn-action {
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
        }

        .btn-save {
            background-color: #2563eb;
            color: white;
        }

        .btn-save:hover {
            background-color: #1d4ed8;
        }

        .btn-cancel {
            background-color: #e5e7eb;
            color: #333;
        }

        .btn-cancel:hover {
            background-color: #d1d5db;
        }

        /* Mensagem de Sucesso */
        .alert-success {
            background-color: #dcfce7;
            color: #166534;
            padding: 12px 16px;
            border-radius: 4px;
            margin-bottom: 20px;
            border-left: 4px solid #16a34a;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            .nav-blue {
                flex-direction: column;
                gap: 10px;
            }

            .content-wrapper {
                padding: 15px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .counters-row {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn-action {
                width: 100%;
            }

            .upload-area {
                padding: 30px 20px;
            }

            .upload-area i {
                font-size: 24px;
            }

        }
    </style>
</head>

<body>
    <div class="nav-blue">
        <a href="#"><i class="fas fa-home"></i> Início</a>
        <a href="#">Lançamentos Produtos</a>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb-section">
        <i class="fas fa-folder"></i>
        <span>Estoque > Início > Cadastrar Produto</span>
    </div>

    <!-- Container Principal -->
    <div class="main-container">
        <div class="content-wrapper">
            <!-- Search Bar -->
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Pesquisa rápida por palavras-chaves" id="searchInput">
            </div>

            <!-- Mensagem de Sucesso -->
            <?php if (!empty($mensagem)): ?>
                <div class="alert-success">
                    <i class="fas fa-check-circle"></i> <?php echo htmlspecialchars($mensagem); ?>
                </div>
            <?php endif; ?>

            <!-- Formulário de Cadastro -->
            <form method="POST" enctype="multipart/form-data">
                <!-- Seção de Informações Básicas -->
                <div class="form-section">
                    <div class="section-title">
                        <i class="fas fa-edit"></i>
                        Cadastrar Produto
                    </div>

                    <!-- Contadores de Status e Estoque -->
                    <div class="counters-row">
                        <div class="counter-box">
                            <div class="counter-label">Status</div>
                            <select class="form-control" name="status" required>
                                <option value="">Selecione o status</option>
                                <option value="Em estoque">Em estoque</option>
                                <option value="Fora de estoque">Fora de estoque</option>
                                <option value="Descontinuado">Descontinuado</option>
                            </select>
                        </div>
                        <div class="counter-box">
                            <div class="counter-label">Estoque</div>
                            <input type="number" class="form-control" name="estoque" value="0" min="0" required>
                        </div>
                    </div>

                    <!-- Campos de Informações -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" id="id" name="id" placeholder="ID do produto" required>
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome do Produto</label>
                            <input type="text" id="nome" name="nome" placeholder="Nome do produto" required>
                        </div>
                        <div class="form-group">
                            <label for="marca">Marcas</label>
                            <input type="text" id="marca" name="marca" placeholder="Marca do produto" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="tamanho">Tamanho</label>
                            <input type="text" id="tamanho" name="tamanho" placeholder="P, M, G" required>
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço do Produto</label>
                            <input type="number" id="preco" name="preco" placeholder="R$ 0,00" step="0.01" min="0" required>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input type="text" id="descricao" name="descricao" placeholder="100% Poliéster" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="cor">Cor</label>
                            <input type="text" id="cor" name="cor" placeholder="Cor do produto" required>
                        </div>
                        <div class="form-group">
                            <label for="avaliacao">Avaliação</label>
                            <select id="avaliacao" name="avaliacao" class="form-control" required>
                                <option value="">Selecione a avaliação</option>
                                <option value="1">1 estrela</option>
                                <option value="2">2 estrelas</option>
                                <option value="3">3 estrelas</option>
                                <option value="4">4 estrelas</option>
                                <option value="5">5 estrelas</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Seção de Upload de Imagem -->
                <div class="image-upload-section">
                    <div class="section-title">
                        <i class="fas fa-image"></i>
                        Imagem do Produto
                    </div>

                    <div class="upload-area" onclick="document.getElementById('imageInput').click()">
                        <i class="fas fa-camera"></i>
                        <p>Clique para fazer upload da imagem</p>
                        <input type="file" id="imageInput" name="imagem" accept="image/*">
                    </div>
                    <div class="image-label" style="margin-top: 10px; text-align: center; color: #999; font-size: 12px;">
                        Pré-visualização da Imagem do Produto
                    </div>
                </div>

                <!-- Botões de Ação -->
                <div class="action-buttons">
                    <button type="button" class="btn-action btn-cancel" onclick="window.location.href='listagem_produtos.php'">
                        <i class="fas fa-times"></i> Cancelar
                    </button>
                    <button type="submit" class="btn-action btn-save">
                        <i class="fas fa-save"></i> Salvar Produto
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Preview de imagem
        document.getElementById('imageInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    // Aqui você poderia exibir a imagem em um preview
                    console.log('Imagem selecionada:', file.name);
                };
                reader.readAsDataURL(file);
            }
        });

        // Validação de formulário
        document.querySelector('form').addEventListener('submit', function(e) {
            const nome = document.getElementById('nome').value.trim();
            const marca = document.getElementById('marca').value.trim();
            const preco = parseFloat(document.getElementById('preco').value);

            if (!nome || !marca || isNaN(preco) || preco < 0) {
                e.preventDefault();
                alert('Por favor, preencha todos os campos obrigatórios corretamente.');
            }
        });
    </script>
</body>
<?php include '../src/templates/footer.php'; ?>

</html>