<?php

require_once("Armario.php");

class Escritorio{
    private array $armarios = [];


    public function getArmarios(): array{
        return $this->armarios;
    }

    public function setGavetas(array $armarios): void{
        $this->setArmarios = $armarios;
    }


    public function adicionarArmario($armarios){
        return $this->armarios[] = $armarios;
    }

    public function removerArmarios($indice){
        foreach($this->armarios as $index => $armario){
            if ($index === $indice){
                unset($this->armario[$index]);
                echo "<br>O armario de número: {$indice} foi removido<br>";
                break;
            } else {
                echo "O armario de número: {$indice} não existe<br>";
                break;
            }
        }
    }

    public function listarArmarios(){
        echo "Os armarios deste escritório são: ";
        foreach ($this->armarios as $index => $armario){
            echo "<li>{$index} - armario <br></li>";
        }
    }


    public function auditoria(){
        foreach ($this->armarios as $index => $armario){
            echo "{$index} - armario <br>";

            foreach ($armario->getGavetas() as $index => $gaveta){
                    echo "ㅤ{$index} - gaveta <br>";

                        foreach ($gaveta->getItens() as $index => $item){
                            echo "ㅤㅤ{$index} - item <br>";
                        }
                echo "<br>";
            }
        }
    }

}