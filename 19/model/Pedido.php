<?php
class Pedido {
    private $id;
    private $data_pedido;
    private $status;

    public function _construct($id, $data_pedido, $status) {
        $this->id = $id;
        $this->data_pedido = $data_pedido;
        $this->status = $status;


    }
}

?>