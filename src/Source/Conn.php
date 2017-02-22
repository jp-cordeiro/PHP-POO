<?php

namespace Source;

require_once '../vendor/autoload.php';

class Conn implements iConn
{
private $dsn;
private $dbuser;
private $dbpass;



    public function __construct($dsn,$dbuser,$dbpass){
        $this->dsn = $dsn;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
    }

    function connect()
    {
        return new \PDO($this->dsn,$this->dbuser,$this->dbpass);
    }
}
