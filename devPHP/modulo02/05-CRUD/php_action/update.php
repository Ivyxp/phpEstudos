<?php
//conexão 
session_start();

require_once 'db_connect.php';

 if (isset($_POST["btn-editar"])) {
  //  $erros[] = '';
      $nome = mysqli_escape_string($connect, $_POST["nome"]);
      $sobrenome = mysqli_escape_string($connect, $_POST["sobrenome"]);
      $email = mysqli_escape_string($connect, $_POST["email"]);
      $idade = mysqli_escape_string($connect,$_POST["idade"]);
      $id = mysqli_escape_string($connect, $_POST["id"]);
      
    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email ='$email', idade = '$idade' WHERE id = '$id' "; 
    
    if (mysqli_query($connect, $sql)) {
      $_SESSION['mensagem'] = "Atualizado com sucesso!";
      header("location: ../indice.php");
      die('Não ignore meu cabeçalho...');
    } else {
      $_SESSION['mensagem'] = "Nao foi possivel fazer a atualizacao";
      header("location: ../indice.php");
      die('Não ignore meu cabeçalho...');
    }
}
