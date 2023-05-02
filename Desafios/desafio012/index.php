<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 

$valor = $_GET['segundos'] ?? 0;
$semanas = floor($valor / 604800) ?? 0;
$dias = floor(($valor % 604800) / 86400) ?? 0;
$horas = floor(($valor % 86400) / 3600) ?? 0;
$minutos = floor(($valor % 3600) / 60) ?? 0;
$segundos = $valor % 60 ?? 0;


?>

    <main>
        <h2>Calculadora de tempo</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="segundos">Qual é o total de segundos?</label>
        <input type="number" name="segundos" id="segundos" value="<?= $valor ?>">
        <input type="submit" value="Calcular">
    </form>
    </main>
    
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?= number_format($valor, 0, ',', '.') ?> segundos</strong> equivalem a um total de: 
     </p>
     <ul>
        <li><?= $semanas ?> semanas</li>
        <li><?= $dias ?> dias</li>
        <li><?= $horas ?> horas</li>
        <li><?= $minutos ?> minutos</li>
        <li><?= $segundos ?> segundos</li>
     </ul>
    </section>
</body>
</html>