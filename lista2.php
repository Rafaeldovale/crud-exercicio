<?php

include_once 'conexao.php';
?>
<form method="POST" action="update2.php">
<table>
    <?php
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query($confirma, $sql);
    while($dados = mysqli_fetch_array($resultado)):
    ?>
    <form method="POST" action="update2.php">
    <tr>
        <td>Nome:</td>
    
    </tr>
    <tr>
        <td><?php echo $dados['nomeproduto'].'<br><br>';?></td>
      
    </tr>
    <?php endwhile;?>
    <a href="index2.php" class="btn"><button>voltar</button></a>
    <a href="update2.php" class="btn"><button>Atualizar</button></a><br>
</table>
</form>