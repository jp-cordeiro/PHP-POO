<?php

require_once '../vendor/autoload.php';
require_once 'config.php';
require_once 'service.php';

//use Pimple\Container;
//
//$container = new Container();



//$db = \Source\ProdutoContainer::getConn();
//
//$product = \Source\ProdutoContainer::getProduto();


$lista = $container['ServiceProduto']->listar();

require_once 'listaProduto.php';
