<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "";

try{

    $conn = new PDO("mysql:host=$host;=$dbname",$user, $pass);

    // ativar modo de erros 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERMODE_EXCEPTION);
} catch(PDOException $e){
    //erro na conexão 
$error =$e->getmensage();
   echo "Erro: $error";
}
?> 