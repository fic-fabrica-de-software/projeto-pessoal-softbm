<?php
/**
 * Página de Visualização de Produto
 * Tela: Contadores do Estoque
 * Exibe detalhes do produto com contadores de estoque e imagem
 */

// Simular dados do produto (em produção, viria do banco de dados)
$produto = [
    'id' => isset($_GET['id']) ? $_GET['id'] : '1245532521',
    'nome' => 'Camiseta Preta Adidas',
    'marca' => 'Adidas',
    'descricao' => '100% Poliéster',
    'preco' => 89.90,
    'tamanho' => 'P, M, G',
    'cor' => 'Preto',
    'avaliacao' => 4.0,
    'status' => 'Em estoque',
    'estoque' => 15,
    'imagem' => 'https://via.placeholder.com/300x400?text=Camiseta+Adidas'
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Visualizar Produto - Bia Fashion Kids</title>
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

        /* Seção de Contadores */
        .counters-section {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .counters-section i {
            font-size: 24px;
            color: #666;
        }

        .counters-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .counter-box {
            background-color: white;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            padding: 15px;
            text-align: center;
            min-width: 150px;
        }

        .counter-label {
            font-size: 12px;
            color: #666;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .counter-value {
            font-size: 28px;
            font-weight: 700;
            color: #2563eb;
        }

        /* Seção de Detalhes */
        .details-section {
            margin-bottom: 25px;
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #2563eb;
        }

        .detail-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 15px;
        }

        .detail-item {
            background-color: #f9fafb;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
        }

        .detail-label {
            font-size: 12px;
            color: #666;
            font-weight: 600;
            margin-bottom: 6px;
            text-transform: uppercase;
        }

        .detail-value {
            font-size: 14px;
            color: #333;
            font-weight: 500;
        }

        /* Status Badge */
        .badge-status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            background-color: #dcfce7;
            color: #166534;
        }

        /* Imagem do Produto */
        .product-image {
            background-color: #f0f0f0;
            border-radius: 6px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
        }

        .image-label {
            font-size: 12px;
            color: #999;
            margin-top: 10px;
        }

        /* Ícone de Câmera */
        .camera-icon {
            font-size: 24px;
            color: #ccc;
            margin-bottom: 10px;
        }

        /* Botões de Ação */
        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            margin-top: 20px;
        }

        .btn-action {
            background-color: white;
            border: 1px solid #e0e0e0;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            color: #666;
            transition: all 0.2s;
        }

        .btn-action:hover {
            background-color: #f0f0f0;
        }

        .btn-action.delete {
            color: #dc2626;
        }

        .btn-action.delete:hover {
            background-color: #fee2e2;
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

            .counters-section {
                flex-direction: column;
                align-items: flex-start;
            }

            .detail-row {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn-action {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Barra de Notificação -->
    <!-- Header (Incluído via include) -->
    <!-- <?php include 'header.php'; ?> -->

    <!-- Navegação Azul -->
    <div class="nav-blue">
        <a href="#"><i class="fas fa-home"></i> Início</a>
        <a href="#">Lançamentos Produtos</a>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb-section">
        <i class="fas fa-folder"></i>
        <span>Estoque > Início > <?php echo htmlspecialchars($produto['id']); ?></span>
    </div>

    <!-- Container Principal -->
    <div class="main-container">
        <div class="content-wrapper">
            <!-- Search Bar -->
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Pesquisa rápida por palavras-chaves" id="searchInput">
            </div>

            <!-- ID do Produto -->
            <div style="margin-bottom: 20px; font-size: 14px; color: #666;">
                <strong>ID:</strong> <?php echo htmlspecialchars($produto['id']); ?>
            </div>

            <!-- Seção de Contadores -->
            <div class="counters-section">
                <i class="fas fa-edit"></i>
                <div style="flex: 1;">
                    <div class="counters-title">
                        <i class="fas fa-boxes"></i>
                        Contadores do Estoque
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px;">
                        <div class="counter-box">
                            <div class="counter-label">Status</div>
                            <span class="badge-status"><?php echo htmlspecialchars($produto['status']); ?></span>
                        </div>
                        <div class="counter-box">
                            <div class="counter-label">Estoque</div>
                            <div class="counter-value"><?php echo $produto['estoque']; ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detalhes do Produto -->
            <div class="details-section">
                <div class="section-title">
                    <i class="fas fa-info-circle"></i>
                    Informações do Produto
                </div>

                <div class="detail-row">
                    <div class="detail-item">
                        <div class="detail-label">Nome do Produto</div>
                        <div class="detail-value"><?php echo htmlspecialchars($produto['nome']); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Marcas</div>
                        <div class="detail-value"><?php echo htmlspecialchars($produto['marca']); ?></div>
                    </div>
                </div>

                <div class="detail-row">
                    <div class="detail-item">
                        <div class="detail-label">Tamanho</div>
                        <div class="detail-value"><?php echo htmlspecialchars($produto['tamanho']); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Preço do Produto</div>
                        <div class="detail-value">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></div>
                    </div>
                </div>

                <div class="detail-row">
                    <div class="detail-item">
                        <div class="detail-label">Descrição</div>
                        <div class="detail-value"><?php echo htmlspecialchars($produto['descricao']); ?></div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Cor</div>
                        <div class="detail-value"><?php echo htmlspecialchars($produto['cor']); ?></div>
                    </div>
                </div>

                <div class="detail-row">
                    <div class="detail-item">
                        <div class="detail-label">Avaliação</div>
                        <div class="detail-value">
                            <?php 
                            for ($i = 0; $i < $produto['avaliacao']; $i++) {
                                echo '<i class="fas fa-star" style="color: #fbbf24;"></i>';
                            }
                            for ($i = $produto['avaliacao']; $i < 5; $i++) {
                                echo '<i class="fas fa-star" style="color: #d1d5db;"></i>';
                            }
                            echo ' ' . $produto['avaliacao'] . '.0';
                            ?>
                        </div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Status</div>
                        <div class="detail-value">
                            <span class="badge-status"><?php echo htmlspecialchars($produto['status']); ?></span>
                        </div>
                    </div>
                </div>

                <div class="detail-row">
                    <div class="detail-item">
                        <div class="detail-label">Estoque</div>
                        <div class="detail-value"><?php echo $produto['estoque']; ?></div>
                    </div>
                </div>
            </div>

            <!-- Imagem do Produto -->
            <div class="details-section">
                <div class="section-title">
                    <i class="fas fa-image"></i>
                    Imagem do Produto
                </div>

                <div class="product-image">
                    <div class="camera-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <img src="<?php echo htmlspecialchars($produto['imagem']); ?>" alt="<?php echo htmlspecialchars($produto['nome']); ?>">
                    <div class="image-label">Pré-visualização da Imagem do Produto</div>
                </div>
            </div>

            <!-- Botões de Ação -->
            <div class="action-buttons">
                <button class="btn-action" onclick="window.print()">
                    <i class="fas fa-print"></i> Imprimir
                </button>
                <button class="btn-action delete" onclick="if(confirm('Deseja deletar este produto?')) { window.location.href='listagem_produtos.php'; }">
                    <i class="fas fa-trash"></i> Deletar
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include '../src/templates/footer.php'; ?>
</body>
</html>
