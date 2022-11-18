
<?php
    session_start();

    if(!isset($_SESSION['nome'])){
        header("Location: login.php");
    }

    include('conn.php');
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
            <div class="infoPag"><h2>Meus Cursos</h2></div>
            <div class="containerCursos">
            <!--Parte do Código PHP se o usuário logado for um professor -->
            
            <?php
                if($_SESSION['id'] == 'professor'){
            ?>
                <a href="novoCurso.php">
                    <div class="addCurso">
                        <div>
                            <div>
                                <img src="imagens/icon_add.png">
                            </div>
                        </div>
                    </div>
                </a>
            <?php
                $id_user = $_SESSION['id_user'];
                $sql = "SELECT id_curso, nome_curso, descricao_curso, materia_curso FROM cursos WHERE id_professor_curso = '$id_user';";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){ ?>
                        <a href="curso.php?nome_curso=<?php echo $row['nome_curso']; ?>&id_curso=<?php echo $row['id_curso'];?>">
                        <div class="curso">
                            <div><?=$row['nome_curso']?></div>
                            <div><?=$row['materia_curso']?></div>
                        </div>
                        </a>
            <?php   } 
                }else{   ?>
                    <div class="curso">
                        <div>Nenhum Curso Cadastrado</div>
                    </div>
                <?php }} ?>
            
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
                            echo "Erro!";
                        }
                    }
            }else{
                ?>
                    <div class="curso">
                        <div>Você não está inscrito em nenhum Curso!</div>
                    </div>
                <?php
                }
            }
        ?>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            </div>
        </div>
    </section>
</body>
</html>