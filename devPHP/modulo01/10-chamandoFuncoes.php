<?php

include_once '11-funcoes.php';

$nome = 'jess';
var_dump($nome);
// verificar tipos de dados
echo '<hr>';


echo saudacao($hoje);
echo '<hr>';
echo texto('bom dia nacao dcnautas tudo bem', 7, 9);
echo '<hr>';


echo formatarValor(123456);
echo '<hr>';

echo calculaMedia('julia', 8, 7, 8, 9);

echo '<hr>';

//TRABALHANDO COM DATA/HORA
date_default_timezone_set("America/Sao_Paulo");
$hoje = date('H:i:s');
echo $hoje;
echo '<hr>';
echo "data de hoje: " . date("d/M/y");
echo '<hr>';

//PEGANDO A HORA DINAMICAMENTE E PASSANDO PARA A FUNÇÃO 
echo saudacao($hoje);
echo '<hr>';

//verificando funções contadoras 
$letras = 'qtdd de letras';
//echo mb_strlen(trim($letras)); O TRIM SERVE PRA IGNORAR O ESPAÇAMENTO INICIAL E FINAL 
echo mb_strlen($letras);
echo '<hr>';

//corta as letras de acordo com o indice inicial e final NAO conta espaço 
echo $resumo = mb_substr($letras, 3,9);
echo '<hr>';

//pra saber a última posição q o elemento foi usando 
echo $ocorrencia = mb_strrpos($letras, 'd');
echo '<hr>';

$texto = 'bom dia nacao dcnautas tudo bem';
echo texto($texto, 9, );
echo '<hr>';

//funcao para contar tempo de algo por exemplo que hora um post foi feito
echo contarTempo('2023-06-28 11:20:34');
echo '<hr>';
//funcao que da um espaco, e podemos preenchelos se quisermos
$objeto = 'casa';
$novoObjeto = str_pad($objeto, 10, "#");
echo $novoObjeto;