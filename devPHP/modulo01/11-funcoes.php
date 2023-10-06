<?php

function texto (string $texto, int $limite, string $continue = '..') //valor default
{
  $textoLimpo = trim($texto);
  //$textoLimpo = trim(strip_tags($texto)); FORMATANDO TAG DIRETO ASSIM É USADO EN APLICAÇÕES REAIS 
  if(mb_strlen($textoLimpo) <= $limite){
    return $textoLimpo;
  } 
  $resumirTexto = mb_substr($textoLimpo, 0, $limite);
  return $resumirTexto.$continue;
  //chamando um parâmetro dos tres disponível 
  //USANDO ESSA FUNCAO PARA RESUMIR RESUMIR TAMANHO DO TEXTO BASEADO NOS ÍNDICES 
}

function saudacao($hora): String {
  if($hora >= 0 && $hora <= 5){
    return 'boa madrugada';
  } else if ($hora > 5 && $hora <= 12){
    return 'bom dia';
  } else if($hora >12 && $hora <= 16){
    return 'boa tarde';
  }
  else if($hora > 16 && $hora <= 23){
    return 'boa noite';
  } else {
    return 'indisponivel';
  }
  
}

function formatarValor(float $valor): String 
{
  return number_format(($valor? $valor : "tente novamente" ), 2, ',', '.');
}

function contarTempo(String $data){
  $agora = strtotime(date('Y/m/d H:i:s'));
  $tempo = strtotime($data);
  $dif = $agora - $tempo;
  $segundos = $dif;
  $min = round($dif/60);
  $horas = $min/60;
  $dias = round($dif/86400);
  $semana = round($dif/604800);
  $meses = round($dif/2419200);
  $ano = round($dif/29030400);
  
  if($segundos <= 60){
    return 'agora';
  } else if ($min <= 60){ 
    return $min == 1 ? 'ha um minuto':'ha '.$min.' minutos';
  }else if($horas <= 24){
    return $horas == 1?' ha uma hora': 'ha'.$horas.' horas ';
  }else if($dias <= 7){
    return $dias == 1?'ha um dia':'ha '.$dias.'dias ';
  } else if($semana <= 4){
    return $semana == 1?'ha uma semana ': 'ha '.$semana.' semanas ';
  } else if($meses <= 12){
    return $meses == 1?'ha um mes': 'ha '.$meses.' meses';
  } else{
    return $ano == 1?'ha um ano': 'ha '.$ano.' anos';
  }
 // var_dump($data);
}

function validarEmail(String $email):bool
{
  //return ($email);
  //MANEIRA CERTA DE FAZER 
  return filter_var($email,FILTER_VALIDATE_EMAIL);
}

function validarUrlComFilto(String $url):bool
{
 return filter_var($url, FILTER_VALIDATE_URL);
}

//CRIANDO A VALIDAÇÃO NA LOGICA SE MOSTROU MAIS EFICIENTE 
function validarUrl(String $url):bool
{
  if(mb_strlen($url) < 10){
    return false;
  }
  if (!str_contains($url, ".")){
    return false;
  }
  if (str_contains($url, 'http://') or str_contains($url, 'https://')){
    return true;
  }
  return false;
}


function dataAtual(): String
{
  $diaMes = date('d');
  $diaSemana = date('w');
  $mes = date('n') - 1;
  $ano = date('y');
  
  $nomesDias = ['domingo',
  'segunda',
  'terca',
  'quarta',
  'quinta',
  'sexta',
  'sabado'];
  
  $nomeMeses = ['janeiro','fevereiro', 'marco', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
  
  $dataFormatada = $nomesDias[$diaSemana].', '.$diaMes.' de '.$nomeMeses[$mes].' de '.$ano;
  return $dataFormatada;
}

/* 
function saudacoes(): string
{
  $hr = date('n');
  FUNCAO MATCH MUITO UTIL PRA OTIMIZAR O LUGAR DE IFS
  $saudacao = match(true){
    $hr >= 0 && $hr <= 5 =>'boa madrugada',
    $hr >= 6 && $hr <= 12 =>'bom dia',
    $hr >= 13 && $hr <= 18 =>'boa tarde',
    default => 'boa noite'
  };
  return $saudacao;
}*/


function validarCPF (string $cpf): bool
{
  $cpf = limparnumero($cpf);
  if(mb_strlen($cpf) != 11 or preg_match('/(\d)\]{10}/', $cpf)){
    return false;
  }
  for ($t=9; $t<11; $t++){
    for($d =0, $c = 0; $c < $t; $c++ ){
      $d += $cpf[$c] * (($t + 1) - $c);
    }
    $d =((10*$d) %11)%10;
    if ($cpf[$c]!=$d){
      return false;
    }
  }
  return true;
}

//FUNCAO DE LIMPAR NUMEROS QUE VIR CON PONTOS preg_match
function limparnumero(string $numero): string
{
  return preg_replace('/[^0-9]/', '', $numero);
}

function calculaMedia(string $nome,float $n1, float $n2, float $n3, float $n4 ) 
{
   $media = ($n1+$n2+$n3+$n4)/4;
  return $media >= 7? "$nome foi aprovado com $media media" : "reprovado";
}