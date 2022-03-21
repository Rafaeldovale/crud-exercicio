<?php

require 'conexao.php';

$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


/*echo "nome: $nome<br>";
echo "email:  $email<br>";*/

/*$pdo = "INSERT INTO clientes (nome, email, created) VALUES ('$nome','$email', NOW())";
$resultado = mysqli_query($confirma, $resultado_clientes);*/

if($nome && $email){
    $_SESSION['msg'] = "USUÁRIO CADASTRADO COM SUCESSO!!!<br>";
    //verificação de email
   $sql = $pdo->prepare("SELECT * FROM clientes WHERE email = :email");
   $sql->bindValue(':email', $email);
   $sql->execute();

   if($sql->rowCount() ==0) {
        $sql = $pdo->prepare("INSERT INTO clientes (nome, email) VALUES (:name, :email)");
        $sql->bindValue(':name', $nome);//associando valor
        $sql->bindValue(':email',$email);
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