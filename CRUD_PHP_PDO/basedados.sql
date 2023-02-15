-- drop database pdo;

create database if not exists pdo;

use pdo;

drop table livros;

create table if not exists livros (
	id int primary key auto_increment,
    nome varchar(60) not null,
    descricao varchar(80) not null
);

select * from livros;

delete from livros where id = 1;



