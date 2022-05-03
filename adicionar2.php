
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
    <h1>Adicionar Produto</h1>

    <form method="POST" action="adicionar_action2.php">

        <div id="nome">
            <label>Nome do Produto:
            <input type="text" name="nomeproduto" placeholder="Nome do Produto">
            </label><br><br>
        </div>
        
        <input type="submit" value="Adicionar"onclick="return confirm('Confirma o cadastro!')">
    </form>
    
</body>
</html>