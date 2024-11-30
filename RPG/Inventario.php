<?php

require_once("Item.php");
require_once("Player.php");

class Inventario{
    private int $capacidadeMax;
    private array $itens = [];

    public function __construct(int $capacidadeMax){
        $this->setCapacidadeMax($capacidadeMax);
    }

    public function getCapacidadeMax(): int{
        return $this->capacidadeMax;
    }

    public function setCapacidadeMax(int $capacidadeMax): void{
        $this->capacidadeMax = $capacidadeMax;
    }

    public function adicionarItem(Item $item){
        if($this->capacidadeLivre() >= $item->getTamanho()){
            $this->itens[] = $item;
            echo "O Item {$item->getNome()} foi adicionado ao inventario<br>";
        }else {
            echo "Não foi possivel adicionar o Item: {$item->getNome()}(Sem espaço)<br>";
        }
    }

    public function removerItem(Item $item){
        foreach($this->itens as $indice => $itens){
            if($itens == $item){
            unset($this->itens[$indice]);
            echo "{$item->getNome()} foi excluido com sucesso<br>";
            }
        }   
    }

    public function mostrarItens(){
        echo "Seu inventario: <br>";
        foreach($this->itens as $itens){
            echo "-{$itens->getNome()}<br>";
        }
    }


    public function capacidadeLivre(){
        $i = 0;
       foreach($this->itens as $item){
        $i += $item->getTamanho();
       }
       return $this->capacidadeMax - $i;
    }
}