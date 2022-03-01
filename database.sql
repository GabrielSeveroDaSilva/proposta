-- Tabela de Usuarios

drop table if exists usuario;

create table usuario (
    id int not null auto_increment primary key, 
    nome varchar(255) not null , 
    email varchar(255) not null,
    senha varchar(50) not null
);

insert into usuario (id, nome, email, login) 
values (1, 'Administrador', 'adm@gmail.com', 'admin');

-- Tabela de Clientes

drop table if exists cliente;

create table cliente (
    id int not null auto_increment primary key, 
    nome varchar(255) not null,
    email varchar(255) not null
);

insert into cliente (id, nome, email)
values (1, 'Freitas', 'freitas@gmail.com' );

-- Tabela de Propostas

drop table if exists proposta;

create table proposta (
    id int not null auto_increment primary key, 
    cliente_id int not null , 
    data_emissao date not null,
    cabecalho text 

);

-- Table de Itens

drop table if exists item;

create table item (
    id int not null auto_increment primary key, 
    gestor varchar(255) not null,
    produto varchar not null

);
