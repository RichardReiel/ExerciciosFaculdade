<?php

require_once("Item.php");

class Pasta extends Item{
    private string $categoria;

    public function __construct(string $nome, string $descricao, int $categoria){
        parent::__construct($nome, $descricao, $categoria);
        $this->setCategoria($categoria);
    }

    public function getCategoria(): string{
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void{
        $this->categoria = $categoria;
    }


}