/*
centro_doação_cadastro
cnpj, login, senha (protegido por hash), nome, cep (ou endereço completo?)

centro_doação_necessidade
cnpj, tipos sanguíneos que tem necessidade, data pedido

doencas_doador
(colocar o que a pessoa possivelmente tenha)

historico_doacao
cpf(doador), cnpj (centro de doação), data doação

pedido_familia
(pedido de doação em nome de uma pessoa específica, conversar sobre como adicionar isso)


https://www.w3schools.com/sql/sql_datatypes.asp
https://www.w3schools.com/sql/sql_constraints.asp
https://www.youtube.com/watch?v=mwJmupaIlF8
https://www.youtube.com/watch?v=Qh1vLWRiOzc
https://www.youtube.com/watch?v=6oKl6mZXPIU
https://www.youtube.com/watch?v=b-BRlpso4GE


=====================================================================
*/

CREATE DATABASE doacaoTCC;

/*
doador
cpf, nome, idade, tipo sanguineo, numero telefone, data ultima doação
*/
CREATE TABLE doador (
    cpf CHAR(11),
    nome VARCHAR(255),
    sobrenome VARCHAR(255),
    data_nascimento DATE,
    tipo_sanguineo VARCHAR(3),
    cep VARCHAR(9),
    estado CHAR(2),
    telefone VARCHAR(15)
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
CREATE TABLE centro_doacao_cadastro (
    cnpj
    login
    senha
    nome 
    cep
    estado

);