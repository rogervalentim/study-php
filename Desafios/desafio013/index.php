<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="notas.css">
</head>
<body>

<?php 

$valor = $_GET['valor'] ?? 0;

// Define as quantidades iniciais de cada nota como zero
$qtd_nota_100 = 0;
$qtd_nota_50 = 0;
$qtd_nota_10 = 0;
$qtd_nota_5 = 0;

// Calcula a quantidade de notas necessárias para cada valor
if ($valor >= 100) {
  $qtd_nota_100 = intval($valor / 100);
  $valor -= $qtd_nota_100 * 100;
}
if ($valor >= 50) {
  $qtd_nota_50 = intval($valor / 50);
  $valor -= $qtd_nota_50 * 50;
}
if ($valor >= 10) {
  $qtd_nota_10 = intval($valor / 10);
  $valor -= $qtd_nota_10 * 10;
}
if ($valor >= 5) {
  $qtd_nota_5 = intval($valor / 5);
  $valor -= $qtd_nota_5 * 5;
}

$valor_saque = $_GET['valor'] ?? 0;

?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?>" min="0" step="5">
            <p>*Notas disponíveis: R$100, R$50, R$10 e R$5 </p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de R$<?= number_format($valor_saque, 2, ',', '.') ?>  Realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
      
            <li><img class="nota" src="./cem-reais.jpg" alt="nota de cem reais" /> x<?= $qtd_nota_100?> </li>
            <li><img class="nota" src="./ciquenta-reais.jpg" alt="nota de ciquenta reais" />x <?= $qtd_nota_50 ?></li>
            <li><img class="nota" src="./dez-reais.jpg" alt="nota de dez reais">x <?= $qtd_nota_10 ?></li>
            <li><img class="nota" src="./cinco-reais.jpg" alt="nota de cinco reais">x <?= $qtd_nota_5 ?></li>
        </ul>
    </section>
</body>
</html>