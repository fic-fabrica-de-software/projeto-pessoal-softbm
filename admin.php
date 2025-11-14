<?php include 'src/templates/header.php'; ?>
<link rel="stylesheet" href="src/templates/style_index.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Compras</title>
</head>
<body>
    <h2>Página de Administrador</h2>
    <h4>Seja Bem Vindo, <?php $_SESSION['nome_admin']?></h4>
    <div class = "botoes">
        <a href = cadastrar_produto.php>
            <input type = button value = "Cadastrar">
</a>

 <a href = cadastrar_produto.php>
            <input type = button value = "Editar">
</a>
 <a href = cadastrar_produto.php>
            <input type = button value = "Excluir">
</a>
<h4>Últimas compras:</h4>
<a href = visualizar.compras.php>
            <input type = button value = "Acompanhar">
</a>

<a href = sair.php>
            <input type = button value = "Sair">
</a>
</body>
</html>


<?php include 'src/templates/footer.php'; ?>

<style>
    h2{
        text-align: center;

    }

     h4{
        text-align: center;

    }
