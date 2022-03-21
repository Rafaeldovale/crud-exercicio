<?php

include_once 'conexao.php';
?>
<form method="POST" action="update.php">
<table>
    <?php
    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($confirma, $sql);
    while($dados = mysqli_fetch_array($resultado)):
    ?>
    <form method="POST" action="update.php">
    <tr>
        <td>Nome:</td>
        <td>Email:</td>
    </tr>
    <tr>
        <td><?php echo $dados['nome'].'<br><br>';?></td>
        <td><?php echo $dados['email'].'<br><br>';?></td>
    </tr>
    <?php endwhile;?>
    <a href="index.php" class="btn"><button>voltar</button></a>
    <a href="update.php" class="btn"><button>Atualizar</button></a><br>
</table>
</form>