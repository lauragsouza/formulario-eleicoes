<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante Final</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
    <div class="card comprovante">

        <h1>♡ Comprovante ♡</h1>

        <p class="sucesso">
            Seus votos foram registrados!
        </p>

        <div class="voto">
            <strong>Deputado Estadual</strong>
            <span>Nº <?php echo $_SESSION["deputado_estadual"]; ?></span>
        </div>

        <div class="voto">
            <strong>Deputado Federal</strong>
            <span>Nº <?php echo $_SESSION["deputado_federal"]; ?></span>
        </div>

        <div class="voto">
            <strong>1º Senador</strong>
            <span>Nº <?php echo $_SESSION["senador1"]; ?></span>
        </div>

        <div class="voto">
            <strong>2º Senador</strong>
            <span>Nº <?php echo $_SESSION["senador2"]; ?></span>
        </div>

        <div class="voto">
            <strong>Governador</strong>
            <span>Nº <?php echo $_SESSION["governador"]; ?></span>
        </div>

        <div class="voto">
            <strong>Presidente</strong>
            <span>Nº <?php echo $_SESSION["presidente"]; ?></span>
        </div>

        <p class="finalizado">
            ✓ Votação finalizada
        </p>

    </div>
</div>

</body>
</html>