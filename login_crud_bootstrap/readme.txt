<< Dependencias >>

- PHP 8.0.2

- MySQL 

- Bootstrap v5.1.3




# script sql #

-- drop database crud_php;

create database if not exists crud_php;

use crud_php;

drop table clientes;

create table if not exists clientes (
	id int primary key auto_increment,
    nome varchar(60) not null,
    sobrenome varchar(60) not null,
    email varchar(100) not null unique,
    idade int(3) not null
);

select * from clientes;

drop table login;

create table if not exists login (
	id int primary key auto_increment,
    nome varchar(45) not null,
    login varchar(45) not null,
    senha varchar (32) not null
);

insert into login (nome, login, senha) values ('João Neto', 'adm', md5('122012'));

select * from login;

######################################


