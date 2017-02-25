<?php

namespace Source;


class ServiceProduto implements iServiceProduto
{
    private $db;
    private $produto;
    
    public function __construct(IConn $db, iProduto $produto)
    {
        $this->db = $db->connect();
        $this->produto = $produto;
    }
    
    public function listar()
    {
        $query = "Select * from produtos";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function salvar()
    {
        
    }

    public function atualizar()
    {
        // TODO: Implement atualizar() method.
    }

    public function excluir()
    {
        // TODO: Implement excluir() method.
    }
}