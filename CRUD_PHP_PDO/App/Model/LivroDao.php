<?php

namespace App\Model;

class LivroDao {

    public function create(Livro $l) {

        $sql = 'INSERT INTO livros (nome, descricao) VALUES (?,?)';
        $insert = Conexao::getConn()->prepare($sql);
        $insert->bindValue(1, $l->getNome());
        $insert->bindValue(2, $l->getDescricao());    
        $insert->execute();   
    }

    public function read() {

        $sql = 'SELECT * FROM livros';
        $read = Conexao::getConn()->prepare($sql);
        $read->execute();

        if($read->rowCount() > 0): 
            $consulta = $read->fetchAll(\PDO::FETCH_ASSOC);
            return $consulta;
        else:
            return [];
        endif;
    }

    public function update(Livro $l) {

        $sql = 'UPDATE livros SET nome =?, descricao = ? WHERE id = ?';
        $update = Conexao::getConn()->prepare($sql);
        $update->bindValue(1, $l->getNome());
        $update->bindValue(2, $l->getDescricao());
        $update->bindValue(3, $l->getId());
        $update->execute();
    }

    public function delete($id) {

        $sql = 'DELETE FROM livros WHERE id = ?';
        $delete = Conexao::getConn()->prepare($sql);
        $delete->bindValue(1, $id);
        $delete->execute();
    }
}