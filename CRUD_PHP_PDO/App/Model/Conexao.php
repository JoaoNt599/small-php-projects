<?php

namespace App\Model;

class Conexao {
    private static $instance;

    // verifica se existe uma instacia da conexao
    public static function getConn() {
        if(!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root','122012');
        endif;

        return self::$instance;
    }
}