<?php
//TIPOS DE DAOS ESCALARES//

//strng
$nome = "ola mundo";
var_dump($nome);
echo '<hr>';
if (is_string($nome)) {
  echo 'e uma string';
} else {
  echo 'nao e uma strng';
}
echo '<hr>';

//TIPOS DE DADOS COMPOSTOS

//array
$carros = ['gol', 'fusca', 'hb20', 'camaro'];
var_dump($carros);
echo '<hr>';

//object
class Pessoa {
  public $nome;
  
  public function atribuirNome(string $nome): string
  {
    return $nome; 
  }
}
$pessoa = new Pessoa();
echo $pessoa->atribuirNome('olvia');