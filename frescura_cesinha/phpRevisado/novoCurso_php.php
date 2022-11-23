<?php
    include('conn.php');

    session_start();

    $titulo = $_POST['titulo'];
    $materia = $_POST['materia'];
    $descricao = $_POST['descricao'];
    $id_professor = $_SESSION['id_user'];


    $sql = "INSERT INTO cursos (nome_curso, materia_curso, descricao_curso, id_professor_curso) VALUES ('$titulo' , '$materia', '$descricao', '$id_professor');";
    if ($conn->query($sql) === TRUE) {
        ?><form action="novoCurso.php" method="POST" id="form"><input type="hidden" value="Novo Curso Criado com Sucesso!" name="msgServer"></form><script>document.getElementById('form').submit()</script><?php
    }else{
        ?><form action="novoCurso.php" method="POST" id="form"><input type="hidden" value="Erro ao Criar o Curso!" name="msgServer"></form><script>document.getElementById('form').submit()</script><?php
    }
?>