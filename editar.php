<?php
require 'conexao.php';

$info=[];

$id = filter_input(INPUT_GET, 'id');
if($id){

    $sql = $pdo->prepare("SELECT * FROM clientes WHERE id= :id");
    $sql->bindValue('id',$id);
    $sql->execute();

    if($sql->rowCount() >0){
        
        $info = $sql->fetch(PDO::FETCH_ASSOC);
        
    }else{
        header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>CRUD - Cadastro</title>
</head>
<body>
    <h1>Editar Cliente</h1>

   
    <form method="POST" action="editar_action.php">
        <input type="hidden" name="id" value="<?=$info['id'];?>">


            <label>Nome:
            <input type="text" name="nome" placeholder="digite seu nome" value="<?=$info['nome'];?>">
            </label><br><br>
        

        
            <label>Email:
            <input type="email" name="email" placeholder="digite seu email" value="<?=$info['email'];?>">
            </label><br><br>
  
        <input type="submit" value="Salvar"onclick="return confirm('Tem certeza que deseja fazer esta operação')">
    </form>
</body>
</html>