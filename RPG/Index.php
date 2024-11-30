<?php

require_once("Player.php");
require_once("Inventario.php");
require_once("Item.php");
require_once("Ataque.php");
require_once("Magia.php");
require_once("Defesa.php");

$item1 = new Ataque("Excalibur");
$item2 = new Ataque("Espada de Prata");
$item3 = new Defesa("Escudo de Cobalto");
$item4 = new Defesa("Escudo de Obsidiana");
$item5 = new Magia("Livro de Caveira");
$item6 = new Magia("Gadanha Demoniaca");


echo "<h3>Player 1</h3>";
$inventario1 = new Inventario(20);
$player1 = new Player("Rubert", 1, $inventario1);
$player1->coletarItem($item1);
$player1->coletarItem($item2);
$player1->coletarItem($item3);
$player1->coletarItem($item1);
echo "Capacidade Livre: {$inventario1->capacidadeLivre()}";
$player1->subirNivel();
echo "<br> Capacidade Livre: {$inventario1->capacidadeLivre()}<br>";
$player1->coletarItem($item5);
$player1->coletarItem($item4);
$player1->soltarItem($item4);
$player1->infoPlayer();
echo "<br><br>";

echo "<h3>Player 2</h3>";
$inventario2 = new Inventario(20);
$player2 = new Player("Richards", 1, $inventario2);
$player2->coletarItem($item2);
$player2->coletarItem($item5);
$player2->coletarItem($item6);
$player2->coletarItem($item1);
$player2->coletarItem($item3);
echo "Capacidade Livre: {$inventario2->capacidadeLivre()}";
$player2->subirNivel();
echo "<br> Capacidade Livre: {$inventario2->capacidadeLivre()}";
$player2->subirNivel();
echo "<br> Capacidade Livre: {$inventario2->capacidadeLivre()}<br>";
$player2->coletarItem($item5);
$player2->coletarItem($item4);
$player2->infoPlayer();


