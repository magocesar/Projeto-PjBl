<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/homepage.css">
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
                        <hr>
                    </td>
                </tr>
                <tr>
                  <td>
                    <a href="areaDeBusca.php"><img src="imagens/foto_livro1.png" alt="" class=sideImg></a> <br>
                    Busca
                  </td>
                </tr>
            </table>
        </div>
        <div class="header">
            <h1>Meus Cursos</h1>
            <hr>
        </div>
        <div class="main">
            <div class="curso" id="curso">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis pariatur eum veniam minus eos sequi, repellendus earum explicabo? Excepturi fugiat adipisci dolor ipsum explicabo laudantium eos provident consequatur eum quia.
            </div>
        </div>
        </div>
    </div>
    <script src="script/homepage.js"></script>
</body>
</html>