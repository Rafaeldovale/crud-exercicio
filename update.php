<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$id = mysqli_escape_string($confirma, $_POST['id']);
/*echo "nome: $nome<br>";
echo "email:  $email<br>";*/

$sql = "UPDATE clientes SET nome = '$nome, email='$email' WHRE id = '$id'";

if(mysqli_insert_id($confirma)){
    //$_SESSION['msg'] = "ATUALIZADO CADASTRADO COM SUCESSO!!!<br>";
    header("Location: index.php");
    
}else{
    header("Location: index.php");
    //echo  "<script>alert('Erro');</script>";
    echo "ERRO: " .$confirma->error;
}