<?php
    session_start();

    if(!isset($_SESSION['nome'])){
       header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>uploadArea</title>
  <link rel="stylesheet" href="css/areaDoProfessor.css">
  <script src="areaDoProfessor.js"></script>
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
        <div class='header'>
          <h1>Novos cursos</h1>
          <hr>
        </div>
        <div class="main">
            <form action="" id="form">
                <table class="addCursoTable">
                    <tr>
                        <td class="tableTdName">Titulo:</td>
                        <td><input type="text" placeholder="Digite um Titulo" name="titulo" required></td>
                    </tr>
                    <tr>
                        <td class="tableTdName">Matéria:</td>
                        <td><input type="text" placeholder="Digite a Matéria" name="materia" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tableTdName">Descrição</td>
                    </tr>
                    <tr>
                        <td colspan="2"><textarea name="descricao" cols="30" rows="10" required placeholder="Digite uma descrição para o curso!"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="button" value="Apagar" onclick="reset()">
                            <input type="submit" value="Cadastrar Curso">
                        </td>
                    </tr>
                </table>
            </form>
        </div>






        </div>
</body>
</html>