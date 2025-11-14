<?php

require_once(__DIR__ . '/../includes/conexao.php');

session_start();
if (isset($_SESSION["email"])) {
    session_destroy();
    echo "<h2>Você saiu com sucesso!</h2>";
    echo '>';
} else {
    echo "<h2>Você não está logado.</h2>";
    echo '<a href="../index.php">Clique aqui para fazer login.</a>';
}
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <title>Bebê ao juvenil! Desde 2014🙌 - Bia Fashion Kids</title>
</head>

<body>

</body>


</html>