<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php  
$preco = $_GET['preco'] ?? 0;
$percentual = $_GET['percentual'] ?? 0;
$resultado = $preco + ($preco * $percentual / 100);

$padrão = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

?>

    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="preco">Preço do Produto (R$)</label>
        <input type="number" name="preco" id="preco" value="<?= $preco ?>">
        <label for="percentual">Qual será o percentual de reajuste? (<strong><?= $percentual ?>%</strong>)</label>
        <input type="range" name="percentual" id="percentual" min="0" max="100" value="<?= $percentual ?>" >
        <input type="submit" value="Reajustar">
    </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>

        <p>O produto que custava <?= numfmt_format_currency($padrão, $preco, 'BRL')  ?>, com <Strong><?= $percentual ?>% de aumento</Strong> vai passar a custar <?= numfmt_format_currency($padrão, $resultado, 'BRL' ) ?> </p>
    </section>
</body>
<script>
    const percentualInput = document.getElementById('percentual');
    const percentualLabel = document.querySelector('label[for="percentual"]');
    percentualInput.addEventListener('input', () => {
        percentualLabel.innerHTML = `Qual será o percentual de reajuste? <strong>(${percentualInput.value}%)</strong>`;
    });
</script>

</html>