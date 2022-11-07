<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <link rel="stylesheet" href="css/editarPerfil.css">
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
                        <input type="button" value="Área do Professor" class="sideButton">
                    </td>
                </tr>
            </table>
        </div>
        <div class="header">
            <h1>Editar Perfil</h1>
            <hr>
        </div>
        <form action="" method='POST' class='formNewProfile'>
        <div class="main">
            Alterar Login: 
            <input type="text" class='newName' placeholder='Digite um novo login'> <br> <br>
            Alterar senha: 
            <input type="password" name="newPassword" id="newPassword" placeholder='Digite a nova senha'> <br> <br>
            Confirme sua senha: 
            <input type="password" name="newPassword" id="newPassword1" placeholder='Confirme sua senha: '> <br> <br>
            <input type="submit" value="Alterar" id='btnSubmit'>
        </div>
        </form>
        </div>
    </div>
    <script src="script/homepage.js"></script>
</body>
</html>