<?php

require_once '../vendor/autoload.php';

use Pimple\Container;

$container = new Container();

//Container singlteton da conexao
$container['conn'] = $container->factory(function (){
    return new \Source\Conn("mysql:host=localhost;dbname=php_poo_son","root","");
});

//Container de Produtos recebendo o container da conexão como parametro
$container['produto'] = function ($c){
  return new \Source\Produto($c['conn']);
};

//$db = \Source\ProdutoContainer::getConn();
//
//$product = \Source\ProdutoContainer::getProduto();


$list = $container['produto']->lista();

var_dump($list);
