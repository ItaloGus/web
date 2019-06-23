create database livraria;
use livraria;

create table tb_livraria(
Nome_Livraria varchar(45), 
CNPJ_Livraria bigint(14), 
Endereco_Livraria varchar(80), 
Telefone_Livraria bigint(11),
primary key(CNPJ_Livraria));

create table tb_livro(
Nome_Livro varchar(80), 
Autor_Livro varchar(50), 
ISBN_Livro bigint(13), 
Editora_Livro varchar(45),
primary key(ISBN_Livro));
