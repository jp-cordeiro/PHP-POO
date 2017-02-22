<?php

require_once '../vendor/autoload.php';

use Pimple\Container;

$container = new Container();

$container['date'] = function (){
    return new \datetime;
};

//$db = \Source\ProdutoContainer::getConn();
//
//$product = \Source\ProdutoContainer::getProduto();


$list = $product->lista();

var_dump($list);
