<?php
    include("conn.php");

    $id_curso = $_POST['curso'];
    $id_user = $_POST['user'];
    $op = $_POST['op'];
    
    if($op == 'inscrever'){
        inscreverAluno($id_user, $id_curso, $conn);
    }else if($op == 'cancelar'){
        cancelarAluno($id_user, $id_curso, $conn);
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






?>