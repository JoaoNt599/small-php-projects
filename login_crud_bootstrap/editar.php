<?php
include_once 'includes/header.php';
include_once 'php_action/conexao.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($conexao, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $consulta = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($consulta);
    mysqli_close($conexao);
endif;
?>

<div class="jumbotron bg-dark text-light">
    <h3 style="text-align: center">Atualizando informações do Clientes</h3>
</div>
<form action="php_action/editar.php" method="post" width='55%' height='50%'>
    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

    <label for="nome">Nome</label ><br>
    <input type="text" name="nome" id="nome" placeholder="Nome" required value="<?php echo $dados['nome']; ?>" class="form-control"><br>

    <label for="sobrenome">Sobrenome</label><br>
    <input type="text" name="sobrenome" id="sobrenome" required value="<?php echo $dados['sobrenome']; ?>" class="form-control"><br>

    <label for="email">Email</label><br>
    <input type="email" name="email" id="email" required value="<?php echo $dados['email']; ?>" class="form-control"><br>

    <label for="idade">Idade</label><br>
    <input type="text" name="idade" id="idade" required value="<?php echo $dados['idade']; ?>" class="form-control"><br><br>

    <button type="submit" name="btn-editar" class="btn btn-success">Editar</button>
    <a href="index.php" class="btn btn-primary">Listar Clientes</a>
</form>

<?php
include_once 'includes/footer.php';

?>
