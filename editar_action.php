<?php

require 'conexao.php';
$id =filter_input(INPUT_POST,'id');
$nome = filter_input(INPUT_POST,'nome');
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);


if($nome && $cpf){

    $sql = $pdo->prepare("UPDATE clientes SET nome= :name, cpf = :cpf WHERE id=:id");
    //trocando os itens
    $sql->bindValue(':name', $nome);
    $sql->bindValue(':cpf', $cpf);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: index.php");
    exit;

}else{
    header("Location: adicionar.php");
    //echo"falha";
    exit;
}