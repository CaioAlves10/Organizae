<?php
include(__DIR__ . '../../../php/connect.php');

$nome = $_POST["nome_cad"];
$email = $_POST["email_cad"];
$password = $_POST["senha_cad"];
$conpassword = $_POST["cosenha_cad"];

/*
teste de variaveis
var_dump("$nome, $email, $password");
*/

/*if($nome = "" or $email = "" or $password = "" or $conpassword = ""){

    header("Location: /pages/login-cadastro.php#paracadastro?error=nome, email, senha e confirmação são obrigatorios");

}

if($password != $conpassword){

    header("Location: /pages/login-cadastro.php#paracadastro?error=senha e confirmação diferentes");

}*/



$sql = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$password')";

$query = mysqli_query($conn, $sql);

if($query){

    echo "dados enviados";


}else{ echo "deu errado";}