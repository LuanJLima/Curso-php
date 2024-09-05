<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo antecessor e sucessor</title>
    <link rel="stylesheet" href="../modelo.css">
</head>

<body>
    <main>
        <h1>Resultado final</h1>
        <?php 
            $number = ($_REQUEST)["number"];
            $antecessor = $number - 1;
            $sucessor = $number + 1;

             
            echo "<p>O numero escolhido foi, <strong>$number</strong></p>";
            echo "<p>O <strong>antecesso</strong> do numero escolhido é, <strong>$antecessor</strong></p>";
            echo "<p>O <strong>sucessor</strong> do numero escolhido é, <strong>$sucessor</strong></p>";
        ?>

       <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>

    </main>
</body>

</html>