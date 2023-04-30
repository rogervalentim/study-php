<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
  $ano_nascimento = $_GET['ano'] ?? 0; 
  $ano_atual = date('Y');
  $descobrir_idade= $_GET['idade'] ?? 0;
?>

    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?= $_SERVER['PHP_SELF']?>">
        <label for="ano">Em que ano você nasceu?</label>
        <input type="number" name="ano" id="ano" value="<?= $ano_nascimento ?>">
        <label for="idade">Quer saber a sua idade em que ano? (atualmente estamos em <strong><?= $ano_atual ?></strong>)</label>
        <input type="number" name="idade" id="idade" value="<?= $descobrir_idade ?>">
        <input type="submit" value="Qual será a minha idade?">
        </form>
    </main> 



    <section>
        <h2>Resultado</h2>
       
        <?php 
        $idade = ($descobrir_idade - $ano_nascimento);
        echo "<p>Quem nasceu em $ano_nascimento vai ter <strong>$idade anos</strong> em $ano_atual!</p>";
        ?>
    </section>
</body>
</html>