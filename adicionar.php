
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
    <h1>Adicionar Cliente</h1>

    <?php
    if(isset( $_SESSION['msg']))
        echo  $_SESSION['msg']; // vai mostar a mensagem
        
    ?>
    <form method="POST" action="adicionar_action.php">

        <div id="nome">
            <label>Nome:
            <input type="text" name="nome" placeholder="digite seu nome">
            </label><br><br>
        </div>

        <div id="email">
            <label>Email:
            <input type="email" name="email" placeholder="digite seu email">
            </label><br><br>
        </div>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>