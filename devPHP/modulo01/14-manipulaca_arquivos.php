<?php

$arquivo = 'arquivo.txt';
$conteudo = "conteudo de teste\r\n";
$tamanhoArquivo = filesize($arquivo);

$arquivoAberto = fopen($arquivo, 'r');
//primeiro parametro o nome do arquivo, o segundo a forma que o arquivo sera aberto, a permite editar, r permite apenas leitura etc.
fwrite($arquivoAberto, $conteudo);
fclose($arquivoAberto);

 while(!feof($arquivoAberto)){
   $linha = fgets($arquivoAberto, $tamanhoArquivo);
   echo $linha;
 }
 fclose($arquivoAberto);