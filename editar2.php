<?php
require 'conexao.php';

$info=[];

$id = filter_input(INPUT_GET, 'id');
if($id){

    $sql = $pdo->prepare("SELECT * FROM produto WHERE id= :id");
    $sql->bindValue('id',$id);
    $sql->execute();

    if($sql->rowCount() >0){
        
        $info = $sql->fetch(PDO::FETCH_ASSOC);
        
    }else{
        header("Location: index2.php");
        exit;
    }
}else{
    header("Location: index2.php");
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
    <h1>Editar Produto</h1>

   
    <form method="POST" action="editar_action2.php">
        <input type="hidden" name="id" value="<?=$info['id'];?>">


            <label>Nome Produto:
            <input type="text" name="nomeproduto" placeholder="digite o Produto" value="<?=$info['nomeproduto'];?>">
            </label><br><br>
        
  
        <input type="submit" value="Salvar"onclick="return confirm('Tem certeza que deseja fazer esta operação')">
    </form>
</body>
</html>