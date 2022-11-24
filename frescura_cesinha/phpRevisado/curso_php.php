<?php
    include("conn.php");

    session_start();

    $id_curso = intval($_POST['curso']);
    $id_user = $_SESSION['id_user'];
    $op = $_POST['op'];
    $nome_curso = $_POST['titulo'];
    $materia_curso = $_POST['materia'];
    $descricao_curso = $_POST['descricao'];
    
    if($op == 'inscrever'){
        inscreverAluno($id_user, $id_curso, $conn);
    }else if($op == 'cancelar'){
        cancelarAluno($id_user, $id_curso, $conn);
    }else if($op == 'apagar_curso'){
        apagarCurso($id_curso, $conn);
    }else if($op === 'att_curso'){
        attCurso($id_curso, $nome_curso, $materia_curso, $descricao_curso, $conn);
    }


    function cancelarAluno($id_user, $id_curso, $conn){
        $sql = "DELETE FROM alunos_cursos WHERE aluno = $id_user AND curso = $id_curso;";
        if($conn->query($sql) === TRUE){
            ?><script>
                alert("!Inscrito")
            </script><?php
            header("Location: homepage.php");
        }

    }

    function inscreverAluno($id_user, $id_curso, $conn,){
        $sql = "INSERT INTO alunos_cursos (aluno, curso) VALUES ($id_user, $id_curso);";
        if($conn->query($sql) === TRUE){
            ?><script>
                alert("!Inscrito")
            </script><?php
            header("Location: homepage.php");
        }
    }

    function apagarCurso($id_curso, $conn){
        $sql = "DELETE FROM cursos WHERE id_curso=$id_curso;";
        if($conn->query($sql) === TRUE){
            ?><script>alert('Curso Deletado!')</script><?php
            header("Location: homepage.php");
        }
    }

    function attCurso($id_curso,$nome_curso, $materia_curso, $descricao_curso, $conn){
        $sql = "UPDATE cursos SET nome_curso='$nome_curso', materia_curso='$materia_curso', descricao_curso='$descricao_curso' WHERE id_curso = '$id_curso';";
        if($conn->query($sql) === TRUE){
            ?>
            <form action="editar_curso.php" method="POST" id="form">
                <input type="hidden" value="Curso Atualizado com Sucesso!" name="msgServer">
                <input type="hidden" value="<?$id_curso?>" name="curso">
                <script>document.getElementById('form').submit()</script>
            </form><?php
        }
    }



?>