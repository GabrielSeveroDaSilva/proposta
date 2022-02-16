drop table if exists usuario;

create table usuario (
    id int not null auto_increment primary key, 
    nome varchar(255) not null , 
    email varchar(255) not null,
    login varchar(40) not null
);

insert into usuario (id, nome, email, login) 
values (1, 'Administrador', 'adm@gmail.com', 'admin');