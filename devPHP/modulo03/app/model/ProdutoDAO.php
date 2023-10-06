<?php

namespace modelDAO;

class ProdutoDAO{
  
  public function create(Produto $p)
  {
    $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';
    
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1,$p->getNome());
    $stmt->bindValue(2,$p->getDescricao());
    
    $stmt->execute();
    
  }
  
  public function read()
  {
    $sql = 'SELECT * FROM produtos';
    
    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
      $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      return $resultado;
    }
    
    
  }
  
  public function update(Produto $p)
  {
    
  }
  
  public function del($id)
  {
    
  }
  
  
}