<?php
/*
function connect(){

    $user = "root";
    $password = "yvy1kmv*zxq7GNM8eyw";
    $dbname = "organizae";
    $host = "localhost";

    $conn = new mysqli($host, $user, $password, $dbname);

    if($conn->connect_errno){
        die("erro ao conectar");
    }
    
    return $conn;
}*/
 
$servidor = "localhost";
$user = "root";
$senha = "yvy1kmv*zxq7GNM8eyw";
$dbname = "organizae";

$conn = new mysqli($servidor, $user, $senha, $dbname);

/*if ($conn->connect_error) {
die("a conexão falhou: " . $conn->connect_error);
}else{echo "conectado com sucesso";}
*/