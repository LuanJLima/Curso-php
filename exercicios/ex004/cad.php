<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../modelo.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = ($_GET)["nome"] ?? "sem nome";
            $sobrenome = ($_GET)["sobrenome"] ?? "desconhecido";

            echo "<p>É um prazer te conhecer, $nome $sobrenome! Este e meu site!</p>"
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a Pagina anterior</a></p>
    </main>
</body>

</html>

<!-- Ordem de precendencia 
 

1- parenteses = () -> modificador na ordem de precedencia 
2- potencia = **
3- multiplicaçãp divisão e  resto da divisao ou modulo (faz o que vier primeiro da esquerda pra direita) = *; /; %
4- soma e subtração = + e -


-->