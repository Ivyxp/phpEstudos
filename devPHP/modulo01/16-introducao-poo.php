<?php
//criando uma classe 
class Pessoa {
  //atributos publicos
  public $nome;
  public $idade;
  
  
  //metodos
  public function falar()
  {
    //usando o this para acessar os atributos fora do escopo
   return "$this->nome, sua idade $this->idade e compativel";
  }
}
  //intancia do objeto;
  $pessoa = new Pessoa();
  //chamando o metodo e adicionando valor aos atibutos.
  echo $pessoa->nome = 'joana';
  echo $pessoa-> falar();
  
  
  
  