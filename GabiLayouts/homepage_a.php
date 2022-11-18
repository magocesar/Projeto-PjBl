
<?php
    session_start();

    if(!isset($_SESSION['nome'])){
       header("Location: login.php");
    }

    include('conn.php');
?>


<!DOCTYPE html>
<html lang="PT-BR" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Side Menu Bar CSS</title>
        <link rel="stylesheet" href="homepage_a_p.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <header class="barra">  </header>

        <div class="sidebar">
            <header> FR Academy</header>
            <ul>
                <!-- tem que mudar os icones-->
                <li><a href="#"><i class="fas fa-stream"></i>Perfil</a></li>
                <li><a href="#"><i class="fas fa-stream"></i>Meus cursos</a></li>
                <li><a href="#"><i class="fas fa-stream"></i>Busca</a></li>
            </ul>
        </div>    

        
<!-- a classe 'box' define o cartaãozinho com o quadradinho e tal -->

        <!-- Box 1 (vazia) -->
            
                    <!--Parte do Código PHP se o usuário logado for um professor -->

        <?php if($_SESSION['id'] == 'professor'){ ?>
            <div class="lado">
                <div class="box3">                
                    <div class="g">
                        <h3>+</h3>                   
                        </div>
                    </div>
            </div>
            <?php
                $id_user = $_SESSION['id_user'];
                $sql = "SELECT id_curso, nome_curso, descricao_curso, materia_curso FROM cursos WHERE id_professor_curso = '$id_user';";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){ ?>
                        <a href="curso.php?nome_curso=<?php echo $row['nome_curso']; ?>&id_curso=<?php echo $row['id_curso'];?>">
                            <div class="box1">
                                <div class="a">
                                    <div class="b"></div>
                                    <div class="c">
                                        <h4><?=$row['nome_curso']?></h4>
                                        <p><?=$row['materia_curso']?></p>
                                        <a class="f" href="#">Click Here</a>
                                    </div>
                            </div>
                        </a>
                <?php
                }}else{ ?>
                    <div class="box1">
                        <div class="a">
                            <div class="b"></div>
                            <div class="c">
                                <h4>Nenhum Curso Cadastrado</h4>
                            </div>
                    </div>
                <?php }
            ?>
        <?php } ?>
	<!-- Component End  -->

    </body>
</html>