<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        
        <?php 
        $numeroReal = $_GET["numero"] ?? 0;
        $parteFracionária = fmod($numeroReal, 1);

        echo "<p>Analisando o número <strong>" . number_format($numeroReal, 3 , "," , ".") . "</strong> informado pelo usuário:" . "<br>" . "<ul><li>A parte inteira do número é <strong>" . intval($numeroReal) . "</strong></li>" . "<li>A parte fracionária do número é <strong>" . number_format($parteFracionária, 3, ",", ".") . "</strong> </li> </ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>