<?php
//conexão 
session_start();

require_once 'db_connect.php';

function clear ($input){
  global $connect;
 //funcao prevetiva contra hacker nao acessa dados viaa script 
  $var = mysqli_escape_string($connect, $input);
  
  $var = htmlspecialchars($var);
  return $var;
  
  
}

 if (isset($_POST["btn-cadastrar"])) {
  //  $erros[] = '';
      $nome = clear($_POST["nome"]);
      $sobrenome = mysqli_escape_string($connect, $_POST["sobrenome"]);
      $email = mysqli_escape_string($connect, $_POST["email"]);
      $idade = mysqli_escape_string($connect,$_POST["idade"]);
      
    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')"; 
    
    if (mysqli_query($connect, $sql)) {
      $_SESSION['mensagem'] = "Cadastrado com sucesso!";
      header("location: ../indice.php");
      die('Não ignore meu cabeçalho...');
    } else {
      $_SESSION['mensagem'] = "Nao foi possivel fazer o cadasto";
      header("location: ../indice.php");
      die('Não ignore meu cabeçalho...');
    }
}
