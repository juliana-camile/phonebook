<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "";

try{
    $conn = new PDO("mysql:host=$host:dbname=$dbname", $User, $pass);

// ativar o modo de erro 

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);

} catch(PDOException $e){
    // erro na conexão 
    $erro = $e->getMessage();
    echo "Erro: $error"; 
}