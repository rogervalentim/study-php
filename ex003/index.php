<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>
<body>
    <h1>Tipos Primitivos</h1>
    <?php 
    // 0x = hexadecimal, 0b = binário, 0 = octal 
    // $num = 010;
    // echo "O valor da variável é $num";

    // $v = "Roger";
    // var_dump($v);
    
    // $num = (int) 3e2; 3 x 10 (2) => coerção
    // echo "O valor é $num";
    // var_dump($num);

    // $num = (int) "950";
    // var_dump($num);

    // $casado = true;
    // var_dump($casado);
    // print "O valor da variável é $casado";

    // $vet = [6, 2, "Roger", 3.5 , false];
    // var_dump($vet);

    class Pessoa { 
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);
    ?>
</body>
</html>