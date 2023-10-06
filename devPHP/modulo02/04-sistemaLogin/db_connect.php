<?php
//conexao com banco de dados
$servername = "localhost:3306";
$username = "root";
$password = "root";
$db_name = "sistemaLogin";
//fazendo conexao
$connect = mysqli_connect($servername, $username, $password,$db_name);
//verificar se exite erro
if (mysqli_connect_error()) {
  echo "falha na conexao ".mysqli_connect_error();
}
