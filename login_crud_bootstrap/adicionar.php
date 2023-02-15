<?php
include_once 'includes/header.php';

?>

<div class="container">
    <div class="jumbotron bg-dark">
    <h3 style="text-align:center">Cadastro de Clientes</h3>
</div>

<form action="php_action/criar.php" method="post" width='55%' height='50%'>
    <label for="nome">Nome</label ><br>
    <input type="text" name="nome" id="nome" placeholder="Nome" required class="form-control"><br>

    <label for="sobrenome">Sobrenome</label><br>
    <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" required class="form-control"><br>

    <label for="email">Email</label><br>
    <input type="email" name="email" id="emial" placeholder="Email" required class="form-control"><br>

    <label for="idade">Idade</label><br>
    <input type="text" name="idade" id="idade" placeholder="Idade" required class="form-control"><br><br>

    <button type="submit" name="btn-cadastro" class="btn btn-success">Cadastrar</button>
    <a href="index.php" class="btn btn-primary">Listar Clientes</a>
</form>

<?php
include_once 'includes/footer.php';

?>
