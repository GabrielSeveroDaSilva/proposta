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

insert into usuario (id, nome, email, login) 
values (1, 'Administrador', 'adm@gmail.com', 'admin');

-- Tabela de Clientes

drop table if exists cliente;

create table cliente (
    id int not null auto_increment primary key, 
    nome varchar(255) not null,
    email varchar(255) not null,
    cidade varchar(255) not null,
    bairro varchar(255) not null,
    rua-av varchar(255) not null,
    numero int not null
);

insert into cliente (id, nome, email)
values (1, 'Freitas', 'freitas@gmail.com' );

-- Tabela de Propostas

drop table if exists proposta;

create table proposta (
    nome varchar(255) not null,
    cliente_id int not null ,
    data_de_abertura date not null,
    tipo_de_movimentacao varchar(30) not null ,
    item varchar(60) not null,
    codigo_do_produto varchar(6) null,
    descricao_do_produto text,
    informacoes_do_produto text,
    qtde int not null,
    valor_unitario int not null,
    valor_total_produto int not null,
    prazo_de_entrega int not null,
    status varchar(30) not null

);

-- Table de Itens

drop table if exists item;

create table item (
    id int not null auto_increment primary key,
    produto varchar(255) not null,
    tipo_de_movimentacao varchar(30) not null ,
    unud_medida varchar(30) not null ,
    informacoes_do_produto text,
    qtde int not null,
    valor_unitario int not null,
    valor_total_produto int not null
);
