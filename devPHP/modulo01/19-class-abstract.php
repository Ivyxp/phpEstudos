<?php

//clase abstrata e um modelo nao e possivel ser instanciada
abstract class Banco{
  protected $saldo;
  protected $limites;
  protected $juros;
  
  //quem herdar da classe abstrata consequentimene recebe seus atributos e metodos
  abstract protected function sacar();
  abstract protected function depositar();
}