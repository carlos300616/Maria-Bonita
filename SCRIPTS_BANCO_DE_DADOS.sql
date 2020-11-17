create database loja_maria_bonita;
use loja_maria_bonita;

create table endereco (
	id int not null auto_increment unique,
    endereco varchar (255) not null,
    bairro varchar (255) not null,
    cep varchar (10) not null,
    ponto_referencia varchar (255) not null,
    primary key (id)
);
select * from endereco;

create table cliente (
	id int not null auto_increment unique,
    nome varchar (200) not null,
    telefone varchar (20) not null,
    email varchar (255) not null,
    data_nascimento varchar (10) not null,
    id_endereco int not null,
    primary key (id),
    foreign key (id_endereco) references endereco (id)
);

drop table endereco;

drop table cliente;

select * from endereco;

select * from cliente;

insert into endereco (endereco, bairro, cep, ponto_referencia)
		    values ('avenida marginal','bandeirantes', '06550-000', 'escola parque');

insert into cliente (nome, telefone, email, data_nascimento, id_endereco)
            values ('Jorge', '(11) 9-7575-7575', 'jorge@mail.com', '28/09/1987', 1);
            
update cliente
set nome = 'Carlos',
telefone = ' 98585-2222',
email = 'karlitos.silva@hotmail.com',
data_nascimento = '23/04/1991'
where id = 1;
            
select carlinhos.id, carlinhos.nome,e.endereco from cliente as carlinhos
inner join endereco as e
on e.id = carlinhos.id_endereco;
