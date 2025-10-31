<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se - Bia Fashion Kids</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="src/images/logo_bfk.JPG" alt="Bia Fashion Kids" class="logo">
        </div>

        <div class="form-container">  
            <form method="POST" action="../controllers/CadastroUsuario.php" class="cadastro-form">
                <div class="form-group">
                    <label for="nome_completo">*Nome Completo</label>
                    <input type="text" id="nome_completo" name="nome_completo" required>
                </div>

                <div class="form-group">
                    <label for="email">*Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="data_nascimento">*Data de Nascimento</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>
                </div>

                <div class="form-group">
                    <label for="telefone">*Telefone</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(DDD) + número" required>
                </div>

                <div class="form-group">
                    <label for="cpf">*CPF</label>
                    <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" maxlength="14" required>
                </div>

                <div class="form-group preferences">
                    <label class="preferences-title">Quais são as suas preferências?</label>
                    <p class="preferences-subtitle">Vamos selecionar itens personalizados para você.</p>
                    
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="preferencia_moda" value="Moda Feminina" required>
                            <span>Moda Feminina</span>
                        </label>
                        
                        <label class="radio-label">
                            <input type="radio" name="preferencia_moda" value="Moda Masculina" required>
                            <span>Moda Masculina</span>
                        </label>
                        
                        <label class="radio-label">
                            <input type="radio" name="preferencia_moda" value="Prefiro não informar" required>
                            <span>Prefiro não informar</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">*Senha forte</label>
                    <input type="password" id="password" name="password" placeholder="" maxlength="30" required>
                </div>

                <button type="submit" class="submit-button" name="login">CADASTRAR</button>
            </form>
        </div>
    </div>
</body>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial;
    background: white;
    min-height: 100vh;
    padding: 20px;
}

.container {
    max-width: 600px;
    margin: 0 auto;
    background-color: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

/* Logo centralizada */
.logo-container {
    background-color: rgba(236,162,179,0.9);
    padding: 30px 20px;
    text-align: center;
    background-color: rgba(236,162,179,0.9);
}

.logo {
    max-width: 250px;
    height: auto;
    display: block;
    margin: 0 auto;
    border-radius: 50%;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Formulário */
.form-container {
    padding: 40px 30px;
}

.form-title {
    text-align: center;
   background-color: rgba(236,162,179,0.9);
    font-size: 28px;
    margin-bottom: 30px;
    font-weight: bold;
    letter-spacing: 2px;
}

.cadastro-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.form-group label {
    font-weight: bold;
    color: #333;
    font-size: 14px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="date"],
.form-group input[type="tel"] {
    padding: 12px 15px;
    border: 2px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
    transition: all 0.3s ease;
    outline: none;
}

.form-group input:focus {
    border-color: #c97a9e;
    box-shadow: 0 0 0 3px rgba(201, 122, 158, 0.1);
}

/* Seção de preferências */
.preferences {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    border: 2px solid #e0e0e0;
}

.preferences-title {
    font-size: 16px;
    font-weight: bold;
    color: #333;
    margin-bottom: 8px;
}

.preferences-subtitle {
    font-size: 13px;
    color: #666;
    margin-bottom: 15px;
}

.radio-group {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.radio-label {
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    padding: 10px;
    border-radius: 6px;
    transition: background-color 0.2s ease;
}

.radio-label:hover {
    background-color: #fff;
}

.radio-label input[type="radio"] {
    width: 20px;
    height: 20px;
    cursor: pointer;
    accent-color: #c97a9e;
}

.radio-label span {
    font-size: 14px;
    color: #333;
}

/* Botão de envio */
.submit-button {
    background-color: rgba(236,162,179,0.9);
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(201, 122, 158, 0.3);
    margin-top: 10px;
}

.submit-button:hover {
    background: linear-gradient(135deg, #b86890 0%, #c97a9e 100%);
    box-shadow: 0 6px 15px rgba(201, 122, 158, 0.4);
    transform: translateY(-2px);
}

.submit-button:active {
    transform: translateY(0);
}

/* Mensagens de sucesso e erro */
.success-message {
    background-color: #d4edda;
    border: 2px solid #c3e6cb;
    color: #155724;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.success-message p {
    margin-bottom: 8px;
}

.error-message {
    background-color: #f8d7da;
    border: 2px solid #f5c6cb;
    color: #721c24;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
}

/* Responsividade */
@media (max-width: 768px) {
    .container {
        margin: 10px;
    }

    .form-container {
        padding: 30px 20px;
    }

    .logo {
        max-width: 200px;
    }

    .form-title {
        font-size: 24px;
    }
}

@media (max-width: 480px) {
    .logo {
        max-width: 150px;
    }

    .form-title {
        font-size: 20px;
    }

    .form-container {
        padding: 20px 15px;
    }
}
</style>
</html>