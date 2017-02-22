<?php

namespace Source;

class ProdutoContainer
{

    public static function getProduto(){
        return new Produto(self::getConn());
    }

    public static function getConn(){
        return new Conn("mysql:host=localhost;dbname=php_poo_son","root","");
    }
}