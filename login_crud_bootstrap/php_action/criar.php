<?php

session_start();

require_once 'conexao.php';

if(isset($_POST['btn-cadastro'])):
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $idade = mysqli_real_escape_string($conexao, $_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', $idade)";
    

    if(mysqli_query($conexao, $sql)):
        $_SESSION['mensagem'] = "Oba! O cliente foi cadastrado com sucesso!";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] = "Ops... o email informado já encotra-se cadastrado no sistema.";
        header('Location: ../index.php?');
    endif;

    mysqli_close($conexao);

endif;

