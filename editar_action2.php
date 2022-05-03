<?php

require 'conexao.php';
$id =filter_input(INPUT_POST,'id');
$nome = filter_input(INPUT_POST,'nomeproduto');



if($nome && $cpf){

    $sql = $pdo->prepare("UPDATE produto SET nomeproduto= :name WHERE id=:id");
    //trocando os itens
    $sql->bindValue(':name', $nome);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: index2.php");
    exit;

}else{
    header("Location: adicionar2.php");
    //echo"falha";
    exit;
}