<?php

function nomeDaFuncao() {
// Bloco de código da função
}

// Declaração de função sem parâmetros e sem retorno
function saudacao() {

    echo "Olá TII04! <br> ";
}
saudacao(); // Chamada da função

// Declaração de uma função que retorna um valor 
function saudacao_retorno() {
    return "Olá, TII04 <br>";
}

echo saudacao_retorno(); // Chamada de função com retorno

// Declaração de uma função que recebe parametro
function saudacao_parametro($nome) {
    echo "Olá, $nome& <br>";
}

saudacao_parametro("TII04");
?>