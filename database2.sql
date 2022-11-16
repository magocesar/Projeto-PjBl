
CREATE SCHEMA IF NOT EXISTS `fracademy`;

USE fracademy;

CREATE TABLE IF NOT EXISTS alunos (
	id_aluno INT PRIMARY KEY AUTO_INCREMENT,
	nome_aluno 	VARCHAR(100) NOT NULL,
    login_aluno VARCHAR(100) NOT NULL,
    senha_aluno VARCHAR(100) NOT NULL,
    cod_aluno INT
);

CREATE TABLE IF NOT EXISTS alunos_cursos (
	id INT PRIMARY KEY AUTO_INCREMENT,
    aluno INT NOT NULL,
    curso INT NOT NULL
);

CREATE TABLE IF NOT EXISTS professores (
	id_professor INT PRIMARY KEY AUTO_INCREMENT,
    login_professor VARCHAR(100) NOT NULL,
    senha_professor VARCHAR(100) NOT NULL,
	nome_professor VARCHAR(100) NOT NULL,
    cod_professor INT
);

CREATE TABLE IF NOT EXISTS cursos (
	id_curso INT PRIMARY KEY AUTO_INCREMENT,
    nome_curso 	VARCHAR(100) NOT NULL,
    descricao_curso TINYTEXT,
	materia_curso VARCHAR(100) NOT NULL,
    id_professor_curso INT NOT NULL
);

ALTER TABLE cursos ADD CONSTRAINT
	FOREIGN KEY (id_professor_curso)
	REFERENCES professores(id_professor)
    ON DELETE CASCADE;
    
ALTER TABLE alunos_cursos ADD CONSTRAINT
	FOREIGN KEY (aluno)
    REFERENCES alunos(id_aluno)
    ON DELETE CASCADE;
    
ALTER TABLE alunos_cursos ADD CONSTRAINT
	FOREIGN KEY (curso)
    REFERENCES cursos(id_curso)
    ON DELETE CASCADE;

ALTER TABLE alunos
	MODIFY COLUMN cod_aluno INT
    DEFAULT 1;
    
ALTER TABLE professores
	MODIFY COLUMN cod_professor INT
	DEFAULT 2;


    

