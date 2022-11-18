
<?php
    session_start();

    if(!isset($_SESSION['nome'])){
        header("Location: login.php");
    }

    include('conn.php');

    $id_curso = $_GET['id_curso'];
    $nome_curso = $_GET['nome_curso'];
    $id_user = $_SESSION['id_user'];

    if($_SESSION['id'] == 'aluno'){
        $sql = "SELECT aluno, curso FROM alunos_cursos WHERE aluno = $id_user AND curso = $id_curso;";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $log = TRUE;
        }else{
            $log = FALSE;
        }
    }

    if($_SESSION['id'] == 'professor'){
        $sql = "SELECT nome_curso, materia_curso, id_curso FROM cursos WHERE id_professor_curso = $id_user AND id_curso = $id_curso";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $log = TRUE;
        }else{
            $log = FALSE;
        }
    }

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$nome_curso?></title>
    <link rel="stylesheet" href="geral.css">
</head>
<body>

    <header>
        <div class="titleFrAcademy"><h1>FrAcademy</h1></div>
    </header>

    <nav>
        <table>
            <tr>
                <td>
                    <a href="conta.php"><img src="imagens/default_user.png" class="sideImg"></a>
                    <br>
                    Minha Conta
                </td>
            </tr>
            <tr>
                <td>
                    <a href="homepage.php"><img src="imagens/pilha-de-tres-livros.png" class="sideImg"></a>
                    <br>
                    Meus Cursos
                </td>
            </tr>
            <tr>
                <td>
                    <a href="areaDeBusca.php"><img src="imagens/lupa.png" class="sideImg"></a>
                    <br>
                    Cursos Disponíveis
                </td>
            </tr>
        </table>
    </nav>

    <section>
        <div class="Main">
            <div class="infoPag"><h2><?=$nome_curso?></h2></div>

            <div class="containerCursos">
                <?php
                    $sql = "SELECT descricao_curso FROM cursos WHERE id_curso = '$id_curso';";
                    $result = $conn-> query($sql);
                    while($row = $result->fetch_assoc()){
                        ?><div class="descricaoCurso"><?=$row['descricao_curso']?></div><?php
                    }
                ?>

                <?php

                if($_SESSION['id'] == 'aluno'){
                    if($log === FALSE){
                        ?>
                        <div>
                            <form action="curso_php.php" method="POST" id="form">
                                <input type="hidden" value="inscrever" name="op">
                                <input type="hidden" value="<?=$id_curso?>" name="curso">
                                <input type="hidden" value="<?=$id_user?>" name="user"> 
                                <input type="submit" value="Inscrever">
                            </form>
                        </div>
                        <?php
                    }else if($log === TRUE){
                        ?>
                        <div>
                            <form action="curso_php.php" method="POST" id="form">
                                <input type="hidden" value="cancelar" name="op">
                                <input type="hidden" value="<?=$id_curso?>" name="curso">
                                <input type="hidden" value="<?=$id_user?>" name="user">
                                <input type="submit" value="Cancelar Inscrição">
                            </form>
                        </div>
                        <?php
                    }
                }else if($_SESSION['id'] == 'professor'){
                    if($log === TRUE){
                        ?>  <table>
                                <form action="editar_curso.php" method="POST">
                                    <input type="hidden" name="op" value="editar_curso">
                                    <input type="hidden" value="<?=$id_curso?>" name="curso">
                                    <input type="submit" value="Editar Curso">
                                </form>
                                <form action="curso_php.php" method="POST">
                                    <input type="hidden" value="<?=$id_curso?>" name="curso">
                                    <input type="hidden" value="apagar_curso" name="op">
                                    <input type="submit" value="Apagar Curso">
                                </form>
                            </table>
                        <?php
                    }
                }
                ?>
            </div>

            
        </div>
    </section>
</body>
</html>