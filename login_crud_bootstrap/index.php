<?php

session_start();
if(isset($_SESSION['mensagem'])):
    echo $_SESSION['mensagem'];
endif;
session_unset();

if(isset($_SESSION['logado'])):
    header('Location login.php');
endif;

include_once 'includes/header.php';
require_once 'php_action/conexao.php';
?> 

<!-- bootstrap -->
<div class="container">
<div class="jumbotron bg-dark text-light">
<h3 style="text-align:center" class="mt-3">Lista de Clientes</h3>
</div>
</div>
<table class="table table-striped table-dark">
    <thead>
            <tr> 
                <th scope="col">NOME:</th>
                <th scope="col">SOBRENOME:</th>
                <th scope="col">E-MAIL:</th>
                <th scope="col">IDADE:</th>
                <th scope="col">AÇÕES DO SISTEMA:<th>
            </tr>

            <?php

            $sql = "SELECT * FROM clientes";
            $consulta = mysqli_query($conexao, $sql);
            
            while($dados = mysqli_fetch_array($consulta)):
            ?>

            <tr>
                <td><?php echo $dados['nome']; ?></td>
                <td><?php echo $dados['sobrenome']; ?></td>
                <td><?php echo $dados['email']; ?></td>
                <td><?php echo $dados['idade']; ?></td>
                <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-warning">Editar Cliente<a> 
                    <a href="php_action/remover.php?id=<?php echo $dados['id']; ?> " class="btn btn-danger" name="btn-remover">Deletar Cliente<a>
            </tr>
            <?php endwhile; ?>
        </thead>
</table>
<br>

<a href="adicionar.php" class="btn btn-success" name="btn-cadastro">Adicionar Cliente</a>
<a href="logout.php" class="btn btn-primary" name="btn-sair">Logoff</a>

<?php
include_once 'includes/footer.php';
?>
