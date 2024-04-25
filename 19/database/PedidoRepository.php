<?php

 require_once 'DatabaseRepository.php';
 require_once 'model/Pedido.php';

class PedidoRepository {
    public static function getAllPedidos() {
        $connection = DatabaseRepository::connect();
        $result = $connection->query("SELECT * FROM pedidos");

        $pedido = [];
        if($result -> num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $pedido = new Pedido($row['id'], $row['data_pedido'], $row['status']);
                $pedidos[] = $row;
            }
        }
        $connection->close();
        return $pedidos;
    }

}

?>