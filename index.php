<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Sistema Escolar</title>
</head>

<body>
    <?php
    include("includes/header.php");
    ?>
    <hr><br>
    <p>Escolha uma das opções abaixo</p>
    <div class="button">
        <button><a href="pesquisar-livro.php">Pesquisar Livro</a></button>
        <button><a href="reservar-mesa.php">Reservar mesa</a></button>
        <button><a href="acesso-computadores.php">Acesso a Computadores</a></button>

    </div>
<br><br>

<div class="noticias">

    <h3>Últimos livros adicionados</h3>
    <h3>Mais Lidos</h3>
    <h3>Novidades</h3>
    <h3>Canto da leitura</h3>
    <h3>Outros</h3>
</div>
   <?php
   include("includes/footer.php");
   ?>
</body>

</html>