<?php

require_once 'vendor/autoload.php';

$livro = new \App\Model\Livro();
$livro->setNome('Business Intelligence e Análise de Dados');
$livro->setDescricao('Gestão do negócio');


$livroDao = new \App\Model\LivroDao();
$livroDao->create($livro);


// $livroDao->update($livro);

// $livroDao->delete();


$livroDao = new \App\Model\LivroDao();
$livrooDao->read();
foreach($livroDao->read() as $livro):
    echo $livro['nome']."<br>".$livro["descricao"]."<hr>";
endforeach;




