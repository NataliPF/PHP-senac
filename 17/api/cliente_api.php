<?php

require_once '../database/ClienteRepository.php';

$action = $_GET['action'];

switch ($action) {
    case 'listar':
        echo json_encode(ClienteRepsitory::getAllClientes());
        break;
    default:
    http_response_code(400);// Requisição inválida
    echo json_encode(['error' => 'Ação inválida']);
}

function listarClientes(){
    $clientes = ClienteRepsitory::getAllClientes();
    echo json_encode($clientes);
}
?>