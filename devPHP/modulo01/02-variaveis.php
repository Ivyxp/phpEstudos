<?php

$nome = 'maria';
$idade = 22;
$altura = 1.79;

/*DESSA FORMA E USADA ASPAS DUPLAS POIS ASPAS SIMPLES INTERPRETA TUDO COMO STRING E NAO LER*/
echo "meu nome e $nome tenho $idade anos e $altura de altura";
echo '<br>';
//CONCATENANDO
echo 'meu nome e '.$nome.' tenho '.$idade. ' idade, e de altura '. $altura;