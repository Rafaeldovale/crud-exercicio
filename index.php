<?php
require 'conexao.php';

$lista=[];
$sql = $pdo->query("SELECT * FROM clientes");

if($sql->rowCount()>0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
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
    <h1>Cadastrar Usuário</h1>

    <?php
    if(isset( $_SESSION['msg']))
        echo  $_SESSION['msg']; // vai mostar a mensagem
        
    ?>
  
   <table>
       <tr>
           <th>ID</th>
           <th>NOME</th>
           <th>EMAIL</th>
           <th>Ações</th>

       </tr>
       <?php foreach($lista as $usuario):?>
            <tr>
                <td><?php echo $usuario['id'];?></td>
                <td><?php echo $usuario['nome'];?></td>
                <td><?php echo $usuario['email'];?></td>
                <td>
                    <a href="editar.php?id=<?php echo $usuario['id'];?>">[ EDITAR ]</a>
                    <a href="delete.php?id=<?php echo $usuario['id'];?>"onclick="return confirm('Tem certeza que deseja fazer esta operação')">[ DELETAR ]</a>
                </td>
            </tr>

       <?php endforeach;?>
       
   </table>
   <form method="POST" action="adicionar.php">
       <button>Cadastrar</button>
   </form>
</body>
</html>