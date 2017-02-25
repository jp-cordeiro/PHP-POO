<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=php_poo_son";

$container['usuario'] = 'root';

$container['senha'] = "";