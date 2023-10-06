<?php

//indicado o uso do composer para fazer os carregamentos, porem eu nao tenho no celular, entao fiz manualmente

require "model/Produto.php";
require "model/ProdutoDAO.php";
require "model/Conexao.php";

$produto = new \modelproduto\Produto();
$produto->setNome = 'notebook';
$produto->setDescricao = 'notebook i5 500gb hd, ssd 125gb';

$produtoDao = new \modelDAO\ProdutoDAO();
//$produtoDao->create($produto);// criar tabela

foreach ($produtoDao->read() as $prod){
  echo $prod['nome'].'<br>'.$prod['descricao'].'<hr>';
}


