<?php

require 'conexao.php';

$nome = filter_input(INPUT_POST,'nomeproduto');



/*echo "nome: $nome<br>";
echo "email:  $email<br>";*/

/*$pdo = "INSERT INTO clientes (nome, email, created) VALUES ('$nome','$email', NOW())";
$resultado = mysqli_query($confirma, $resultado_clientes);*/

if($nome){
    $_SESSION['msg'] = "PRODUTO CADASTRADO !!!<br>";
    //verificação de email
    $sql = $pdo->prepare("SELECT * FROM produto WHERE name = :nomeproduto");
   $sql->bindValue(':nomeproduto', $nome);
   $sql->execute();

   if($sql->rowCount() ==0) {
        $sql = $pdo->prepare("INSERT INTO produto(nomeproduto) VALUES (:name)");
        $sql->bindValue(':name', $nome);//associando valor
      
       
        $sql->execute();

        header("Location: index2.php");
        exit;
   }else{
       header("Location: adicionar2.php");
      
       exit;
   }
  
}else{
    header("Location: adicionar2.php");
    //echo"falha";
    exit;
}