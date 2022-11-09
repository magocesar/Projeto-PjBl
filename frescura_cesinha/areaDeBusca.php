
<?php
    session_start();

    if(!isset($_SESSION['nome'])){
        header("Location: login.php");
    }

    include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>areaDeBusca</title>
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
            <h1>Cursos Disponiveis</h1>
            <hr>
        </div>
        <div class="main">
            <?php
                $sql = "SELECT id_curso ,nome_curso, materia_curso, descricao_curso, id_professor_curso FROM cursos;";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      ?><div class="curso">
                            <div><?=$row['nome_curso']?></div>
                            <div><?=$row['materia_curso']?></div>
                            <div><?=$row['descricao_curso']?></div>
                            <a href="curso.php?nome_curso=<?=$row['nome_curso']?>&id_curso=<?=$row['id_curso']?>">Visitar</a>
                        </div><?php
                    }
                  } else {
                    echo "0 results";
                  }

            ?>
        </div>
        </div>
    </div>
    <script src="script/areaDeBusca.js"></script>  

</body>
</html>