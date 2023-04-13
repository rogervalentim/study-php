<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <form action="number.php" method="get">
            <h1>Trabalhando com números aleatórios</h1>
            <p>Gerando um número entre 0 e 100 ...</p>
            <?php
            $numero = rand(0, 100);
            echo "<p>O valor gerado foi <strong>$numero</strong></p>";
            ?>
            <input type="button" value="Gerar outro" onClick="window.location.reload()">
        </form>
    </section>
</body>
</html>