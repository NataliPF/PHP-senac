<?php
/*
    Exercício 1 - Concatenação de Strings:
    Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira".

    Exercício 2 - Comprimento de uma String:
    Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.

    Exercício 3 - Substituição de Caracteres:
    Crie uma variável contendo uma frase. Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e exiba o resultado.

    Exercício 4 - Conversão de Case:
    Crie uma variável contendo uma palavra. Converta a palavra para letras minúsculas e depois para letras maiúsculas. Exiba ambas as versões da palavra.

    Exercício 5 - Remoção de Espaços em Branco:
    Crie uma variável contendo uma URL. Remova todos os espaços em branco no início e no final da URL e exiba o resultado.

    Exercício 6 - Posição da Primeira Ocorrência:
    Crie uma variável contendo uma lista de compras. Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada.

    Exercício 7 - Inversão de uma String:
    Crie uma variável contendo uma palavra. Inverta a palavra e exiba o resultado.
*/

    // 1
    $nome = "Ana";
    $profissao = "Engenharia";
    $frase = $nome . " é " . $profissao;
    echo $frase . "<br>";

    // 2 
    $senha = "senha123";

    if(strlen($senha) >= 8) {
        echo "Senha válida. <br>";
    } else {
        echo "Senha deve ter pelo menos 8 caractares <br>";
    }

    //3
    $frase = "O cachorro late alto.";
    $nova_frase = str_replace("cachorro", "gato", $frase);
    echo $nova_frase ."<br>";

    //4
    $palavra = "ExEmPlO";
    $palavra_minuscula = strtolower($palavra);
    $palavra_maiuscula = strtoupper($palavra);

    echo "Plavara em minúsculoas: $palavra_minuscula <br>";
    echo "Plavara em maiúsculas: $palavra_maiuscula <br>";

    //5
    $url = "           http://exemplo.com  ";
    $url_sem_espacos = trim($url);
    echo $url_sem_espacos ."<br>";

    //6
    $lista_compras = "arroz, feijao, leite, carne";
    $posicao_leite = strpos($lista_compras, "leite");
    echo "A posicao do item 'leite' na lsita de compras é: $posicao_leite <br>";

    //7
    $palavra = "abcd1234";
    $palavra_invertida = strrev($palavra);
    echo $palavra_invertida;
?>

