<?php

session_start();

require_once 'conexao.php';

if(isset($_POST['btn-remover'])):

    $id = mysqli_escape_string($conexao, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";
    

    if(mysqli_query($conexao, $sql)):
        $_SESSION['mensagem'] = "Oba! O cliente foi removido com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Ops... Erro ao excluir o cliente.";
        header('Location: ../index.php');
    endif;

    mysqli_close($conexao);

endif;

