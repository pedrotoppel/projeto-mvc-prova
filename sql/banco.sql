create database mvc;

use mvc;

create table administradores(
	id int auto_increment not null primary key,
    email varchar(60) not null unique,
    senha varchar(255) not null
);

create table areas(
	id int not null auto_increment primary key,
    nome varchar(60) not null unique
);

create table curso(
	id int not null auto_increment primary key,
	nome varchar(60) not null,
    area_id int not null,
    
    foreign key (area_id) references areas(id)
);

create table turma(
	id int auto_increment not null primary key,
    nome varchar(60) not null unique,
    curso_id int not null,
    
    foreign key (curso_id) references curso(id)
);

create table professores(
	id int auto_increment not null primary key,
	nome varchar(255) not null,
    email varchar(60) not null unique,
    senha varchar(255) not null
);

create table alunos(
	id int auto_increment not null primary key,
	nome varchar(255) not null,
    turma_id int not null,
    email varchar(60) not null unique,
    telefone varchar(20) not null,
    senha varchar(255) not null,
    
    foreign key (turma_id) references turma(id)
);

create table disciplina(
	id int not null auto_increment primary key,
	nome varchar(60) not null unique,
    professor_id int not null,
    turma_id int not null,
    
    foreign key (turma_id) references turma(id),
    foreign key (professor_id) references professores(id)
);


INSERT INTO areas(nome) VALUES 
	("Tecnologia da Informação"),
    ("Tecnologia da Moda"),
    ("Automação Industrial"),
    ("Metal Mecânica"),
    ("Biotecnologia"),
    ("Eletromecânica");
