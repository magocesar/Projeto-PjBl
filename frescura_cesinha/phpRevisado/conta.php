
<?php
    session_start();

    if(!isset($_SESSION['nome'])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="geral.css">
</head>
<body>

    <header>
        <div class="titleFrAcademy"><h1>FrAcademy</h1></div>
    </header>

    <nav>
        <table>
            <tr>
                <td>
                    <a href="conta.php"><img src="imagens/default_user.png" class="sideImg"></a>
                    <br>
                    Minha Conta
                </td>
            </tr>
            <tr>
                <td>
                    <a href="homepage.php"><img src="imagens/pilha-de-tres-livros.png" class="sideImg"></a>
                    <br>
                    Meus Cursos
                </td>
            </tr>
            <tr>
                <td>
                    <a href="areaDeBusca.php"><img src="imagens/lupa.png" class="sideImg"></a>
                    <br>
                    Cursos Disponíveis
                </td>
            </tr>
        </table>
    </nav>

    <section>
        <div class="Main">
            <div class="infoPag"><h2>Minha Conta</h2></div>
                <div class="userContainer">
                    <div class="userDiv"><img src="imagens/default_user.png" class="userImg"></div>
                    <div class="userDiv"><h3><?=$_SESSION['nome']?></h3></div>
                    <div class="userDiv">
                        <input type="button" value="Sair da Sessão">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>