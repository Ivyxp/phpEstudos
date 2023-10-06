<?php

/**
 * associacao de classes 
 */
class Pedido{
  public $numero;
  public $cliente;
}

class Cliente{
  public $nome;
  public $endereco;
}

$cliente = new Cliente();
$cliente->nome = 'olivia';
$cliente->endereco = 'bairro limoeiro';

$pedido = new Pedido();
$pedido->numero = 2243;
//clente ta recebendo a intancia do objeto cliente, que contem nome e endereco
$pedido->cliente = $cliente;

$dados = ['numero' => $pedido->numero,
'nome' => $pedido->cliente->nome,
'endereco' => $pedido->cliente->endereco];

print_r($dados);