<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Numeros aleatorios</title>
    <link rel="stylesheet" href="../modelo.css">
</head>
<body>
    
    <main>

        <h1>
            Trabalhando com numeros aleatorios
        </h1>

        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);

            echo "Gerando um número entre $min e $max... \n";
            echo "O número gerado foi <strong>$num</strong>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
    
</body>
</html>