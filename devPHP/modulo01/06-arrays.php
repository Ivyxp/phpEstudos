<?php

//iniciando e atribuindo um valor uma array

//nota: arrays numerios que tem o indice numeos inteiros
$herois =['powergirl', 'batgirl','supergirl', 'batgirl', 'ametista', 'wondergirl' ];

//forma de printar um elemento na array
echo $herois[2];
echo '<hr>';
//forma de printa uma array completa
print_r($herois);
echo '<hr>';
//adicionndo valor a array
$herois[] = 'estelar';
print_r($herois);
echo '<hr>';
// count funcao para contar quantos valores existem em uma array
echo count($herois);
echo '<hr>';

// percorr cada elemento do array
foreach ($herois as $value) {
  echo "$value <br>";
}
echo '<hr>';

//arrrays associativos tem como indice um string
$cidades =["gotham"=> "batman", "metropolis"=> "superman", "temicyra"=> "wonder woman" ];
//acessando a array
echo $cidades["temicyra"];

//adicionando um elemento
$cidades["centralCity"] = "flash";
echo "<br>";
print_r($cidades);
echo '<hr>';
//usando o foreach
foreach ($cidades as $indice => $value) {
  echo "$value <br>";
}
echo '<hr>';
//arrays multidimensionar
$editoras = ["dc" => ["azul"=>"stargirl","verde"=> "lanterna verde","roxo"=>"cacadora"], "marvel" => ["wolverine", "black cat", "spider woman"], "dynamite"=>["red sonja", "vampirella", "xena"]];

//acessando um indice da array de arrays
echo $editoras["marvel"][2];
echo '<hr>';
//soreach 
foreach ($editoras["dc"] as $indice => $value) {
  echo "$value <br>";
}
echo '<hr>';
//foreach com indices de tring
foreach ($editoras["dc"] as $indice => $value) {
  echo "<br> $indice $value";
}
echo '<hr>';
//acessando um valor da array de arrays pelo indice
echo $editoras["dc"]["azul"];
