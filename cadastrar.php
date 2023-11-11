<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cadastro</title>
</head>

<body>
    <?php
    include("includes/header.php");
    ?>

    <h1>Cadastro</h1>
    <div class="dados">

        <input type="text" name="nome" placeholder="nome">
        <input type="email" name="email" placeholder="e-mail">
        <input type="password" name="senha" placeholder="senha">
        <input type="date" name="data">
        <input type="radio" name="professor">Professor
        <input type="radio" name="professor">Aluno
    </div>
    <div class="button">
        <button type="submit">Cadastrar</button>
        <button type="reset" class="danger">Limpar</button>
    </div>

    <?php
    include("includes/footer.php");
    ?>

</body>

</html>