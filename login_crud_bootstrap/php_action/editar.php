<?php

session_start();

require_once 'conexao.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $idade = mysqli_real_escape_string($conexao, $_POST['idade']);
    $id = mysqli_real_escape_string($conexao, $_POST['id']);

    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id' ";

   
    
    if(mysqli_query($conexao, $sql)):
        $_SESSION['mensagem'] = "Oba! O cliente foi atualiazado com sucesso!";
        header('Location: ../index.php?');
    else:
        $_SESSION['mensagem'] = "Ops... O email informado já encontra-se cadastrado no sistema.";
        header('Location: ../index.php?');
    endif;

    mysqli_close($conexao);

endif;

