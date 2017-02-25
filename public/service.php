<?php

//Container singlteton da conexao
$container['conn'] = $container->factory(function ($c){
    return new \Source\Conn($c['dsn'],$c['usuario'],$c['senha']);
});

//Container de Produtos
$container['produto'] = function (){
    return new \Source\Produto;
};

//Container de ServiceProduto
$container['ServiceProduto'] = function ($c){
    return new \Source\ServiceProduto($c['conn'],$c['produto']);
};