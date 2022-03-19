<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


/*echo "nome: $nome<br>";
echo "email:  $email<br>";*/

$resultado_clientes = "INSERT INTO clientes (nome, email, created) VALUES ('$nome','$email', NOW())";
$resultado = mysqli_query($confirma, $resultado_clientes);

if(mysqli_insert_id($confirma)){
    $_SESSION['msg'] = "USUÁRIO CADASTRADO COM SUCESSO!!!";
    header("Location: index.php");
   // echo "sucesso";
}else{
    header("Location: index.php");
    //echo"falha";
}