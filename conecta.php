<?php
 //variaveis de conexão
 $servidor="localhost";
 $usuario="escola";
 $senha="123";
 $nomedb="escola";
 //conexão
 $conn= new mysqli($servidor, $usuario, $senha, $nomedb);
 //checa conexão
 if ($conn->connect_error){
     die("Conexao falhou: " . $conn->connect_error);
 }
 echo"Conectado ao banco de dados"."<br>";

?>