create database  bd_login;
use bd_login;

CREATE TABLE  tb_dados (
  nome varchar(50) NOT NULL,
  senha varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
insert into tb_dados (nome,senha) values ("jukinha","123456");
insert into tb_dados (nome,senha) values ("professor","123456");

CREATE TABLE Aluno (
    id_aluno INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    matricula VARCHAR(20) UNIQUE NOT NULL,
    telefone VARCHAR(15),
    email VARCHAR(100),
    endereco VARCHAR(200)
);


CREATE TABLE Turma (
    id_turma INT AUTO_INCREMENT PRIMARY KEY,
    nome_turma VARCHAR(50) NOT NULL
);


CREATE TABLE Aula (
    id_aula INT AUTO_INCREMENT PRIMARY KEY,
    nome_aula VARCHAR(50) NOT NULL
);


CREATE TABLE HorarioAula (
    id_horario INT AUTO_INCREMENT PRIMARY KEY,
    id_aula INT,
    horario TIME NOT NULL,
    FOREIGN KEY (id_aula) REFERENCES Aula(id_aula)
);


CREATE TABLE DiaSemana (
    id_dia INT AUTO_INCREMENT PRIMARY KEY,
    nome_dia VARCHAR(20) NOT NULL
);


CREATE TABLE Aluno_Turma (
    id_aluno_turma INT AUTO_INCREMENT PRIMARY KEY,
    id_aluno INT,
    id_turma INT,
    id_aula INT,
    id_horario INT,
    id_dia INT,
    FOREIGN KEY (id_aluno) REFERENCES Aluno(id_aluno),
    FOREIGN KEY (id_turma) REFERENCES Turma(id_turma),
    FOREIGN KEY (id_aula) REFERENCES Aula(id_aula),
    FOREIGN KEY (id_horario) REFERENCES HorarioAula(id_horario),
    FOREIGN KEY (id_dia) REFERENCES DiaSemana(id_dia)
);


INSERT INTO Aluno (nome, matricula, telefone, email, endereco)
VALUES ('João Silva', '2023001', '(11) 98765-4321', 'joao.silva@example.com', 'Rua das Flores, 123');

INSERT INTO Turma (nome_turma)
VALUES ('Turma 1');

INSERT INTO Aula (nome_aula)
VALUES ('Crossfit');


INSERT INTO HorarioAula (id_aula, horario)
VALUES (1, '10:00:00');

INSERT INTO DiaSemana (nome_dia)
VALUES ('Segunda-feira');

INSERT INTO Aluno_Turma (id_aluno, id_turma, id_aula, id_horario, id_dia)
VALUES (1, 1, 1, 1, 1);

select * from tb_dados;
select * from aula;
select * from aluno;
select * from aluno_aula;
select * from HorarioAUla;
