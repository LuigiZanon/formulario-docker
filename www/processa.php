<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);
$senha = md5(filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING));

// echo"Nome: $nome <br>";
// echo"Email $email <br>";


$result_usuario = "INSERT INTO usuarios (nome,email,senha,created) VALUES ('$nome', '$email','$senha', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "Usuário cadastrado com sucesso";
    header("Location: index.php");
}else{
    $_SESSION['msg'] = "Usuário não foi cadastrado" . mysqli_error($conn);
    header("Location: index.php");
}