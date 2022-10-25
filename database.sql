CREATE SCHEMA `projeto_pjbl` ;

USE projeto_pjbl


CREATE TABLE cursos (
	id_curso INT(50) PRIMARY KEY AUTO_INCREMENT,
    nome_curso VARCHAR(50) NOT NULL,
    nome_autor VARCHAR(50) NOT NULL,
    cpf_moderador VARCHAR(50),
    cnpj_instituicao VARCHAR(50) NOT NULL,
    cpf_professor VARCHAR(50) NOT NULL
)

CREATE TABLE estudante ( 
    cpf_estudante VARCHAR(50) PRIMARY KEY,
	nome_estudante VARCHAR(50) NOT NULL,
    data_nascimento_estudante DATE NOT NULL
)

CREATE TABLE modulos (
	id_modulo INT PRIMARY KEY AUTO_INCREMENT,
	nome_modulo VARCHAR(50) NOT NULL,
    nivel_dificuldade VARCHAR(50) NOT NULL
)

CREATE TABLE moderadores(
	cpf_moderador VARCHAR(50) PRIMARY KEY,
    data_nascimento_moderador DATE NOT NULL,
    nome_moderador VARCHAR(50) NOT NULL
)

CREATE TABLE instituicao(
	cnpj_instituicao VARCHAR(50) PRIMARY KEY,
    nome_instituicao VARCHAR(50) NOT NULL,
	cidade_instituicao VARCHAR(50) NOT NULL,
    uf_instiuicao VARCHAR(2) NOT NULL,
    bairro_insituicao VARCHAR(45) NOT NULL
)

CREATE TABLE professores(
	cpf_professor VARCHAR(50) PRIMARY KEY,
    nome_professor VARCHAR(50) NOT NULL,
    data_nascimento_professor DATE NOT NULL
)

CREATE TABLE modulos_cursos(
	id INT PRIMARY KEY AUTO_INCREMENT,
	modulo INT NOT NULL ,
    curso INT(50) NOT NULL
)

CREATE TABLE estudantes_cursos(
	id INT(50) PRIMARY KEY AUTO_INCREMENT,
	curso INT NOT NULL ,
    cpf_estudante VARCHAR(50) NOT NULL
)

CREATE TABLE notas(
	id INT PRIMARY KEY AUTO_INCREMENT,
    curso INT(50) NOT NULL,
    cpf_estudante VARCHAR(50) NOT NULL,
    nota FLOAT
)

ALTER TABLE cursos ADD CONSTRAINT
	FOREIGN KEY (cpf_moderador)
    REFERENCES moderadores(cpf_moderador)
    
ALTER TABLE cursos ADD CONSTRAINT
	FOREIGN KEY (cnpj_instituicao)
    REFERENCES instituicao(cnpj_instituicao)
    
ALTER TABLE cursos ADD CONSTRAINT
	FOREIGN KEY (cpf_professor)
    REFERENCES professores(cpf_professor)

ALTER TABLE modulos_cursos ADD CONSTRAINT 
	FOREIGN KEY (curso)
    REFERENCES cursos (id_curso)    

ALTER TABLE modulos_cursos ADD CONSTRAINT 
	FOREIGN KEY (modulo)
    REFERENCES modulos (id_modulo)

ALTER TABLE estudantes_cursos ADD CONSTRAINT 
	FOREIGN KEY (curso)
    REFERENCES cursos (id_curso)
    
ALTER TABLE estudantes_cursos ADD CONSTRAINT 
	FOREIGN KEY (cpf_estudante)
    REFERENCES estudante (cpf_estudante)

ALTER TABLE notas ADD CONSTRAINT
	FOREIGN KEY (curso)
    REFERENCES cursos(id_curso)
    
ALTER TABLE notas ADD CONSTRAINT
	FOREIGN KEY (cpf_estudante)
    REFERENCES estudante (cpf_estudante)

GO