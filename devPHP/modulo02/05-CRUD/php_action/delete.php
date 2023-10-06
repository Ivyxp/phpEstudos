<?php
//conexão 
session_start();

require_once 'db_connect.php';

 if (isset($_POST["btn-deletar"])) {
  
      $id = mysqli_escape_string($connect, $_POST['id']);
      
      $sql = "DELETE FROM clientes WHERE id = '$id' "; 
    
    if (mysqli_query($connect, $sql)) {
      $_SESSION['mensagem'] = "deletado com sucesso!";
      header("location: ../indice.php");
      die('Não ignore meu cabeçalho...');
    } else {
      $_SESSION['mensagem'] = "Nao foi possivel deletar";
      header("location: ../indice.php");
      die('Não ignore meu cabeçalho...');
    }
}
