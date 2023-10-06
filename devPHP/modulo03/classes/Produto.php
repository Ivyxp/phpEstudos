<?php
/**
 * definindo um apelido para a classe, caso exista outra classe Produto as duas nao serem confudidas
 */
namespace produtoClass;

class Produto{
  
  public function mostrarDetalhes(): string 
  {
    return 'detalhes do produto da pasta classes';
  }
}