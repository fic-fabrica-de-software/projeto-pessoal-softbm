<?php

$error = "";

// Se veio erro direto da sessão
if (!empty($_SESSION["error"])) {
    $error = $_SESSION["error"];
    unset($_SESSION["error"]);
}

// Se veio erro por ação POST
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["acao"])) {
    $acoes = [
        "login"           => "Erro ao fazer login.",
        "register"        => "Erro ao fazer cadastro.",
        "forgot_password" => "Erro ao recuperar senha.",
        "reset_password"  => "Erro ao redefinir senha.",
        "change_password" => "Erro ao alterar senha.",
        "delete_account"  => "Erro ao excluir conta.",
        "update_account"  => "Erro ao atualizar conta."
    ];

    $acao = $_POST["acao"];

    if (isset($acoes[$acao])) {
        $error = $acoes[$acao];
    }
}

if (!empty($error)) {
    echo "<script>alert('" . addslashes($error) . "');</script>";
}

?>

<!-- HTML do Popup de Login/Cadastro (Slide-out Menu) -->
<div id="login-sidebar" class="login-sidebar">
    <!-- Conteúdo do Login/Cadastro Simples (Imagem 1) -->
    <div id="login-content" class="sidebar-content active" style="background: #ffffff !important;">
        <div class="sidebar-header" style="background: #ffffff !important;">
            <button id="close-sidebar" class="close-btn">&times;</button>
        </div>
        <div class="sidebar-body" style="background: #ffffff !important;">
            <h3 class="title">CADASTRAR COM REDE SOCIAL</h3>
            <button class="social-login-btn google-btn">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1200px-Google_%22G%22_logo.svg.png"
                    alt="Google Logo">
                ENTRAR COM O GOOGLE
            </button>

            <div class="divider">OU</div>

            <h3 class="title">ENTRAR</h3>
            <form id="login-form" method="POST" action="/projeto-pessoal-softbm/controllers/LoginController.php">
                <?php if (isset($error) && $error): ?>
                    <div class="error-message" style="color: red; margin-left: 20px;"><?php echo addslashes($error); ?></div>
                <?php endif; ?>
                <div class="input-group">
                    <input type="text" id="login-email" name="email" placeholder="*E-mail ou CPF" required>
                </div>

                <div class="input-group">
                    <input type="password" id="login-senha" name="senha" placeholder="*Senha" required>
                </div>

                <a href="#" class="forgot-password">Esqueci minha senha</a>

                <button type="submit" class="btn btn-primary" name="acao" value="login">
                    ENTRAR
                </button>
            </form>


            <div class="divider">OU</div>

            <h3 class="title">PRIMEIRO ACESSO?</h3>
            <button id="show-register-form" class="btn btn-secondary">QUERO ME CADASTRAR</button>
            <a href="/projeto-pessoal-softbm/controllers/Logout.php"><button id="show-register-form" class="btn btn-primary" style="background-color: red;">LOGOUT</button></a>
        </div>
    </div>

    <!-- Conteúdo do Cadastro Completo (Imagem 2) -->
    <div id="register-content" class="sidebar-content" style="background: #ffffff !important;">
        <div class="sidebar-header">
            <button id="back-to-login" class="back-btn"><i class="fas fa-chevron-left"></i> VOLTAR</button>
        </div>
        <div class="sidebar-body" style="background: #ffffff !important;">
            <h3 class="title">CADASTRAR COM REDE SOCIAL</h3>
            <button class="social-login-btn google-btn">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1200px-Google_%22G%22_logo.svg.png"
                    alt="Google Logo">
                ENTRAR COM O GOOGLE
            </button>

            <div class="divider">OU</div>

            <h3 class="title">CADASTRO</h3>
            <form id="register-form" method="POST" action="/projeto-pessoal-softbm/controllers/CadastroController.php">
                <div class="input-group">
                    <input type="email" id="reg-email" placeholder="*E-mail" name="email" required>
                </div>
                <div class="input-group">
                    <input type="text" id="reg-cpf" placeholder="*CPF" name="cpf" required>
                </div>
                <div class="input-group">
                    <input type="text" id="reg-nome" placeholder="*Nome" name="nome" required>
                </div>
                <div class="input-group">
                    <input type="text" id="reg-sobrenome" placeholder="*Sobrenome" name="sobrenome" required>
                </div>
                <div class="input-group">
                    <label for="reg-data-nasc" style="margin-left: 20px;">Data de nascimento</label>
                    <input type="date" id="reg-data-nasc" name="data">
                </div>

                <div class="preferences-group" style="background: #e0e0e0 !important;">
                    <p>Quais são as suas preferências?</p>
                    <small>Vamos selecionar itens personalizados para você.</small>
                    <label class="radio-label">
                        <input type="radio" name="preferencia" value="moda-feminina"> Moda Feminina
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="preferencia" value="moda-masculina"> Moda Masculina
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="preferencia" value="nao-informar" checked> Prefiro não informar
                    </label>
                </div>

                <div class="input-group">
                    <input type="password" id="reg-senha" placeholder="*Senha" name="password" required>
                </div>
                <div class="password-rules" style="background: #ffffff !important; margin-left:20px;">
                    <p>Sua senha deve ter:</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Mínimo 8 caracteres com letras e números</li>
                        <li><i class="fas fa-check"></i> Mínimo 1 letra maiúscula</li>
                        <li><i class="fas fa-check"></i> Mínimo 1 letra minúscula</li>
                        <li><i class="fas fa-check"></i> Mínimo 1 caractere especial (? ! @ # $ % & *)</li>
                        <li><i class="fas fa-check"></i> Dicas de segurança:</li>
                        <li><i class="fas fa-check"></i> Não use seu nome, sobrenome ou e-mail</li>
                        <li><i class="fas fa-check"></i> Não use caracteres iguais em sequência (AAAA)</li>
                    </ul>
                </div>

                <div class="input-group">
                    <input type="tel" id="reg-telefone" placeholder="*Telefone" name="telefone" required>
                </div>

                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" id="termos" required>
                        Li, aceito os <a href="#">Termos de Uso</a> e estou ciente da <a href="#">Política de
                            Privacidade</a>
                    </label>
                </div>

                <!-- ReCAPTCHA Placeholder -->
                <div class="mb-3" style="background-color: #F0F0F0;">
                    <div class="g-recaptcha" data-sitekey="6Lft5tYrAAAAAB4P6uSdIptR_pXn7fkO0HH04Xtk"></div>
                </div>

                <button type="submit" class="btn btn-primary" name="CADASTRO">CADASTRAR-SE</button>
            </form>
        </div>
    </div>
</div>

<!-- Overlay para escurecer o fundo -->
<div id="sidebar-overlay" class="sidebar-overlay"></div>

<style>
    body {
        overflow-x: none;
    }

    /* Estilos para o Popup de Login/Cadastro (Slide-out Menu) */

    /* Variáveis de cor baseadas nas imagens (tons de rosa) */
    :root {
        --primary-color: rgb(28, 5, 156);
        /* Rosa principal (botões, destaques) */
        --secondary-color: #f0f0f0;
        /* Fundo claro */
        --text-color: #333;
        --border-color: #ccc;
    }

    /* Overlay */
    .sidebar-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
        /* Abaixo da sidebar */
        display: none;
        /* Escondido por padrão */
        transition: opacity 0.3s ease;
    }

    /* Sidebar principal */
    .login-sidebar {
        position: fixed;
        top: 0;
        right: 0;
        width: 100%;
        max-width: 420px;
        height: 100%;
        background: #ffffff !important;
        box-shadow: -4px 0 25px rgba(0, 0, 0, 0.15);
        border-left: 1px solid #e5e5e5;
        z-index: 1000;
        transform: translateX(100%);
        transition: transform 0.3s ease-in-out;
        overflow-y: auto;
        border-radius: 12px 0 0 12px;
    }


    /* Estado ativo (visível) */
    .login-sidebar.active {
        transform: translateX(0);
    }

    /* Conteúdo da Sidebar */
    .sidebar-content {
        padding: 20px;
        display: none;
        /* Escondido por padrão */
    }

    .sidebar-content.active {
        display: block;
        /* Conteúdo ativo */
    }

    /* Cabeçalho da Sidebar */
    .sidebar-header {
        display: flex;
        justify-content: flex-end;
        padding: 10px 0;
        border-bottom: 1px solid var(--secondary-color);
    }

    .close-btn {
        background: none;
        border: none;
        font-size: 30px;
        cursor: pointer;
        color: var(--text-color);
        line-height: 1;
    }

    .back-btn {
        background: none;
        border: none;
        font-size: 16px;
        cursor: pointer;
        color: var(--text-color);
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: bold;
        text-transform: uppercase;
    }

    /* Corpo da Sidebar */
    .sidebar-body {
        padding-top: 20px;
    }

    .title {
        font-size: 14px;
        font-weight: bold;
        color: var(--text-color);
        margin-bottom: 15px;
        text-align: center;
    }

    /* Botão de Login Social (Google) */
    .social-login-btn {
        width: 80%;
        padding: 10px;
        border: 1px solid var(--border-color);
        background-color: white;
        color: var(--text-color);
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-bottom: 20px;
        margin-left: 40px;
        border-radius: 4px;
    }

    .social-login-btn img {
        width: 20px;
        height: 20px;
    }

    /* Divisor "OU" */
    .divider {
        text-align: center;
        margin: 20px 0;
        font-size: 12px;
        color: #999;
        position: relative;
    }

    .divider::before,
    .divider::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 40%;
        height: 1px;
        background-color: var(--border-color);
    }

    .divider::before {
        left: 0;
    }

    .divider::after {
        right: 0;
    }

    /* Grupos de Input */
    .input-group {
        margin-bottom: 15px;
    }

    .input-group input[type="text"],
    .input-group input[type="email"],
    .input-group input[type="password"],
    .input-group input[type="date"],
    .input-group input[type="tel"] {
        width: 90%;
        padding: 10px;
        border: 1px solid var(--border-color);
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
        margin-left: 20px;
    }

    .input-group label {
        display: block;
        font-size: 12px;
        color: #666;
        margin-bottom: 5px;
    }

    /* Link Esqueci Senha */
    .forgot-password {
        margin-right: 40px;
        display: block;
        text-align: right;
        font-size: 12px;
        color: var(--primary-color);
        text-decoration: none;
        margin-bottom: 20px;
    }

    /* Botões de Ação */
    .btn {
        width: 80%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
        text-transform: uppercase;
        margin-bottom: 10px;
        transition: background-color 0.2s ease;
        margin-left: 40px;
    }

    .btn-primary {
        background-color: var(--primary-color);
        color: white;
        position: relative;
        z-index: 10;

    }

    .btn-primary:hover {
        background-color: #e05a9f;
    }

    .btn-secondary {
        background-color: white;
        color: var(--primary-color);
        border: 1px solid var(--primary-color);
    }

    .btn-secondary:hover {
        background-color: var(--secondary-color);
    }

    /* Preferências (Radio Buttons) */
    .preferences-group {
        background-color: #f9f9f9;
        padding: 15px;
        width: 90%;
        border-radius: 4px;
        margin-bottom: 20px;
        margin-left: 9px;
    }

    .preferences-group p {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .preferences-group small {
        display: block;
        margin-bottom: 10px;
        color: #666;
    }

    .radio-label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
    }

    .radio-label input[type="radio"] {
        margin-right: 5px;
        accent-color: var(--primary-color);
    }

    /* Regras de Senha */
    .password-rules {
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #eee;
        border-radius: 4px;
        font-size: 12px;
    }

    .password-rules p {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .password-rules ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .password-rules ul li {
        margin-bottom: 3px;
        color: #666;
    }

    .password-rules ul li i {
        color: green;
        margin-right: 5px;
    }

    /* Checkbox de Termos */
    .checkbox-group {
        margin-bottom: 20px;
        font-size: 12px;
        margin-left: 20px;
    }

    .checkbox-group a {
        color: var(--primary-color);
        text-decoration: none;
    }

    /* Placeholder ReCAPTCHA */
    .recaptcha-placeholder {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 1px solid var(--border-color);
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 4px;
        font-size: 14px;
        color: #666;
    }

    .recaptcha-box {
        width: 25px;
        height: 25px;
        border: 2px solid var(--border-color);
        background-color: #f9f9f9;
    }
</style>

<script>
    // JavaScript para controlar o popup de Login/Cadastro (Slide-out Menu)

    document.addEventListener('DOMContentLoaded', () => {
        const loginSidebar = document.getElementById('login-sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');
        const closeButton = document.getElementById('close-sidebar');
        const showRegisterButton = document.getElementById('show-register-form');
        const backToLoginButton = document.getElementById('back-to-login');
        const loginContent = document.getElementById('login-content');
        const registerContent = document.getElementById('register-content');

        // --- Funções de Controle da Sidebar ---

        function openSidebar() {
            loginSidebar.classList.add('active');
            sidebarOverlay.style.display = 'block';
            // Opcional: Adicionar classe ao body para evitar scroll da página principal
            document.body.style.overflow = 'hidden';
        }

        function closeSidebar() {
            loginSidebar.classList.remove('active');
            sidebarOverlay.style.display = 'none';
            document.body.style.overflow = '';
            // Garantir que o conteúdo de login esteja ativo ao fechar
            showLoginContent();
        }

        function showLoginContent() {
            loginContent.classList.add('active');
            registerContent.classList.remove('active');
        }

        function showRegisterContent() {
            loginContent.classList.remove('active');
            registerContent.classList.add('active');
        }

        // --- Event Listeners ---

        // 1. Abrir a Sidebar ao clicar no botão "Entrar"
        // O botão "Entrar" está no header.php. Precisamos de um seletor para ele.
        // No header.php, o link é: <a href="Login.php"><i class="fas fa-user"></i> Entrar</a>
        // Vamos selecionar o link que contém o texto "Entrar" e tem o ícone de usuário.
        const enterButtons = document.querySelectorAll('a[href="Login.php"], .mobile-menu a:nth-child(7)');

        enterButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault(); // Previne a navegação para Login.php
                openSidebar();
            });
        });

        // 2. Fechar a Sidebar
        closeButton.addEventListener('click', closeSidebar);
        sidebarOverlay.addEventListener('click', closeSidebar); // Fechar ao clicar no overlay

        // 3. Trocar para o formulário de Cadastro
        showRegisterButton.addEventListener('click', showRegisterContent);

        // 4. Trocar de volta para o formulário de Login
        backToLoginButton.addEventListener('click', showLoginContent);

        // Opcional: Fechar com a tecla ESC
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && loginSidebar.classList.contains('active')) {
                closeSidebar();
            }
        });
    });
</script>