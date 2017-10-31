CREATE TABLE products(
	id INTEGER NOT NULL AUTO_INCREMENT,
	descricao VARCHAR(80) NOT NULL,
	quantidade_atual INTEGER NOT NULL,
	created DATETIME not null,
	modified DATETIME not null,
	constraint id_pk primary key(id)
);

CREATE TABLE lots(
	id INTEGER NOT NULL AUTO_INCREMENT,
	quantidade_entrada INTEGER NOT NULL,
	entrada DATETIME NOT NULL,
	validade DATETIME NOT NULL,
	quantidade_saida INTEGER NOT NULL,
	product_id INTEGER NOT NULL,
	cpf_funcionario VARCHAR(12) NOT NULL,
	constraint pk_id primary key(id),
	constraint product_id_fk foreign key(product_id) references products(id),
	constraint cpf_fk foreign key(cpf_funcionario) references users(cpf)
);

CREATE TABLE users(
	name VARCHAR(40) NOT NULL,
	cpf VARCHAR(12) NOT NULL,
	password VARCHAR(70) NOT NULL,
	username VARCHAR(20) NOT NULL,
	constraint cpf_pk primary key(cpf)
);
