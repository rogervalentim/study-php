<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $cotação = 5.05;

    $real = 2000;

    $dolar = $real / $cotação;

    // echo " Seus R\$". number_format($real, 2, ",", ".") . " equivale a US\$". number_format($dolar, 2, ",", ".");

    $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a" . numfmt_format_currency($padrão,$dolar, "USD");
    ?>
</body>
</html>