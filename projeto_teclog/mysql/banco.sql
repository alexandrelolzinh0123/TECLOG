create database gestao;
use gestao;
drop schema gestao;

create table users(
	id int auto_increment,
	nome varchar(45) not null,
	funcao varchar(45) not null,
	cpf varchar(11) unique not null,
	username varchar(45) not null,
	senha varchar(45) not null,
	primary key(id)	
);

create table produtos(
	id int auto_increment,
	descricao varchar(100) not null,
	unidade_de_medida varchar(2) not null,
	quantidade_por_caixa float(4) not null,
	embalagem varchar(45) not null,
	dimensoes float(4) not null,
	preco_por_caixa float(5) not null,
	demanda_mensal float(5) not null,
	produto_user_cad int,
	primary key(id),
	constraint produto_user_fk foreign key produtos(produto_user_cad) references users(id)
);