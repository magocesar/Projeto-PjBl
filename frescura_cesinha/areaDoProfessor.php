<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>uploadArea</title>
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
                        <input type="button" value="Área do Professor" class="sideButton" onclick='upload()'>
                    </td>
                </tr>
            </table>
        </div>
        <div class='header'>
          <h1>Novos cursos</h1>
          <hr>
        </div>
        <form action="" method='POST' class='new'>
          <div class='main'>
          Titulo:
          <input type="text" id='title' placeholder='Adicione um titulo'> <br><br>
          Arquivo: 
          <input type="file" name="file" id="file"> <br><br>
          <textarea name="description" id="description" cols="20" rows="10" placeholder='Insira uma descricao'></textarea><br><br>
          <input type="submit" value="Criar curso">

        </form>
          </div>
</body>
</html>