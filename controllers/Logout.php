<?php

require_once(__DIR__ . '/../includes/conexao.php');

session_start();
if (isset($_SESSION["email"])) {
    session_destroy();
    echo "";
} else {
    echo "";
}
if (isset($_POST['logout'])) {
    unset($_SESSION["email"]);
    header('Location: index.php');
    echo '<script>
            setTimeout(function() {
            window.location.href = "index.php";
            }, 5000);
        </script>';
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
    <img class="logo" src="../src/images/logo_bfk.JPG" alt="">
</body>

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
    }

    .logo {
        width: 310px;
        animation: none;
        margin-bottom: 20px;
    }
</style>

</html>
<script>
    setTimeout(function() {
        window.location.href = "../index.php";
    }, 3000);
</script>