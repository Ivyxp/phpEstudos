<?php

class Veiculo {
  private $modelo;
  private $cor;
  private $ano;
  
  public function andar()
{
  return 'andou';
} 

public function parar()
{
  return 'parou';
}
}
//ESTA NO MESMO ARQUIVO APENAS PQ E TEORIA
class Carro extends Veiculo{
  //carro herda de veiculo
}