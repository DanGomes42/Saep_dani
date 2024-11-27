create database SAEP_DB;
use SAEP_DB;

create table usuario(
id_usuario INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(200) NOT NULL,
email VARCHAR(200) NOT NULL
);

create table tarefas(
id_tarefa INT PRIMARY KEY AUTO_INCREMENT,
id_usuario INT NOT NULL,
descricao_tarefa TEXT NOT NULL,
nome_setor TEXT NOT NULL,
prioridade ENUM('baixa', 'média', 'alta'),
data_cadastro DATE NOT NULL,
status ENUM('a fazer', 'fazendo', 'pronto') DEFAULT 'a fazer'
);