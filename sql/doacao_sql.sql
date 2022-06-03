/*

https://www.w3schools.com/sql/sql_datatypes.asp
https://www.w3schools.com/sql/sql_foreignkey.asp

DATE salva o dia como YYYY-MM-DD


=====================================================================
*/

CREATE DATABASE leve_sangue;
USE leve_sangue;

/*
doador
cpf, nome, idade, tipo sanguineo, numero telefone, data ultima doação
*/
CREATE TABLE Doador (
    cpf CHAR(11),
    /* senha VARCHAR(255) NOT NULL, POR ENQUANTO NÃO SERÁ USADO */
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    data_nascimento DATE NOT NULL,
    tipo_sanguineo VARCHAR(3) NOT NULL,
    cep CHAR(8) NOT NULL,
    estado CHAR(2) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    PRIMARY KEY (cpf)
);

/*
interesse_doador
(uma tabela que tenha interesses que a pessoa possa ter: cinema, futebol, museus, compras, eletrônicos, roupas etc.)
*/

/* Por ora não será implementado */

/*
centro_doação_cadastro
cnpj, login, senha (protegido por hash), nome, cep (ou endereço completo?)
*/
CREATE TABLE Centro_doacao (
    cnpj CHAR(14),
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    cep CHAR(8) NOT NULL,
    estado CHAR(2) NOT NULL,
    PRIMARY KEY (cnpj)
);

/*
centro_doação_necessidade
cnpj, tipos sanguíneos que tem necessidade, data pedido
*/
CREATE TABLE Centro_doacao_necessidade (
    pedido INT AUTO_INCREMENT,
    cnpj CHAR(14),
    tipo_sanguineo VARCHAR(50) NOT NULL,
    data_pedido DATE NOT NULL,
    PRIMARY KEY (pedido),
    FOREIGN KEY (cnpj) REFERENCES Centro_doacao(cnpj) 
);

/*
doencas_doador
(colocar o que a pessoa possivelmente tenha)
*/

/* Por ora não será implementado */

/*
historico_doacao
cpf(doador), cnpj (centro de doação), data doação
*/

CREATE TABLE Historico_doacao (
    cpf CHAR(11),
    cnpj CHAR(14),
    data_doacao DATE,
    CONSTRAINT PK_historico PRIMARY KEY (cpf, cnpj, data_doacao),
    FOREIGN KEY (cpf) REFERENCES Doador(cpf),
    FOREIGN KEY (cnpj) REFERENCES Centro_doacao(cnpj) 
);

/*
pedido_familia
(pedido de doação em nome de uma pessoa específica, conversar sobre como adicionar isso)
*/

/* Talvez não será implementado */


/*
Pedido de cliente para trocar os dados
*/

CREATE TABLE Pedido_mudanca_doador (
    pedido INT AUTO_INCREMENT,
    cpf CHAR(11),
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    data_nascimento DATE NOT NULL,
    cep CHAR(8) NOT NULL,
    estado CHAR(2) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    PRIMARY KEY (pedido),
    FOREIGN KEY (cpf) REFERENCES Doador(cpf)
);

CREATE TABLE Pedido_mudanca_centro_doacao (
    pedido INT AUTO_INCREMENT,
    cnpj CHAR(14),
    nome VARCHAR(255) NOT NULL,
    cep CHAR(8) NOT NULL,
    estado CHAR(2) NOT NULL,
    PRIMARY KEY (pedido),
    FOREIGN KEY (cnpj) REFERENCES Centro_doacao(cnpj)
);

/*
 Implementar tabela de mensagem enviada no fale_conosco
    Nome, número, email e mensagem
*/
