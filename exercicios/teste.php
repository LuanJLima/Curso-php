<?php
// Exibir erros para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Função simples para saudação
function saudacao($nome) {
    return "Olá, " . htmlspecialchars($nome) . "!";
}

// Teste a função saudação
$nome = "Luan";
echo saudacao($nome);
?>