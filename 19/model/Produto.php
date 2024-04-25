<?php
class Produto {
    private $id;
    private $nome;
    private $descricao;
    private $preco;

    public function _construct($id, $nome, $descricao, $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }
}
?>