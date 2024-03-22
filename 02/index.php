<?php
///STRING

//Para unir duas ou mais string em PHP, usamos o operador de concatenação.
$nome = "Nátali";
$sobrenome = "Projetti";

echo $nome . " " . $sobrenome; // Saída: Nátali Projetti
echo "<br>";

//Para obter o compirmento de uma string em PHP, usamos a função strlen()
$texto = "Olá, Mundo!";
echo strlen($texto); // Saída : 12
echo "<br>";

// Para substituir partes de uma string, usamos a função str_replace()
$texto = "O rato roeu a roupa do rei.";
$novo_texto = str_replace("rato", "gato", $texto);
echo $novo_texto; // Saída: O gato roeu a roupa do rei.
echo "<br>";

// strtolower(): Coverte uma string para letras minúsculas
// strtoupper(): Coverte uma string para letras maiúsculas
$texto = "Olá, Mundo!";
$texto_minusculo = strtolower( $texto );
$texto_maisculo = strtoupper( $texto );

echo $texto_minusculo;
echo "<br>";

echo $texto_maisculo;
echo "<br>";

echo $texto;

// trim(): Remove espaço em branco no imício e no final de uma string
$texto =  " Olá, Mundo! ";
$texto_sem_espacos = trim($texto);
echo $texto_sem_espacos; // Saída: Olá, Mundo!
echo "<br>";

// strpos(): Econtra a posição da primeira ocorrêcia de uma sbustring em uma string
$texto = "O rato roeu a roupa do rei";
$posicao = strpos($texto,"rato"); // Saída 2 (posição da primeira letra da palavra "rato")
echo $posicao;
echo "<br>";

 
 // strrev(): Inverte uma string
$texto = "Socorram-me subi no onibus em Marrocos";
$texto_invertido = strrev($texto);
echo $texto_invertido; // Saída: socorraM me subino on ibus em-marrocoS

?>
