<?php

include_once 'includes/header.php';
include_once 'php_action/conexao.php';

session_start();

if(isset($_POST['btn-logar'])):
        $erros = array();
        $login = mysqli_escape_string($conexao, $_POST['login']);
        $senha = mysqli_escape_string($conexao, $_POST['senha']);
       

        if(empty($login) or empty($senha)):
                $erros[] = "<h3>Os campos devem ser preenchidos</h3>";
        else:
                $sql = "SELECT login FROM login WHERE login = '$login'";
                $consulta = mysqli_query($conexao, $sql);

                if(mysqli_num_rows($consulta) > 0):
                        $senha = md5($senha);
                        $sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha'";
                        $consulta = mysqli_query($conexao, $sql);

                        if(mysqli_num_rows($consulta) == 1):
                                
                                $dados = mysqli_fetch_array($consulta);
                                $_SESSION['logado'] = true;
                                $_SESSION['id_usuario'] = $dados['id'];
                                header('Location: index.php');
                        else:
                                $erros[] = "<li>login ou senha incorretos</li>";
                        endif;
                else:
                        $erros[] = "<li>Cliente inexistente</li>";
                endif;
        endif;

        mysqli_close($conexao);
endif;

?>
<div class="container">
<div class="jumbotron bg-dark text-light">
<h2  class="mt-3" style="text-align: center;">Login do Sistema</h2><br><br>

<?php

if(!empty($errors)):
        foreach($errors as $erro):
                echo $erro;
        endforeach;
endif;
        
        

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="margin: auto; width: 220px;"> 
        <label for="login">Login</label><br>
        <input type="text" name="login"  placeholder="Login"  class="form-control"><br><br>

        <label for="senha">Senha</label><br>
        <input type="password" name="senha" placeholder="Senha"  class="form-control"><br><br>
        <button type="submit" class="btn btn-success" name="btn-logar">Entrar</button>
</form>

</div>

<?php
include_once 'includes/footer.php'
?>