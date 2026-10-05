<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["governador"] = $_POST["numero"];

    header("Location: presidente.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <div class="card">

        <span class="etapa">5 de 6</span>

        <h1>Governador</h1>

        <p>Digite o número do candidato escolhido:</p>

        <form method="POST">
            <input type="number" name="numero" placeholder="Número" required>

            <button type="submit" class="botao">
                Confirmar voto
            </button>
        </form>

    </div>
</div>

</body>
</html>