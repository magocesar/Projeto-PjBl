
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Curso</title>
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
            <div class="infoPag"><h2>Novo Curso</h2></div>
                <form action="">
                    <table id="formNovoCurso">
                        <tr>
                            <td>
                                Nome do Curso **:
                            </td>
                            <td>
                                <input type="text" placeholder="Nome:" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Matéria do Curso **:
                            </td>
                            <td>
                                <input type="text" placeholder="Matéria" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Descrição do Curso **:
                            </td>
                            <td>
                                <textarea name="" id="" cols="30" rows="10" placeholder="Descrição" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                ** Campos Obrigatórios!
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Cadastrar Curso!" class="alignCenter">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="msgServer">Mensagem Servidor!</div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
</body>
</html>