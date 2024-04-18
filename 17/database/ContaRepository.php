<?php
require_once 'DatabaseRepository.php';

class ContaRepository {
    public static function getAllConta() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query('SELECT * FROM cliente');

        $conta= [];
        if ($result->num_rows . 0) {
            while ($row = $result->fetch_assoc()) {
                $cliente[] = $row;
            }
        }
        $connection->close();
        return $cliente;
    }
}


?>