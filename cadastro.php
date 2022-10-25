<?php

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
    <title>Tela de cadastro</title>
    <link rel="stylesheet" href="css/cadastroAluno.css">
</head>
<body>
    <h1>Crie sua Conta!</h1>
    <form action="" method="POST" id="form">
        <table>
            <tr>
                <td class="idInput">Digite o Login: </td>
                <td>
                    <input type="text" name="login" id="login" >
                </td>
            </tr>
            <tr>
                <td class="idInput">Digite a Senha: </td>
                <td>
                    <input type="password" name="password" id="password1" >
                </td>
            </tr>
            <tr>
                <td class="idInput">Confirme a Senha: </td>
                <td>
                    <input type="password" id="password2" >
                </td>
            </tr>
            <tr>
                <td colspan="3" class="buttonsRow">
                    <input type="button" value="Voltar" onclick="btnVoltar()">
                    <input type="button" value="Apagar" onclick="btnApagar()">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="buttonsRow">
                    <input type="button" value="Realizar Cadastro" onclick="btnCadastrar()">
                </td>
            </tr>
            <tr>
                <td colspan="3" class="msg">
                    <?=$msgServer?>
                    <div id="errorJs"></div>
                </td>
            </tr>
        </table>
    </form>
    <script>
        
        function btnVoltar(){
            window.location.assign('login.php')
        }

        function btnApagar(){
            document.getElementById('login').value = document.getElementById('password1').value = document.getElementById('password2').value = ''
        }

        function btnCadastrar(){
            if(verificar()){
                document.getElementById('form').submit()
            }
        }

        function verificar(){

            const login = document.getElementById('login').value
            const password1 = document.getElementById('password1').value
            const password2 = document.getElementById('password2').value
            const msg = document.getElementById('errorJs')

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
            if (password1.length > 32 || password2.length > 32){
                msg.innerHTML = 'O campo "Senha" não pode conter mais do que 32 caracteres.'
                password1.focus()
                password2.focus()
                return false
            }if (password1 != password2){
                msg.innerHTML = "As senhas devem ser iguais."
                password1.focus()
                password2.focus()
                return false
            }
            if (password1 == '' || password2 == ''){
                msg.innerHTML = 'Os campos "Senha" não pode estar vazios.'
                password1.focus()
                password2.focus()
                return false
            }

            msg.innerHTML = ''

            return true
        }
    </script>
</body>
</html>