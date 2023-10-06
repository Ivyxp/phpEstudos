<?php

$numero = 10;

if ($numero == 10) {
  echo "condicao verdadeira";
} else {
  echo "condicao falsa";
}
echo '<hr>';
//tenario
echo $numero == 12? "verdadeiro" : "falso";
echo '<hr>';

$hora = 6;

if($hora >= 0 && $hora <= 5){
    $saudacao = 'boa madrugada';
  } else if ($hora > 5 && $hora <= 12){
    $saudacao ='bom dia';
  } else if($hora >12 && $hora <= 16){
    $saudacao = 'boa tarde';
  }else if($hora > 16 && $hora <= 23){
    $saudacao = 'boa noite';
  } else {
    $saudacao ='indisponivel';
  }
echo $saudacao;
echo '<hr>';

$cor = 'azul';
switch ($cor) {
  case 'verde':
    echo 'cor verde';
    break;
  case 'preto':
    echo 'cor preto';
    break;
  case 'azul':
    echo 'cor azul';
    break;
  default:
    echo 'nao identificado';
    break;
}
