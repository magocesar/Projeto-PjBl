
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

INSERT INTO cursos(nome_curso, nome_autor, cpf_moderador, cnpj_instituicao, cpf_professor) VALUES
	('Lógica de Programação', 'Gustavo Guanabara', '809.373.150-44', '41.319.576/0001-01', '465.675.610-50'),
    ('MySql', 'Boson Treinamentos', '409.860.810-35', '41.319.576/0001-01', '465.675.610-50'),
    ('Matemática para Computação', 'Guilherme', '209.624.450-10', '41.319.576/0001-01', '465.675.610-50'),
    ('Modelagem UML', 'Sheila', '409.860.810-35', '41.319.576/0001-01', '465.675.610-50'),
    ('Python 3', 'Gustavo Guanabara', '809.373.150-44', '41.319.576/0001-01', '713.369.860-93'),
    ('Sistemas Cyberfísicos', 'Afonso Miguel', '426.270.200-64', '41.319.576/0001-01', '713.369.860-93'),
    ('PHP', 'Maicris', '453.953.050-09', '41.319.576/0001-01', '713.369.860-93'),
    ('C#', 'PUC/PR', '453.953.050-09', '41.319.576/0001-01', '166.549.630-40'),
    ('Programação Orientada a Objetos', 'Maicris', '453.953.050-09', '41.319.576/0001-01', '166.549.630-40'),
    ('Programação WEB', 'Emerson', '872.254.580-86', '67.278.491/0001-08', '166.549.630-40'),
    ('Web Services', 'Gustavo Guanabara', '872.254.580-86', '67.278.491/0001-08', '870.794.950-24'),
    ('Protocolos OSI', 'Guilherme', '809.373.150-44', '67.278.491/0001-08', '870.794.950-24'),
    ('Uso de Sockets', 'Guilherme', '689.965.730-94', '31.784.264/0001-07', '870.794.950-24'),
    ('Ruby', 'Maicris', '209.624.450-10', '31.784.264/0001-07', '276.100.620-81'),
    ('Swift', 'Maicris', '689.965.730-94', '31.785.264/0001-07', '276.100.620-81')

CREATE TABLE estudante ( 
    cpf_estudante VARCHAR(50) PRIMARY KEY,
	nome_estudante VARCHAR(50) NOT NULL,
    data_nascimento_estudante DATE NOT NULL
)

INSERT INTO estudante (cpf_estudante, nome_estudante, data_nascimento_estudante) VALUES
	('146.791.260-35', 'Pam', '2002-03-29'),
    ('339.744.420-90', 'Angela', '2001-11-11'),
    ('651.923.790-67', 'Michael Scott','2005-06-14'),
    ('167.594.090-86', 'Jan', '2006-08-22'),
    ('229.864.740-20', 'Fring', '2001-04-04'),
    ('925.878.050-74', 'Valentine', '2004-03-15'),
    ('139.098.980-17', 'Vick', '2002-12-24'),
    ('063.333.830-31', 'Matheus', '2007-03-11'),
    ('306.362.590-64', 'Bel', '2004-06-09'),
    ('011.681.300-85', 'Benjamin', '2004-10-10'),
    ('010.302.530-80', 'Jacinto', '2004-03-01'),
    ('554.972.000-01', 'Willian', '2002-04-21'),
    ('824.662.410-56', 'Pacheco', '2004-05-18'),
    ('974.738.690-94', 'Munch', '2001-03-29'),
    ('615.767.540-30', 'Carneiro', '1999-02-27')

CREATE TABLE modulos (
	id_modulo INT PRIMARY KEY AUTO_INCREMENT,
	nome_modulo VARCHAR(50) NOT NULL,
    nivel_dificuldade VARCHAR(50) NOT NULL
)

INSERT INTO modulos (nome_modulo, nivel_dificuldade) VALUES
	('Strings', 'Difícil'),
    ('Listas', 'Intermediário'),
    ('Laços de Repetição', 'Fácil'),
    ('Modelagem UML', 'Intermediário'),
    ('Criação de Classes', 'Intermediário'),
    ('Criação de Database', 'Fácil'),
    ('Funções', 'Intermediário'),
    ('Recursão', 'Difícil'),
    ('Triggers', 'Intermediário'),
    ('Stored Procedure', 'Intermediário'),
    ('Funções do Segundo Graú', 'Intermediário'),
    ('Funções Exponenciais', 'Difícil'),
    ('Construção de Gráficos', 'Intermediário'),
    ('Tipos de Memória', 'Fácil'),
    ('Threads', 'Fácil')


CREATE TABLE moderadores(
	cpf_moderador VARCHAR(50) PRIMARY KEY,
    data_nascimento_moderador DATE NOT NULL,
    nome_moderador VARCHAR(50) NOT NULL
)

INSERT INTO moderadores(cpf_moderador, data_nascimento_moderador, nome_moderador) VALUES
	('809.373.150-44', '2004-03-29', 'César'),
    ('452.491.220-78', '2004-05-19', 'Otávio'),
    ('208.056.040-90', '2004-01-15', 'Rodrigo'),
    ('595.248.670-36', '2004-02-05', 'Bernardo'),
    ('409.860.810-35', '2003-03-21', 'Gabriela'),
    ('656.398.680-31', '2001-01-29', 'Gustavo'),
    ('157.221.760-01', '1990-02-19', 'Júlia'),
    ('872.254.580-86', '1995-11-22', 'Ravi'),
    ('826.578.070-20', '2002-09-24', 'Guilherme'),
    ('426.270.200-64', '1976-02-11', 'Beatriz'),
    ('453.953.050-09', '1985-08-12', 'Mariana'),
    ('209.624.450-10', '2001-09-11', 'Hector'),
    ('483.200.230-92', '1999-02-18', 'Vitor'),
    ('615.859.680-99', '1996-03-11', 'Mateus'),
    ('689.965.730-94', '2001-02-29', 'Mário')


CREATE TABLE instituicao(
	cnpj_instituicao VARCHAR(50) PRIMARY KEY,
    nome_instituicao VARCHAR(50) NOT NULL,
	cidade_instituicao VARCHAR(50) NOT NULL,
    uf_instiuicao VARCHAR(2) NOT NULL,
    bairro_insituicao VARCHAR(45) NOT NULL
)

INSERT INTO instituicao(cnpj_instituicao, nome_instituicao,  cidade_instituicao, uf_instiuicao, bairro_insituicao) 
	VALUES ('66.840.482/0001-04', 'Pontifícia Universidade Catolica do Paraná', 'Curitiba', 'PR', 'Prado Velho'),
			('41.319.576/0001-01', 'Universidade Federal do Paraná', 'Curitiba', 'PR', 'Jardim Botânico'),
            ('33.371.193/0001-46', 'Universidade Federal de Santa Catarina', 'Florienópolis', 'SC', 'Trindade'),
            ('32.320.434/0001-65', 'Instituto Federal do Paraná', 'Curitiba', 'PR', 'Guabirotuba'),
            ('32.321.434/0001-65', 'Universidade Positivo', 'Curitiba', 'PR', 'Ecoville'),
            ('82.339.210/0001-73', 'Universidade Tecnológica Federal do Paraná', 'Curitiba', 'PR', 'Ecoville'),
            ('23.342.543/0001-92', 'Colégio Bom Jesus São José', 'São Bento do Sul', 'SC', 'Centro'),
            ('39.824.887/0001-78', 'Universidade  Univille SBS', 'São Bento do Sul', 'SC', 'Colonial'),
            ('52.445.758/0001-37', 'Universidade Univille Joinville', 'Joinville', 'SC', 'Industrial Norte'),
            ('21.797.339/0001-30', 'Univali', 'Itajaí', 'SC', 'Fazenda'),
            ('47.017.145/0001-69', 'Colégio Global', 'São Bento do Sul', 'SC', 'Centro'),
            ('67.278.491/0001-08', 'Curso Positivo', 'Curitiba', 'PR', 'Batel'),
            ('03.854.285/0001-16', 'Instituto Federal de Santa Catarina', 'SC', 'Florienópolis', 'Centro'),
            ('31.784.264/0001-07', 'Universidade do Constestado', 'Mafra', 'SC', 'Centro'),
            ('31.785.264/0001-07', 'Unicesumar', 'Maringá', 'PR', 'Centro')
            
    
	

CREATE TABLE professores(
	cpf_professor VARCHAR(50) PRIMARY KEY,
    nome_professor VARCHAR(50) NOT NULL,
    data_nascimento_professor DATE NOT NULL
)

INSERT INTO professores (cpf_professor, nome_professor, data_nascimento_professor) VALUES
	('465.675.610-50','Maicris','1985-11-05'),
    ('713.369.860-93','Guilherme','1990-04-19'),
    ('528.978.620-17','Cristina','1978-01-11'),
    ('526.483.560-88','Sheila','1980-06-27'),
    ('789.841.540-08','Rafaela','1986-01-14'),
    ('166.549.630-40','Afonso','1970-02-09'),
    ('870.794.950-24','Chico Novaes','1979-07-15'),
    ('276.100.620-81','Fernando','1980-03-29'),
    ('418.453.850-98','Porrada','1986-09-17'),
    ('707.560.440-65','Thiago','1989-11-11'),
    ('356.912.600-57','Everson','1991-02-11'),
    ('983.925.140-68','Emerson','1980-11-21'),
    ('237.427.300-88','Carneiro','1989-03-29'),
    ('501.600.950-34','Zoio','1990-11-03'),
    ('300.380.320-40','Paraiso','1987-01-11')

CREATE TABLE modulos_cursos(
	id INT PRIMARY KEY AUTO_INCREMENT,
	modulo INT NOT NULL ,
    curso INT(50) NOT NULL
)


INSERT INTO modulos_cursos(modulo, curso) VALUES
	(1 , 1),
    (2 , 1),
    (3 , 1),
    (4 , 4),
    (5 , 1),
    (6 , 2),
    (11 , 3),
    (12, 3),
    (13 , 3),
    (14 , 6),
    (15 , 6),
    (1 , 14),
    (2 , 14),
    (3 , 14),
    (13 , 12)


INSERT INTO estudantes_cursos(curso, cpf_estudante, nota) VALUES
	(1, '146.791.260-35', 5.0),
    (2, '146.791.260-35', 6.0),
    (2, '554.972.000-01', 7.0),
    (3, '554.972.000-01', 9.1),
    (4, '974.738.690-94', 1.2),
    (5, '229.864.740-20', 4.6),
    (6, '229.864.740-20', 6.3),
    (7, '306.362.590-64', 9.8),
    (7, '651.923.790-67', 6.9),
	(8, '651.923.790-67', 7.0),
    (9, '615.767.540-30', 4.7),
    (11, '010.302.530-80', 9.1),
    (12, '010.302.530-80', 10.0),
    (15, '011.681.300-85', 6.7),
    (13, '011.681.300-85', 2.4)
    
    


CREATE TABLE estudantes_cursos(
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



DELIMITER $$
CREATE PROCEDURE dados_aluno(IN cpf_aluno VARCHAR(50))
BEGIN 
	SELECT estudante.cpf_estudante AS CPF, estudante.nome_estudante AS NOME, cursos.nome_curso AS CURSO, estudantes_cursos.nota AS NOTA
    FROM estudante, cursos, estudantes_cursos
    WHERE estudante.cpf_estudante = cpf_aluno AND
		cursos.id_curso = estudantes_cursos.curso AND
		estudantes_cursos.cpf_estudante = cpf_aluno
    ORDER BY cursos.nome_curso
;END$$

DELIMITER ;

CALL dados_aluno('146.791.260-35')



