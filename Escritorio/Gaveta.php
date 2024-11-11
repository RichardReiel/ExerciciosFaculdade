<?php

require_once("Item.php");

class Gaveta{

    private array $itens = [];


    public function getItens(): array{
        return $this->itens;
    }

    public function setItens(array $itens): void{
        $this->setItens = $itens;
    }


    public function adicionarItem(Item $item){
        return $this->itens[] = $item;
    }


    public function removerItens($nome){
        foreach($this->itens as $index => $item){
            if ($item->getNome() === $nome){
                unset($this->itens[$index]);
                echo "<br>O Item {$item->getNome()} foi removido<br>";
                break;
            } else {
                echo "O item {$nome} não existe nesta gaveta<br>";
                break;
            }
        }
    }

    public function listarItens(){
        echo "<br>Os itens dentro desta gaveta são:";
        foreach ($this->itens as $index => $item){
            echo "<li> {$index} - {$item->getNome()} <br></li>";
        }
    }
}


