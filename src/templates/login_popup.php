<!-- HTML do Popup de Login/Cadastro (Slide-out Menu) -->
<div id="login-sidebar" class="login-sidebar">
    <!-- Conteúdo do Login/Cadastro Simples (Imagem 1) -->
    <div id="login-content" class="sidebar-content active">
        <div class="sidebar-header">
            <button id="close-sidebar" class="close-btn">&times;</button>
        </div>
        <div class="sidebar-body">
            <h3 class="title">CADASTRAR COM REDE SOCIAL</h3>
            <button class="social-login-btn google-btn">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1200px-Google_%22G%22_logo.svg.png"
                    alt="Google Logo">
                ENTRAR COM O GOOGLE
            </button>

            <div class="divider">OU</div>

            <h3 class="title">ENTRAR</h3>
            <form id="login-form">
                <div class="input-group">
                    <input type="text" id="login-email" placeholder="*E-mail ou CPF" required>
                </div>
                <div class="input-group">
                    <input type="password" id="login-senha" placeholder="*Senha" required>
                </div>
                <a href="#" class="forgot-password">Esqueci minha senha</a>

                <button type="submit" class="btn btn-primary">ENTRAR</button>
            </form>

            <div class="divider">OU</div>

            <h3 class="title">PRIMEIRO ACESSO?</h3>
            <button id="show-register-form" class="btn btn-secondary">QUERO ME CADASTRAR</button>
        </div>
    </div>

    <!-- Conteúdo do Cadastro Completo (Imagem 2) -->
    <div id="register-content" class="sidebar-content">
        <div class="sidebar-header">
            <button id="back-to-login" class="back-btn"><i class="fas fa-chevron-left"></i> VOLTAR</button>
        </div>
        <div class="sidebar-body">
            <h3 class="title">CADASTRAR COM REDE SOCIAL</h3>
            <button class="social-login-btn google-btn">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/1200px-Google_%22G%22_logo.svg.png"
                    alt="Google Logo">
                ENTRAR COM O GOOGLE
            </button>

            <div class="divider">OU</div>

            <h3 class="title">CADASTRO</h3>
            <form id="register-form">
                <div class="input-group">
                    <input type="email" id="reg-email" placeholder="*E-mail" required>
                </div>
                <div class="input-group">
                    <input type="text" id="reg-cpf" placeholder="*CPF" required>
                </div>
                <div class="input-group">
                    <input type="text" id="reg-nome" placeholder="*Nome" required>
                </div>
                <div class="input-group">
                    <input type="text" id="reg-sobrenome" placeholder="*Sobrenome" required>
                </div>
                <div class="input-group">
                    <label for="reg-data-nasc">Data de nascimento</label>
                    <input type="date" id="reg-data-nasc">
                </div>

                <div class="preferences-group">
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
                    <input type="password" id="reg-senha" placeholder="*Senha" required>
                </div>
                <div class="password-rules">
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
                    <input type="tel" id="reg-telefone" placeholder="*Telefone" required>
                </div>

                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" id="termos" required>
                        Li, aceito os <a href="#">Termos de Uso</a> e estou ciente da <a href="#">Política de
                            Privacidade</a>
                    </label>
                </div>

                <!-- ReCAPTCHA Placeholder -->
                <div class="recaptcha-placeholder">
                    <p>Não sou um robô</p>
                    <div class="recaptcha-box"></div>
                </div>

                <button type="submit" class="btn btn-primary">CADASTRAR-SE</button>
            </form>
        </div>
    </div>
</div>

<!-- Overlay para escurecer o fundo -->
<div id="sidebar-overlay" class="sidebar-overlay"></div>

<style>
    /* Estilos para o Popup de Login/Cadastro (Slide-out Menu) */

    /* Variáveis de cor baseadas nas imagens (tons de rosa) */
    :root {
        --primary-color: #ff69b4;
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
        /* Largura total em mobile */
        max-width: 400px;
        /* Largura máxima em desktop, como na imagem */
        height: 100%;
        background-color: white;
        box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        transform: translateX(100%);
        /* Escondido para a direita */
        transition: transform 0.3s ease;
        overflow-y: auto;
        /* Para formulários longos */
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
        width: 100%;
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
        width: 100%;
        padding: 10px;
        border: 1px solid var(--border-color);
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
    }

    .input-group label {
        display: block;
        font-size: 12px;
        color: #666;
        margin-bottom: 5px;
    }

    /* Link Esqueci Senha */
    .forgot-password {
        display: block;
        text-align: right;
        font-size: 12px;
        color: var(--primary-color);
        text-decoration: none;
        margin-bottom: 20px;
    }

    /* Botões de Ação */
    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
        text-transform: uppercase;
        margin-bottom: 10px;
        transition: background-color 0.2s ease;
    }

    .btn-primary {
        background-color: var(--primary-color);
        color: white;
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
        border-radius: 4px;
        margin-bottom: 20px;
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