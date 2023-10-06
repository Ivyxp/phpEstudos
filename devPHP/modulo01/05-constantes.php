<?php
//trabalhando com constantes

define('NOME', 'ivana');
define('IDADE', 22);

echo NOME . IDADE;
//constantes sao de escopo global
function exibirNome()
{
  return NOME;
}

echo exibirNome();