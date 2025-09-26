<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebê ao juvenil! Desde 2014🙌 - Bia Fashion Kids</title>
    <link rel="shortcut icon" href="src/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="src/templates/style_header.css">
    <link rel="stylesheet" href="src/templates/style_footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="script_header.js"></script>
</head>

<body>
    <!--Parte de cima contendo novidades/promoções-->
    <div class="top-bar">
        <div class="container">
            <p>Aceitamos pagamento via <i class="fa-brands fa-pix"></i> pix | Compre parcelado e sem juros!</p>
        </div>
    </div>
    <!--Parte do Header do site // Fixo!-->
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <!--Logo da loja-->
                <div class="logo">
                    <a href="/">
                        <img src="src/images/98368e1a-b1a8-4dfd-bffa-786a1f87a1f4.png" alt="Bia Fashion Kids Logo">
                    </a>
                </div>

                <!--Seções-->
                <nav class="sections-content">
                    <ul>
                        <li><a href="pages/promo.html">Promos</a></li>
                        <li><a href="#">Feminino</a></li>
                        <li><a href="#">Masculino</a></li>
                        <li><a href="#">Quentinhos</a></li>
                        <li><a href="#">Fresquinhos</a></li>
                        <li><a href="#">Acessórios</a></li>
                        <li><a href="#">Marcas</a></li>
                    </ul>
                </nav>

                <!--Seção de pesquisa-->
                <div class="search-container">
                    <input type="text" placeholder="Digite o que você procura" class="search-input">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>

                <div class="header-actions">
                    <a onclick="abrirModal()"><i class="fas fa-user"></i> Entrar</a>
                    <!-- Modal de login -->
                    <div id="modalOverlay" class="overlay" onclick="fecharModal()">
                        <div class="modal" onclick="event.stopPropagation()">
                            <?php if (isset($nome_usuarios) && !empty($nome_usuarios)): ?>
                            <p><strong>Nome:</strong>
                                <?php echo htmlspecialchars($nome_usuarios); ?>
                            </p>
                            <p><a href="../public/admin/admin.php" style="color: rgb(242, 211, 124);">Admin</a></p>
                            <p><a href="../public/login/logout.php" style="color: rgb(242, 211, 124);">Desconectar</a>
                            </p>
                            <?php else: ?>
                            <p><strong>Você ainda não está logado.</strong></p>
                            <p><a href="../public/login/index.php" style="color: rgb(242, 211, 124);">Fazer login</a>
                            </p>
                            <?php endif; ?>
                            <button onclick="fecharModal()" style="margin-top: 15px;">Fechar</button>
                        </div>
                    </div>
                    <a href="#"><i class="fas fa-shopping-cart"></i> Carrinho</a>
                </div>

                <div class="mobile-menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-menu">
        <ul>
            <li><a href="pages/promo.html">Promos</a></li>
            <li><a href="#">Feminino</a></li>
            <li><a href="#">Masculino</a></li>
            <li><a href="#">Quentinhos</a></li>
            <li><a href="#">Fresquinhos</a></li>
            <li><a href="#">Acessórios</a></li>
            <li><a href="#">Marcas</a></li>
            <li><a href="#">Entrar</a></li>
            <li><a href="#">Carrinho</a></li>
        </ul>
    </div>
