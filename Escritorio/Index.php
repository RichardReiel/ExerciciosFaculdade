<?php


require_once("Item.php");
require_once("Documento.php");
require_once("Objeto.php");
require_once("Pasta.php");
require_once("Gaveta.php");
require_once("Armario.php");
require_once("Escritorio.php");

//Criado um Escritório
$escritorio = new Escritorio();

//Criado três armarios para esse escritório
$armario1 = new Armario();
$armario2 = new Armario();
$armario3 = new Armario();

//Criando três gavetas, uma para cada armário
$gaveta1 = new Gaveta();
$gaveta2 = new Gaveta();
$gaveta3 = new Gaveta();

//Criando três Documentos(instâncias)
$item1 = new Documento("Arquivo1", "Processos Ganhos", "2023-02-25");
$item2 = new Documento("Arquivo2", "Processos Perdidos", "2022-05-15");
$item3 = new Documento("Arquivo3", "Processos Em Andamento", "2024-11-05");

//Criando três Objetos(instâncias)
$item4 = new Objeto("Objeto1", "Caderno", 0.5);
$item5 = new Objeto("Objeto2", "Caneta", 0.2);
$item6 = new Objeto("Objeto3", "BluePen", 0.3);

//Criando três Pastas(instâncias)
$item7 = new Pasta("Pasta1", "Processos 2021", 1);
$item8 = new Pasta("Pasta2", "Processos 2022", 2);
$item9 = new Pasta("Pasta3", "Processos 2023", 3);

//Adicionando os armários ao escritório
$escritorio->adicionarArmario($armario1);
$escritorio->adicionarArmario($armario2);
$escritorio->adicionarArmario($armario3);

//Adicionando as gavetas aos armários
$armario1->adicionarGaveta($gaveta1);
$armario2->adicionarGaveta($gaveta2);
$armario3->adicionarGaveta($gaveta3);

//Adicionando os itens as gavetas, 3 itens por gaveta
$gaveta1->adicionarItem($item1);
$gaveta1->adicionarItem($item2);
$gaveta1->adicionarItem($item3);
$gaveta2->adicionarItem($item4);
$gaveta2->adicionarItem($item5);
$gaveta2->adicionarItem($item6);
$gaveta3->adicionarItem($item7);
$gaveta3->adicionarItem($item8);
$gaveta3->adicionarItem($item9);

/*Chamando a função auditoria para lista todos os armarios, todas as gavetas e todos os itens de cada gaveta*/
$escritorio->auditoria();

//Listando os armários do escritório
$escritorio->listarArmarios();

//removendo um armário do escritório
$escritorio->removerArmarios(0);

//removendo um armário que não existe no escritório
$escritorio->removerArmarios(5);

//Removendo um item da gaveta 1
$gaveta1->removerItens("Arquivo1");

//Removendo um item que não existe na gaveta 1
$gaveta1->removerItens("ArquivoTeste");

//Listando os itens da gaveta 1
$gaveta1->listarItens();

//Listando as gavetas do armario2
$armario2->listarGavetas();

//removendo uma gaveta que não existe no armário2
$armario2->removerGavetas(1);

//removendo a gaveta de indice 0 do armário2
$armario2->removerGavetas(0);

