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
    numero varchar(10) not null
);

insert into cliente (id, nome, email, cidade, bairro,rua, numero) 
values (1, 'Maria', 'maria@gmail.com','nova mutum','Jardim', 'Ortencias','1111');

-- Tabela de Propostas

drop table if exists proposta;

create table proposta (
    nome varchar(255) not null,
    cliente_id int not null ,
    data_de_abertura date not null,
    movimentacao varchar(255) not null ,
    item varchar(60) not null,
    codigo_do_produto varchar(6) null,
    descricao_do_produto text,
    informacoes_do_produto text,
    qtde int not null,
    valor_unitario int not null,
    valor_total int not null,
    prazo_de_entrega int not null,
    status varchar(30) not null

);

-- Table de Itens

drop table if exists item;

create table item (
    id int not null auto_increment primary key,
    produto varchar(255) not null,
    movimentacao varchar(255) not null ,
    unid_medida varchar(60) not null ,
    informacoes_do_produto text,
    qtde int not null,
    valor_unitario int not null,
    valor_total int not null
);

insert into item (id, produto, unid_medida, movimentacao, informacoes_do_produto, qtde, valor_unitario, valor_total ) 
values (1, 'Sacolas plésticas reforçadas premiu','FARDO','Venda de produto para comecialização','','1','50','50');


drop table if exists movimentacao;

create table tipo_de_movimentacao (
    id int not null auto_increment primary key,
   movimentacao varchar(255) not null
);

insert into tipo_de_movimentacao (id, movimentacao) 
values (1, 'movimentacao');

