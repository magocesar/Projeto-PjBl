
<?php

    if(!isset($_POST['msgServer'])){
        $msgError = '';
    }else{
        $msgError = $_POST['msgServer'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FrAcademy - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header>
        <div>
            <img src="imagens/logo_frAcademy.jpeg" alt="">
        </div>
        <div>
            <h1>FrAcademy</h1>
        </div>
    </header>

    <hr>

    <div class="container">
        <div class="box">
            <h3>Login</h3>
            <form action="#" class="form" method="POST" id="form">
                <table>
                    <tr>
                        <td>Login: </td>
                        <td><input type="text" placeholder="Digite o login" id="login"></td>
                    </tr>
                    <tr>
                        <td>Senha: </td>
                        <td><input type="password" placeholder="Digite a senha" id="senha"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="buttonsRow">
                            <input type="button" value="Apagar" onclick="btnApagar()">
                            <input type="button" value="Entrar" onclick="btnSubmit()">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="errorRow">
                            <div><?=$msgError?></div>
                            <div id="errorJs"></div>
                        </td>
                    </tr>
                </table>
            </form>
            <h4>Não Possui Login? <a href="cadastro.php">Cadastre-se Aqui</a></h4>
        </div>
    </div>

    <footer><div class="footerMsg"><h3>Trabalho BES - PjBl</h3></div></footer>

    <script src="script/login.js"></script>

</body>
</html>