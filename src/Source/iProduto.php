<?php
/**
 * Created by PhpStorm.
 * User: Jamila
 * Date: 25/02/2017
 * Time: 16:57
 */

namespace Source;


interface iProduto
{
    public function getNome();
    public function setNome($nome);
    public function getId();
    public function setId($id);
}