<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $valor1 = $_GET['dividendo'] ?? 0;
    $valor2 = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" min="0" id="dividendo" value="<?= $valor1 ?>">
        <label for="divisor">Divisor</label>
        <input type="number" name="divisor" min="1" id="divisor" value="<?= $valor2 ?>">
        <input type="submit" value="Analisar">
    </form>
    </main> 
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>

       <?php
       $resto = $valor1 % $valor2;
       $resultado = intdiv($valor1 , $valor2);
       ?>

       <table class="divisao">
        <tr>
            <td><?= $valor1 ?></td>
            <td><?= $valor2 ?></td>
        </tr>
        <tr>
            <td><?= $resto ?></td>
            <td><?= $resultado ?></td>
        </tr>
       </table>
    </section>
</body>
</html>