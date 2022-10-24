<?php

    /*
    Página Principal de Login do Projeto --> Necessária pois o projeto apresenta vários atores que possuem diferentes funções dentro do sistema
    */

    if(isset($_POST['msgServer'])){
        $msgServer = $_POST['msgServer'];
    }else{
        $msgServer = '';
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="script/login.js"></script>
</head>
<body>
    <h1>FrAcademy</h1>
    <form action="" id="form" method="POST">
        <table align='center'>
            <tr>
                <td>Login:</td>
                <td><input type="text" id="login" name="login"></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" id="senha" name="senha"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" value="Cadastrar" onclick="btnCadastrar()">
                    <input type="button" value="Entrar" onclick="btnSubmit()">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" value="Apagar" onclick="btnApagar()">
                </td>
            </tr>
            <tr>
                <td colspan="2" id="ErroJavascript">
                    Erro Javascript
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?=$msgServer?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>