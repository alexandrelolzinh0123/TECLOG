
create table users(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(45) NOT NULL,
	funcao VARCHAR(45) NOT NULL,
	cpf VARCHAR(11) unique NOT NULL,
	username VARCHAR(45) NOT NULL,
	password VARCHAR(45) NOT NULL,
	created DATETIME DEFAULT NULL,
	modified DATETIME DEFAULT NULL
);

create table produtos(
	id INT AUTO_INCREMENT PRIMARY KEY,
	descricao VARCHAR(100) NOT NULL,
	unidade_de_medida VARCHAR(2) NOT NULL,
	quantidade_por_caixa FLOAT(4) NOT NULL,
	embalagem VARCHAR(45) NOT NULL,
	dimensoes FLOAT(4) NOT NULL,
	preco_por_caixa FLOAT(5) NOT NULL,
	demanda_mensal FLOAT(5) NOT NULL,
	produto_user_cad INT,
	rua VARCHAR(1) NOT NULL,
	posicao INT NOT NULL,
	CONSTRAINT produto_user_fk FOREIGN KEY (produto_user_cad) REFERENCES users(id)
);