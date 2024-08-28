<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tipos Primitivos em PHP</h1>
    <?php
        // STRING - cadeia de caracteries  - semrpre etre aspas
        // INT - para numeros inteiros
        // FLOAT/DOUBLE - valor mumerico REAL - que vem com parte decimal
        // BOOL - apenas True e False 


        // 0x = hexadecimal
        // 0b = binario
        // 0 = octal

        // $num = 010;
        // echo "O valor da variavel é $num";

        // $v = "luan";
        // var_dump($v);

        // $num = (integer) 3e2; // 3 x 10(2) coerção
        // echo "O valor é $num";

        // $num = (float) "950";
        // var_dump($num);

        // $casado = true;
        // var_dump($casado);
        // print "O valor para casado é $casado";

        // $vet = [6, True, 9, "maria", 5];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p)

    ?>
    
</body>
</html>