<?php
    session_start();

    if(!isset($_SESSION['nome'])){
       header("Location: login.php");
    }

    if(!isset($_POST['msgServer'])){
        $msgServer = '';
    }else{
        $msgServer = $_POST['msgServer'];
    }



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
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
            <h1>Editar Perfil</h1>
            <hr>
        </div>
        <form action="editar_perfil_php.php" method='POST' class='formNewProfile'>
        <div class="main">
            Alterar Nome: 
            <input type="text" placeholder="Digite um novo Nome!" name="name">
            Alterar Login:
            <input type="text" class='newName' placeholder='Digite um novo login'required name="login"> <br> <br>
            Alterar senha: 
            <input type="password" name="newPassword1" id="newPassword" placeholder='Digite a nova senha'required> <br> <br>
            Confirme sua senha: 
            <input type="password" name="newPassword2" id="newPassword1" placeholder='Confirme sua senha: ' required> <br> <br>
            <input type="hidden" name="id" value="<?=$_SESSION['id']?>">
            <input type="submit" value="Alterar" id='btnSubmit'>
            <div><?=$msgServer?></div>
        </div>
        </form>
        </div>
    </div>
    <script src="script/homepage.js"></script>
</body>
</html>