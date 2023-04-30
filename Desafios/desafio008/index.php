<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio das raizes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $numero = $_GET['num'] ?? 0;
    $raiz_quadrada = sqrt($numero);
    $raiz_cúbica = $numero ** (1/3);
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="num">Número</label>
            <input type="text" name="num" id="num" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado final</h2>
        <p>Analisando o <strong>número <?= $numero ?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?= number_format($raiz_quadrada, 3, ",", ".") ?></strong></li>
            <li>A sua raiz cúbica é <strong><?= number_format($raiz_cúbica, 3, ",", "." ) ?></strong></li>
        </ul>
    </section>
</body>
</html>