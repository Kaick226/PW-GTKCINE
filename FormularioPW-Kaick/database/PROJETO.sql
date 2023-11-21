create database Pw_Projeto;
use Pw_Projeto;

create table Cliente(
id_cli int primary key auto_increment,
nome_cli varchar(300),
usuario_cli varchar(300),
nascimeento_cli date,
cpf_cli varchar(200),
celular_cli varchar(200),
email_cli varchar(200),
senha_cli varchar(200)
);

create table Serie(
id_ser int primary key auto_increment,
nome_ser varchar(200),
sinopse_ser varchar(400),
elenco_ser varchar(300),
produtora_ser varchar(300),
diretor_ser varchar(400),
classificacao_ser varchar(50),
genero_ser varchar(200),
data_lancamento date
);

create table Colaborador(
id_col int primary key auto_increment,
nome_col varchar(200),
email_col varchar(400),
contato_col varchar(300),
cpf_col varchar(300),
data_nas_col date,
area_col varchar(100),
descricao_col varchar(400)
);

create table Filme(
id_fil int primary key auto_increment,
nome_fil varchar(300),
sinopse_fil varchar(400),
elenco_fil varchar(300),
produtor_fil varchar(300),
diretor_fil varchar(300),
data_lancamento_fil date,
duracao_fil varchar(300),
genero_fil varchar(300)
);