<?php
class Conexao{

  static $con = null;

  public static function getConnection(){
  $ip = " sql105.epizy.com ";
  $port = "3306";
  $user = "epiz_32124163";
  $pass = "ogcK673PzX0gk";
  $db = "epiz_32124163_projeto_final";

  if(!self::$con){
      //cria uma conexão com o banco de dados no mysql
      self::$con = new mysqli($ip, $user, $pass, $db, $port);
  
      //verifica se houve erros na conexão
      if(self::$con->connect_error){
        echo self::$con->connect_error;
      die(); 
      }
    }
  return self::$con;
  }
}
?>