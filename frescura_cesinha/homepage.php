
<?php
    session_start();

    if(!isset($_SESSION['nome'])){
        header("Location: login.php");
    }

    include('conn.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/areaDoProfessor.css">
</head>
<body>
    <div class="container">
    <div class="sideMenu">
    <table>
                <tr>
                    <td>
                        <a href="homepage.php"><img src="imagens/logo_frAcademy.jpeg" alt="" class="logoFrAcademy"></a>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="conta.php"><img src="imagens/default_user.png" alt="foto_default" class="sideImg"></a>
                        <br>
                        Minha Conta
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="homepage.php"><img src="imagens/foto_livro1.png" alt="" class="sideImg"></a>
                        <br>
                        Meus Cursos
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>
                    <a href="areaDeBusca.php"><img src="imagens/lupa.png" alt="" class='sideImg'></a>
                        <br>
                        Busca
                        <hr>
                    </td>
                </tr>
            </table>
        </div>
        <div class="header">
            <h1>Meus Cursos</h1>
            <hr>
        </div>
        <div class="main">

            <!--Parte do Código PHP se o usuário logado for um professor -->

            <?php if($_SESSION['id'] == 'professor'){ ?>
                <div class="curso" id="curso">
                    <a href="novoCurso.php">
                        <div class="titleCurso">
                            <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" /></svg>
                        </div>
                    </a>
                </div>
                <?php
                    $id_user = $_SESSION['id_user'];
                    $sql = "SELECT id_curso, nome_curso, descricao_curso, materia_curso FROM cursos WHERE id_professor_curso = '$id_user';";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){ ?>
                           <a href="curso.php?nome_curso=<?php echo $row['nome_curso']; ?>&id_curso=<?php echo $row['id_curso'];?>">
                               <div class="curso">
                                    <div><?php  echo $row['nome_curso']?></div>
                                    <div><?php echo $row['materia_curso']?></div>
                               </div>
                           </a>
                    <?php
                    }}else{ ?>
                        
                        <div class="curso">
                            <div>Nenhum Curso Cadastrado!</div>
                        </div>
                    <?php }
                ?>
            <?php } ?>

            <!-- PHP se o aluno Acessar -->

            <?php
                if($_SESSION['id'] == 'aluno'){
                    $id_user = $_SESSION['id_user'];
                    $sql = "SELECT curso FROM alunos_cursos WHERE aluno = $id_user";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $id = $row['curso'];
                            $sql2 = "SELECT id_curso, nome_curso, materia_curso, descricao_curso FROM cursos WHERE id_curso = $id;";
                            $result2 = $conn->query($sql2);
                            if ($result->num_rows > 0){
                                while($row2 = $result2->fetch_assoc()){
                                    ?><a href="curso.php?id_curso=<?=$row2['id_curso']?>&nome_curso=<?=$row2['nome_curso']?>&descricao_curso=<?=$row2['descricao_curso']?>">
                                        <div class="curso">
                                            <div><?=$row2['nome_curso']?></div>
                                            <div><?=$row2['materia_curso']?></div>
                                        </div>
                                    </a><?php
                                }
                            }else{
                                echo "No results";
                            }
                        }
                    }else{
                        echo "No results";
                    }
                }
            ?>

        </div>
        </div>
    </div>
    <script src="script/homepage.js"></script>
</body>
</html>