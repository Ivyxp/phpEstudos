<?php

namespace modelconexao;

class Conexao{
  //aributo estatico instancia
  private static $instance;
 
 //metodo para verificar se existe conexao, se nao, criar uma
 public static function getConn()
 {
   //como e atributo estatico o uso do self e necessario, ler como SE NAO tiver conexao criar uma. 
   if (!isset(self::$instance)) {
        self::$instance = new \PDO("mysql:host=localhost;dbname=pdo;charset=utf8", "root", "root");
   }
     return self::$instance;
 }
}