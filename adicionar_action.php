<?php

require 'conexao.php';

$nome = filter_input(INPUT_POST,'nome');
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);


/*echo "nome: $nome<br>";
echo "email:  $email<br>";*/

/*$pdo = "INSERT INTO clientes (nome, email, created) VALUES ('$nome','$email', NOW())";
$resultado = mysqli_query($confirma, $resultado_clientes);*/

if($nome && $cpf ){
    $_SESSION['msg'] = "USUÁRIO CADASTRADO COM SUCESSO!!!<br>";
    //verificação de email
   $sql = $pdo->prepare("SELECT * FROM clientes WHERE cpf = :cpf");
   $sql->bindValue(':cpf', $cpf);
   $sql->execute();

   if($sql->rowCount() ==0) {
        $sql = $pdo->prepare("INSERT INTO clientes (nome, cpf) VALUES (:name,:cpf)");
        $sql->bindValue(':name', $nome);//associando valor
        $sql->bindValue(':cpf',$cpf);
       
        $sql->execute();

        header("Location: index.php");
        exit;
   }else{
       header("Location: adicionar.php");
       //echo "Email existente";
       exit;
   }
  
}else{
    header("Location: adicionar.php");
    //echo"falha";
    exit;
}