<?php

require_once '../vendor/autoload.php';

use Pimple\Container;

$container = new Container();

//Singleton do objeto
$container['date'] = function (){
    return new \datetime;
};

//Fabrica sempre um novo objeto
$container['date'] = $container->factory(function (){
    return new \datetime;
});

var_dump($container['date']);
echo "<br/>";
echo "<br/>";
sleep(2);

var_dump($container['date']);