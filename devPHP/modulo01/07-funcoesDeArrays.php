<?php

$nomes = ["primeira"=>"lia","segunda"=> "ana","terceira"=> "julia","quarta"=> "carla"];

$idades = [21,30,27,19];

if (is_array($nomes)) {
echo 'e array';
} else {
echo 'nao e array';
}
echo '<hr>';
//verifica se existe tal valor na array
echo in_array("lia", $nomes);
echo '<hr>';
//retorna os indices da array passasa em uma nova array
$keys = array_keys($nomes);
print_r($keys);
echo '<hr>';

//cria uma nova array baseada em uma exisente
$valores = array_values($nomes);
print_r($valores);
echo '<hr>';
//agrega valores de arrays

$mescla = array_merge($nomes,$idades);
print_r($mescla);
echo '<hr>';
//combina indices a valores
$key = ["campeao", "vice"];
$valoes = ["praia clube", "minas"];

$superliga = array_combine($key,$valoes);
print_r($superliga);
//acessano por indice 
echo $superliga["vice"];
echo '<hr>';

//serve para somar os elementos dentro de uma array
$num = [3,4,6.7,3,9];
echo array_sum($num);
echo '<hr>';

//transforma uma string em uma array, o implode faz o contrario transforma array em string
$data = "01/07/2023";
//o primeiro parametro e o demilitador nesse caso uma barra /
$novaData = explode("/", $data);
print_r($novaData);
