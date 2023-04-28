<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $salário_mínimo = 1380.60;
    $salário = $_GET["salario"] ?? 1380.60;
    $padrão = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

     ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="salario">Salário (R$)</label>
        <input type="number" name="salario" id="salario" step="0.01" value="<?= $salário ?>">
        <p>Considerando o salário mínimo de <Strong><?= numfmt_format_currency($padrão, $salário_mínimo, 'BRL') ?></strong></p>
        <input type="submit" value="Calcular">
    </form>
    </main>
    <section>
        <?php 
        $quociente = intdiv($salário, $salário_mínimo);
        $resto = $salário % $salário_mínimo;
        ?>

        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de <?= numfmt_format_currency($padrão, $salário, 'BRL') ?> ganha <strong><?= $quociente ?> salários mínimos</strong> + <br> <?= numfmt_format_currency($padrão, $resto, 'BRL') ?> </p>
    </section>
</body>
</html>