-- Tabela de Usuarios

drop table if exists usuario;

create table usuario (
    id int not null auto_increment primary key, 
    nome varchar(255) not null , 
    email varchar(255) not null,
    senha varchar(50) not null,
    uptine datetime,
    online char(1)
);

insert into usuario (id, nome, email, senha) 
values (1, 'Administrador', 'adm@gmail.com', 'admin');

-- Tabela de Clientes

drop table if exists cliente;

create table cliente (
    id int not null auto_increment primary key,
    nome varchar(255) not null,
    email varchar(255) not null,
    cidade varchar(255) not null,
    bairro varchar(255) not null,
    rua varchar(255) not null,
    numero varchar(10) not null
);

insert into cliente (id, nome, email, cidade, bairro,rua, numero) 
values (1, 'Maria', 'maria@gmail.com','nova mutum','Jardim', 'Ortencias','1111');

-- Tabela de Propostas

drop table if exists proposta;

create table proposta (

    id int not null auto_increment primary key,
    nome varchar(255) not null,
    cliente_id int not null ,
    data_de_abertura date not null,
    movimentacao varchar(255) not null ,
    item varchar(60) not null,
    codigo_do_produto varchar(6) null,
    descricao_do_produto text,
    informacoes_do_produto text,
    qtde int not null,
    valor_unitario decimal (10,2) not null,
    valor_total decimal (10,2) not null,
    prazo_de_entrega int not null,
    status varchar(30) not null

);

-- Table de Itens

drop table if exists item;

create table item (
    id int not null auto_increment primary key,
    produto varchar(255) not null,
    informacoes_do_produto text
);

-- configuracoes de item
drop table if exists configuracao;

create table configuracao (
   movimentacao varchar(255) not null,
   unid_medida varchar(30) not null
);


-- add item no campo proposta

create table proposta_item (
    id int not null auto_increment primary key,
    item_id int not null,
    proposta_id int not null,
    unid_medida varchar(60) not null ,
    qtde int not null,
    valor_unitario decimal (10,2)
);