
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
<title>FrAcademy - Cadastro</title>
<link rel="stylesheet" href="css/cadastro.css">
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
        <h3>Crie sua Conta</h3>
        <form action="#" class="form" method="POST" id="form">
            <table>
                <tr>
                    <td class="inputEspec">Login: </td>
                    <td><input type="text" placeholder="Digite o login" id="login" required></td>
                </tr>
                <tr>
                    <td class="inputEspec"class="inputEspec">Data de Nascimento: </td>
                    <td><input type="date" id="date" required></td>
                </tr>
                <tr>
                    <td class="inputEspec">CPF (Não Obrigatório): </td>
                    <td class="date"><input type="text" placeholder="Digite o CPF" id="login"></td>
                </tr>
                <tr>
                    <td class="inputEspec">Senha: </td>
                    <td><input type="password" placeholder="Digite a senha" id="senha1" required></td>
                </tr>
                <tr>
                    <td class="inputEspec"class="inputEspec">Confirme a Senha: </td>
                    <td><input type="password" placeholder="Confirme a senha" id="senha2" required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="radio" name="option" checked>
                        Aluno
                        <input type="radio" name="option">
                        Professor
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="buttonsRow">
                        <input type="button" value="Apagar" onclick="btnApagar()">
                        <input type="submit" value="Cadastrar">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="errorRow">
                        <div><?=$msgError?></div>
                    </td>
                </tr>
            </table>
        </form>
        <h4><a href="login.php">Voltar ao Login</a></h4>
    </div>
</div>

<footer><div class="footerMsg"><h3>Trabalho BES - PjBl</h3></div></footer>

<script src="script/cadastro.js"></script>

</body>
</html>