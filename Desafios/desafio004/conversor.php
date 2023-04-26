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
        <h1>Conversor de moedas</h1>
    <?php
    $inicio = date('m-d-Y', strtotime('-7 days'));
    $fim = date('m-d-Y');
    $url =
        'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' .
        $inicio .
        '\'&@dataFinalCotacao=\'' .
        $fim .
        '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotação = $dados['value'][0]['cotacaoCompra'];

    $real = $_GET['numero'] ?? 0;

    $dolar = $real / $cotação;

    // echo " Seus R\$". number_format($real, 2, ",", ".") . " equivale a US\$". number_format($dolar, 2, ",", ".");

    $padrão = numfmt_create('pt_BR', NumberFormatter::CURRENCY);

    echo '<p>Seus ' .
        numfmt_format_currency($padrão, $real, 'BRL') .
        ' equivalem a <strong>' .
        numfmt_format_currency($padrão, $dolar, 'USD') .
        '</strong></p>';
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>