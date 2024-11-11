<?php

require_once("Gaveta.php");

class Armario{
    private array $gavetas = [];


    public function getGavetas(): array{
        return $this->gavetas;
    }

    public function setGavetas(array $gavetas): void{
        $this->setGavetas = $gavetas;
    }


    public function adicionarGaveta(Gaveta $gavetas){
        return $this->gavetas[] = $gavetas;
    }

    public function removerGavetas($indice){
        foreach($this->gavetas as $index => $gaveta){
            if ($index === $indice){
                unset($this->gavetas[$index]);
                echo "A gaveta de número: {$indice} foi removida<br>";
                break;
            } else {
                echo "<br>A gaveta de número: {$indice} não existe<br>";
            }
        }
    }

    public function listarGavetas(){
        echo "<br>As gavetas dentro deste armário são:";
        foreach ($this->gavetas as $index => $gaveta){
            echo "<li>{$index} - gaveta <br></li>";
        }
    }

}