<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Pesquisar Livro</title>
</head>

<body>

    <?php
    include("includes/header.php");
    ?>
    <p>Pesquise por livro, genero ou autor</p>
    <img src="image/image-lupa.png" height="60px" width="60px" alt="">

<div class="pesquisa">
    <input type="text" name="pesquisa" placeholder="Pesquisar por livro">
    <input type="text" name="pesquisa" placeholder="Pesquisar por genero">
    <input type="text" name="pesquisa" placeholder="Pesquisar por autor">
</div>
<div class="bt">
    <button>Pesquisar</button>
</div>

    <?php
    include("includes/footer.php");
    ?>
</body>

</html>