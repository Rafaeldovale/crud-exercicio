<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST,'nomeproduto');


$id = mysqli_escape_string($confirma, $_POST['id']);
/*echo "nome: $nome<br>";
echo "email:  $email<br>";*/

$sql = "UPDATE produto SET nome = '$nome,  WHRE id = '$id'";

if(mysqli_insert_id($confirma)){
    //$_SESSION['msg'] = "ATUALIZADO CADASTRADO COM SUCESSO!!!<br>";
    header("Location: index2.php");
    
}else{
    header("Location: index2.php");
    //echo  "<script>alert('Erro');</script>";
    echo "ERRO: " .$confirma->error;
}