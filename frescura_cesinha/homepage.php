
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
                    <div class="titleCurso"><a href="areaDoProfessor.php">Adicionar novo Curso</a></div>
                </div>
                <?php
                    $id_user = $_SESSION['id_user'];
                    $sql = "SELECT nome_curso, descricao_curso, materia_curso FROM cursos WHERE id_professor_curso = '$id_user';";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){ ?>
                           <a href="">
                               <div class="curso">
                                    <div><?php  echo $row['nome_curso']?></div>
                                    <div><?php echo $row['descricao_curso']?></div>
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


        </div>
        </div>
    </div>
    <script src="script/homepage.js"></script>
</body>
</html>