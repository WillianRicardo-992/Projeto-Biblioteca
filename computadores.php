<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Reservar Computador</title>
</head>
<body>
    <?php
    include("includes/header.php");

    ?>
        <p>Selecione a quantidade de horas, o dia e o horário a ser utilizadas</p>
        <img src="image/data.png" width="120px" height="80px" alt="">
        
    <div class="horario">

        <select id="hora" name="hora">
            <option value="SL">Quantidade de horas</option>
            <option value="UM">Uma</option>
            <option value="DU">Duas</option>
            <option value="TR">Tres</option>
        </select>
        <select id="dia" name="dia">
            <option value="SL">Selecione o dia</option>
            <option value="SF">Segunda</option>
            <option value="TF">Terça</option>
            <option value="QF">Quarta</option>
            <option value="QFA">Quinta</option>
            <option value="SX">Sexta</option>
            
        </select>
        <select id="hora" name="hora">
            <option value="SL">Selecione o Horário</option>
            <option value="H1">7 ás 8</option>
            <option value="H2">8 ás 9</option>
            <option value="H3">9 ás 10</option>
            <option value="H4">10 ás 11</option>
            <option value="H5">11 ás 12</option>
            <option value="H6">12 ás 13</option>
            <option value="H6">13 ás 14</option>
            <option value="H6">14 ás 15</option>
            <option value="H6">15 ás 16</option>
            <option value="H6">16 ás 17</option>
        </select>
    </div>
    <div class="op">
        <button>Confirmar</button>
        <button>Limpar</button>    
    </div>
    
    <?php
    include("includes/footer.php");
    ?>
</body>
</html>