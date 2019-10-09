CREATE DATABASE tarefas;
USE tarefas;
CREATE TABLE usuario (
  username VARCHAR(200) NOT NULL,
  senha TEXT NOT NULL,
  primary key (username));

CREATE TABLE tarefa (
  id INT NOT NULL auto_increment,
  descricao VARCHAR(500) NOT NULL,
  prazo DATE,
  concluida CHAR(1),
  username VARCHAR(200) NOT NULL,
  primary key (id),
  foreign key (username)
  references usuario (username));
  
  create user 'admtarefa'@'localhost'
  identified by '123';
  grant all privileges on
  tarefas.* to 'admtarefa'@'localhost';