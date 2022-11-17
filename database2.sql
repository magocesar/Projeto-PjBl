
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

INSERT INTO alunos (nome_aluno, login_aluno, senha_aluno) VALUES
	('César', 'César', '22'),
    ('Rodrigo', 'Rodrigo', '22'),
    ('Gabriela', 'Gabriela', '22'),
    ('Hack', 'Hack', '22'),
    ('Otávio', 'Otávio', '22');
    
INSERT INTO professores (nome_professor, login_professor, senha_professor) VALUES 
	('Cristina', 'Cristina', '22'),
    ('Maicris', 'Maicris', '22'),
    ('Guilherme', 'Guilherme', '22'),
    ('Rafaela', 'Rafaela', '22'),
    ('Sheila', 'Sheila', '22');
    
INSERT INTO cursos (nome_curso, descricao_curso, materia_curso, id_professor_curso) VALUES
	('Banco de Dados', 'Curso de Banco de Dados', 'Programação', 1),
    ('Programação WEB', 'Curso de Programação WEB', 'Programação', 2),
    ('Conectividade em Sistemas Cyberfísicos', 'Curso de Conectividade em Sistemas Cyberfísicos', 'Desenvolvimento de Redes', 3),
    ('Lógica Matemática', 'Curso de Lógica Matemática', 'Lógica Matemática', 4),
    ('Diagramas UML', 'Curso de Diagramas UML', 'Curso UML', 5);

INSERT INTO alunos_cursos (aluno, curso) VALUES
	( 1, 1),
    ( 2, 2),
    ( 3, 3),
    ( 4, 4),
    ( 5, 5)