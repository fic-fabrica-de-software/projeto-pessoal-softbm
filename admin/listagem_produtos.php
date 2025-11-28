<?php
/**
 * Página de Listagem de Produtos
 * Tela: Estoque > Início
 * Exibe tabela com todos os produtos em estoque
 */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos - Bia Fashion Kids</title>
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

        /* Botão Cadastrar */
        .btn-cadastrar {
            background-color: #1f2937;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }

        .btn-cadastrar:hover {
            background-color: #111827;
        }

        /* Tabela */
        .table-container {
            overflow-x: auto;
        }

        .table {
            margin-bottom: 0;
            font-size: 14px;
        }

        .table thead {
            background-color: #f9fafb;
            border-bottom: 2px solid #e5e7eb;
        }

        .table thead th {
            color: #374151;
            font-weight: 600;
            padding: 15px 12px;
            text-align: left;
            border: none;
        }

        .table tbody td {
            padding: 15px 12px;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background-color: #f9fafb;
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

        /* Ícone de Ação */
        .action-icon {
            color: #3b82f6;
            cursor: pointer;
            font-size: 18px;
            transition: color 0.2s;
        }

        .action-icon:hover {
            color: #2563eb;
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

            .table {
                font-size: 12px;
            }

            .table thead th,
            .table tbody td {
                padding: 10px 8px;
            }

            .btn-cadastrar {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Barra de Notificação -->
    <div class="notification-bar">
        Aceitamos pagamento via <span class="pix-icon"></span> pix | Compre parcelado e sem juros!
    </div>

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
        <span>Estoque > Início</span>
    </div>

    <!-- Container Principal -->
    <div class="main-container">
        <div class="content-wrapper">
            <!-- Search Bar -->
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Pesquisa rápida por palavras-chaves" id="searchInput">
            </div>

            <!-- Botão Cadastrar -->
            <button class="btn-cadastrar" onclick="window.location.href='cadastro_produto.php'">
                <i class="fas fa-plus"></i> Cadastrar Produto
            </button>

            <!-- Tabela de Produtos -->
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Produto</th>
                            <th>Descrição</th>
                            <th>Status</th>
                            <th>Marcas</th>
                            <th>Estoque</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1245532521</td>
                            <td>Camiseta Preta Adidas</td>
                            <td>100% Poliéster</td>
                            <td><span class="badge-status">Em estoque</span></td>
                            <td>Adidas</td>
                            <td>15</td>
                            <td>
                                <a href="visualizar_produto.php?id=1245532521" class="action-icon" title="Visualizar">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1245532522</td>
                            <td>Bermuda Azul Nike</td>
                            <td>80% Algodão, 20% Poliéster</td>
                            <td><span class="badge-status">Em estoque</span></td>
                            <td>Nike</td>
                            <td>8</td>
                            <td>
                                <a href="visualizar_produto.php?id=1245532522" class="action-icon" title="Visualizar">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1245532523</td>
                            <td>Jaqueta Rosa Puma</td>
                            <td>100% Poliéster</td>
                            <td><span class="badge-status">Em estoque</span></td>
                            <td>Puma</td>
                            <td>12</td>
                            <td>
                                <a href="visualizar_produto.php?id=1245532523" class="action-icon" title="Visualizar">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1245532524</td>
                            <td>Tênis Branco Adidas</td>
                            <td>Sintético</td>
                            <td><span class="badge-status">Em estoque</span></td>
                            <td>Adidas</td>
                            <td>5</td>
                            <td>
                                <a href="visualizar_produto.php?id=1245532524" class="action-icon" title="Visualizar">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1245532525</td>
                            <td>Meia Colorida Lupo</td>
                            <td>80% Algodão, 20% Poliamida</td>
                            <td><span class="badge-status">Em estoque</span></td>
                            <td>Lupo</td>
                            <td>25</td>
                            <td>
                                <a href="visualizar_produto.php?id=1245532525" class="action-icon" title="Visualizar">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1245532526</td>
                            <td>Shorts Preto Speedo</td>
                            <td>100% Poliéster</td>
                            <td><span class="badge-status">Em estoque</span></td>
                            <td>Speedo</td>
                            <td>10</td>
                            <td>
                                <a href="visualizar_produto.php?id=1245532526" class="action-icon" title="Visualizar">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1245532527</td>
                            <td>Blusa Rosa Infantil</td>
                            <td>100% Algodão</td>
                            <td><span class="badge-status">Em estoque</span></td>
                            <td>Genérica</td>
                            <td>18</td>
                            <td>
                                <a href="visualizar_produto.php?id=1245532527" class="action-icon" title="Visualizar">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1245532528</td>
                            <td>Calça Jeans Azul</td>
                            <td>99% Algodão, 1% Elastano</td>
                            <td><span class="badge-status">Em estoque</span></td>
                            <td>Genérica</td>
                            <td>7</td>
                            <td>
                                <a href="visualizar_produto.php?id=1245532528" class="action-icon" title="Visualizar">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1245532529</td>
                            <td>Boné Branco Adidas</td>
                            <td>100% Algodão</td>
                            <td><span class="badge-status">Em estoque</span></td>
                            <td>Adidas</td>
                            <td>20</td>
                            <td>
                                <a href="visualizar_produto.php?id=1245532529" class="action-icon" title="Visualizar">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1245532530</td>
                            <td>Mochila Rosa Infantil</td>
                            <td>Poliéster com forro</td>
                            <td><span class="badge-status">Em estoque</span></td>
                            <td>Genérica</td>
                            <td>14</td>
                            <td>
                                <a href="visualizar_produto.php?id=1245532530" class="action-icon" title="Visualizar">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Filtro de busca
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('.table tbody tr');
            
            tableRows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
