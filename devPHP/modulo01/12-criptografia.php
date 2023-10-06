<?php

//base 64 e criptografia de mao dupla, tem metodos pra criptografar e descoptografar

$senha = "123456";
//criptografando
$novaSenha = base64_encode($senha);
echo "senha criptografaga $novaSenha";
//tirando a criptografia
echo "senha descoptografada".base64_decode($novaSenha);
echo "<hr>";
//ripptografia de mao unica

echo 'senha md5 '.md5($senha).'<br>';
echo 'senha sha1 '.sha1($senha);

//CRIANDO SENHA SEGURA COM PASSWORD HASH

$novaSenha = password_hash($senha,PASSWORD_DEFAULT);
//recebe dois parametros a veriavel e o algoritimo de criptografia