<?php

require 'conexao.php';
$id =filter_input(INPUT_POST,'id');
$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


if($nome && $email){

    $sql = $pdo->prepare("UPDATE clientes SET nome= :name,
    email = :email WHERE id=:id");
    //trocando os itens
    $sql->bindValue(':name', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: index.php");
    exit;

}else{
    header("Location: adicionar.php");
    //echo"falha";
    exit;
}