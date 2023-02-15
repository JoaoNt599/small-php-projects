<?php

$dbname = "crud_php";
$hostname = "localhost";
$username = "root";
$password = "122012";

$conexao = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($conexao, "utf8");

if(mysqli_connect_error()):
    echo "Erro na Conexão: " .mysqli_connect_error();
endif;