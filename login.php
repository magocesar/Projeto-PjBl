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
    <h1>Bem Vindo ao FrAcademy</h1>
    <form action="" id="form" method="POST">
        <table>
            <tr>
                <td>Login:</td>
                <td><input type="text" id="login" name="login"></td>
            </tr>
            <tr>
                <td>Senha:</td>
                <td><input type="password" id="password" name="senha"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" value="Apagar" onclick="btnApagar()">
                    <input type="button" value="Entrar" onclick="btnSubmit()">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" value="Cadastrar" onclick="btnCadastrar()">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?=$msgServer?>
                    <div id="errorJs"></div>
                </td>
            </tr>
        </table>
    </form>
    <script>
        const login = document.getElementById('login').value
        const password = document.getElementById('password').value
        const msg = document.getElementById('errorJs')

        function btnApagar(){
            document.getElementById('login').value = document.getElementById('password').value = ''
        }

        function btnCadastrar(){
            window.location.assign('cadastro.php')
        }

        function btnSubmit(){
            if(verificar()){
                document.getElementById('form').submit()
            }
        }

        function verificar(){
            const login = document.getElementById('login').value
            const password = document.getElementById('password').value

            if (login.length > 32 ){
                msg.innerHTML = 'O campo "Login" não pode conter mais do que 32 caracteres.'
                login.focus()
                return false
            }

            if (login == ''){
                msg.innerHTML = 'O Campo "Login" está vazio.'
                login.focus()
                return false
            }

            if (password.length > 32){
                msg.innerHTML = 'O campo "Senha" não pode conter mais do que 32 caracteres.'
                password.focus()
                return false
            }

            if (password == ''){
                msg.innerHTML = 'O campo "Senha" não podem estar vazio.'
                password.focus()
                return false
            }

            msg.innerHTML = ''
            return true

        }
    </script>
</body>
</html>