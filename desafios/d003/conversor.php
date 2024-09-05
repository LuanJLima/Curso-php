<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="../modelo.css">
</head>
<body>
   
    <main> 
        <h1>Resultado da Conversão</h1>
        <?php
            // Cotação copiada pelo google 05/09/2024
            $cotação = 5.57;
            $number = ($_REQUEST)["number"];
            $resultado = $number / $cotação;

            echo "Seus R\$". number_format($number, 2, "," , ".")." reais equivalem a U\$".number_format($resultado, 2, "," , ".")." dolares";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

    </main>
    
</body>
</html>