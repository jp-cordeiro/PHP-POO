<?php

namespace Source;


interface iServiceProduto
{

    public function listar();
    public function salvar();
    public function atualizar();
    public function excluir();
}