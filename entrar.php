<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Acesso</title>
</head>

<body>
    <?php
    include("includes/header.php");
    ?>
    <div class="login">
        <h1>Acesso</h1>
        <input type="text" name="usuario" placeholder="email"><br>
        <input type="password" name="senha" placeholder="senha"><br>
        <button>Entrar</button>
    </div>

    <?php
    include("includes/footer.php");
    ?>
</body>

</html>