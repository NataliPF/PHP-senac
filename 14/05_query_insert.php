<?php
// Definindo constantes para a conexão com o banco de dados
define('DB_SEVER',  'localhost'); 
define('DB_USERNAME',  'usuario_contatos');   
define('DB_PASSWORD',  'Senha@123' );  
define('DB_NAME',   'contatos');

// Criar uma conexão com banco de dados
$connection = new mysqli(DB_SEVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificando se ocorreu algum erro de conexão
if($connection->connect_error) {
 die("Error de conexão: " . $connection->connect_error);
}

// Criação dos dados para a inserção
$nome = "Pessoa X";
$telefone = "999954321";
$email = "Beltrano@mail.com";

// Query para inserir um contato (utilizando uma consulta preparando)
$meu_insert =  "INSERT INTO contatos_info (nome, telefone, email) VALUES(?, ?, ?)";
$stmt = $connection->prepare( $meu_insert );

// Verifica se a consulta preparada foi  bem-sucedida
if ($stmt) {
    // Associa os parâmetros á consulta preparada 
    $stmt->bind_param("sss", $nome, $telefone, $email);

    // Executa a consulta 
    if ($stmt->execute()) {
        echo "Contato inserido com sucesso.";
    } else {
        echo "Erro ao inserir contato: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Erro na consulta preparada: ". $connection->error;
}

// Fecha a conexão com banco de dados
$connection->close();