<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Desafio 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
$A = 5;
$B = 10;
$C = 15;

if($A + $B == $C) {
    echo "A soma de A e B é Igual a C <br>";
} else {
    echo "A soma de A e B não é igual a C <br>";
}

# OU
// Implementação da Verificação de Soma
echo $A + $B == $C ? "A soma de A e B é Igual a C <br>" : "A soma de A e B não é igual a C <br>";


// Desafio 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/
$numero = 8;
// Implementação do Cálculo do Quadrado

$quadrado = $numero * $numero;

echo "O quadrado de $numero é $quadrado <br>";

// Desafio 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/
$numero = 14;
// Implementação da Verificação de Paridade
if ($numero % 2 == 0) {
    echo "$numero é um número par <br>";
} else {
    echo "$numero é um número ímpar <br>";
}


// Desafio 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/
$numero1 = 10;
$numero2 = 15;
$numero3 = 20;

// Implementação do Cálculo da Média
$media = ($numero1 + $numero2 + $numero3) / 3;
echo "A média entre $numero1 + $numero2 + $numero3 é: $media <br>";


// Desafio 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/
$numeroMultiplo = 15;
$multiploDe = 5;
// Implementação da Verificação de Múltiplo
if($numeroMultiplo % $multiploDe == 0) {
    echo "$numeroMultiplo é múltiplo de $multiploDe";
} else {
    echo "$numeroMultiplo não é múltiplo de $multiploDe";
}
echo "<br>";


//// Exercício 2: Números Primos em um Intervalo
/*
    Solicita dois números inteiros ao usuário (N e M, onde N < M) e exibe todos os números primos no intervalo de N a M.
*/
$numeroN = 1;
$numeroM = 25;

// Implementação de Números Primos em um Intervalo
function ehPrimo($numero) {
    // Verifica se o número é menor ou igual a 1
    if($numero <= 1) {
        return false;
    }

    // Verifica se o número é divisível por algum número entre 2 e a raiz quadrada do próprio número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if($numero % $i == 0) {
            return false; // Se for divisível, não é primo
        }
    }
    return true; // Se não for divisível, é primo
}

echo "Números primos no intervalo de $numeroN até $numeroM: ";
for($i = $numeroN; $i <= $numeroM; $i++) {
    if(ehPrimo($i)) {
        echo "$i "; // Adiciona o número a lista dos primos se for um número primo
    }
}

echo "<br>";

//// Exercício 3: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/
$horas_string = "01:30";

// Implementação de Conversão de Horas em Minutos
$horas = explode(":", $horas_string);
$totalMinutos = $horas[0] * 60 + $horas[1];

echo "O equivalente total em minutos de $horas_string é: $totalMinutos <br>";

/// Exercício 4: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/
$altura_piramide = 5;
// Implementação de Desenho de Pirâmide

for($i = 1; $i <= $altura_piramide; $i++) {
    echo str_repeat("-", $altura_piramide - $i) . str_repeat("* ", $i) . "<br>";
}

echo "<br>";

# ou

for($i = 1; $i <= $altura_piramide; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//// Exercício 6: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/
$numeroDigitos = 2048;
// Implementação de Contagem de Dígitos em um Número
echo "O número de dígitos em $numeroDigitos é: " . strlen($numeroDigitos) . "<br>";



//// Exercício 7: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/
$palavra = "abbabba";
$palavraInvertida = strrev($palavra);

// Implementação de Verificação de Palíndromo
if($palavra == $palavraInvertida) {
    echo "A palavra $palavra é um palíndromo. <br>";
} else {
    echo "A palavra $palavra não é um palíndromo. <br>";
}

# ou (modo Walther)
echo $palavra == strrev($palavra) ? "A palavra $palavra é um palíndromo. <br>" : "A palavra $palavra não é um palíndromo. <br>";

//// Exercício 8: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/
$numero1 = 25;
$numero2 = 1;
$numero3 = 7;

// Implementação de Ordenação de Números
$numeros = [$numero1, $numero2, $numero3];
sort($numeros);

echo "Números em ordem crescente: ";
foreach($numeros as $numero) {
    echo "$numero ";
}
echo "<br>";
//// Exercício 9: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos os seus dígitos.
*/
$numeroSoma = 599;
// Implementação de Soma de Dígitos
$numero_string_array = str_split($numeroSoma); //separa os números como um array de string
$somaDosDigitos = array_sum($numero_string_array); // soma os valores contídos no array

echo "A soma dos dígitos de $numeroSoma é: $somaDosDigitos. <br>";

//// Exercício 10: Geração de Sequência Numérica
/*
    Solicita ao usuário um número inteiro N e exibe os primeiros N números da sequência: 1, 3, 6, 10, 15, 21, ...
*/
// Implementação de Geração de Sequência Numérica
?>