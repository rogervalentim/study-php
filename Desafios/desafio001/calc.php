<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
        <form>
           <h1>Resultado Final</h1>
           <?php
           $numero = $_GET['numero'];

           echo "<p>O numero escolhido foi <strong>$numero</strong></p>";
           echo '<p>O seu antecessor é' . ' ' . $numero - 1 . '</p>';
           echo '<p>O seu sucessor é' . ' ' . $numero + 1 . '</p>';
           ?>
           <a href="javascript:history.go(-1)">
               <input type="button" value="Voltar">
           </a>
        </form>
</main>
</body>
</html>