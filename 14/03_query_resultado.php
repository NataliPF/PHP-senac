<?php
// Definindo constantes para a conexão com o banco de dados
define('DB_SEVER',  'localhost'); 
define('DB_USERNAME',  'usuario_contatos');   
define('DB_PASSWORD',  'Senha@123' );  
define('DB_NAME',   'contatos');

// Criar uma conexão com banco de dados
$connection new = mysqli(DB_SEVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificando se ocorreu algum erro de conexão
if($connection->connect_error) {
 die("Error de conexão: " . $connection->connect_error);
}

// Exemplo de consulta SQL para selecionar todos os registros da tabela
$sql = "SELECT * FROM contatos_info";

// Método 1: Ultilizando fetch_assoc()
$result = $connection->query($sql);

if($result->num_rows>0) {
while($row = result->fetch_assoc()) {
    // Exibe os valores dos campos utilizando o método fetch_assoc()
    echo"ID: " . $row["id"]."<br>";
    echo"Nome: " . $row["nome"]."<br>";
    echo"Email: " . $row["email"]."<br>";
    echo"<hr>";
 }
} else {
    echo "Nenhum registro encontrado";
}

?>