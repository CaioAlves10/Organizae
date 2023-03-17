<?php

/*if(!session_start()){
    session_start();
}
include(__DIR__ . '../../../php/connect.php');


$email = $_POST["email_login"];
$password = $_POST["senha_login"];



if($email == "" or $password == ""){
    header("Location: /index.php?error=usuario e senha são obrigatorios");
    exit();
}
$query = "SELECT id, email FROM usuarios WHERE email = '$email' AND password = '" . $password . "'";
$result = $conn->query($query);

if($result->num_rows == 0){
    header("Location: /index.php?error=usuario ou senha incorreto");
    exit();
}
$user = $result->fetch_assoc();

$_SESSION["isLogged"] = $user;
header("Location: /index.php");
*/


    include(__DIR__ . '../../../php/connect.php');
    $email = $_POST["email_login"];
    $password = $_POST["senha_login"];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$password'";
    $query = mysqli_query($conn, $sql);
    $user = $query->fetch_assoc();

    if(mysqli_num_rows($query) == 0){

        echo "email ou senha incorretos";

    }else{
        if(!isset($_SESSION)){
            session_start();
            $_SESSION['email'] = $user['email'];
            header("Location: /pages/dashboard.html");
        }
    }

