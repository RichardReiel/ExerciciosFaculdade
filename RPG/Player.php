<?php

require_once("Inventario.php");
require_once("Item.php");


class Player{

    private string $nick;
    private int $nivel;
    private Inventario $inventario;


    public function __construct(string $nick, int $nivel, Inventario $inventario){
        $this->setNick($nick);
        $this->setNivel($nivel);
        $this->setInventario($inventario);
    }


    public function getNick(): string{
        return $this->nick;
    }

    public function setNick(string $nick): void{
        $this->nick = $nick;
    }

    public function getNivel(): int{
        return $this->nivel;
    }

    public function setNivel(int $nivel): void{
        $this->nivel = $nivel;
    }

    public function getInventario(): Inventario{
        return $this->inventario;
    }

    public function setInventario(Inventario $inventario): void{
        $this->inventario = $inventario;
    }

    public function coletarItem(Item $item){
        $this->inventario->adicionarItem($item);
    }

    public function soltarItem(Item $item){
        $this->inventario->removerItem($item);
    }

    public function subirNivel(){
        $this->nivel += 1;
        $this->inventario->setCapacidadeMax($this->inventario->getCapacidadeMax()+($this->nivel*3));
        echo "<br>Você subiu de nível, seu nível atual: {$this->getNivel()}";
    } 

    public function infoPlayer(){
        echo "{$this->inventario->mostrarItens()}  Player: {$this->getNick()}<br> Nível Atual: {$this->getNivel()} <br> Capacidade Maxima do Inventario: {$this->inventario->getCapacidadeMax()}<br> Capacidade Utilizada do Inventario: " . $this->inventario->getCapacidadeMax() - $this->inventario->capacidadeLivre();
    }
}