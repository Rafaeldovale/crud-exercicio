<?php
session_start();

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
        unset( $_SESSION['msg']); //vai destruir e imprimir somente uma vez
    ?>
    <form method="POST" action="processo.php">

        <div id="nome">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="digite seu nome"><br><br>
        </div>

        <div id="email">
            <label>Email:</label>
            <input type="email" name="email" placeholder="digite seu email"><br><br>
        </div>

        <button>Cadastrar</button>

    </form>
</body>
</html>