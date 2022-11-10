<?php
    include("conn.php");

    session_start();


    $id = $_SESSION['id'];
    $id_user = $_SESSION['id_user'];
    $password1 = $_POST['newPassword1'];
    $password2 = $_POST['newPassword2'];
    $login = $_POST['login'];
    $name = $_POST['name'];

    function verifyPassword($id, $id_user, $password1, $password2, $conn, $login, $name){
        if($password1 != $password2){
            ?><form action="editarPerfil.php" method="POST" id="form">
                <input type="hidden" value="As senhas devem ser Iguais!" name="msgServer">
            </form>
            <script>document.getElementById('form').submit()</script><?php
        }else{
            verifyLogin($id, $id_user, $password1, $conn, $login, $name);
        }
    }

    function verifyLogin($id, $id_user, $password, $conn, $login, $name){
        $sql = "SELECT id_professor FROM professores WHERE login_professor = '$login' UNION SELECT id_aluno FROM alunos WHERE login_aluno = '$login';";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            ?><form action="editarPerfil.php" method="POST" id="form">
                <input type="hidden" value="Esse Login já é Utilizado por outro usuário!" name="msgServer">
            </form>
            <script>document.getElementById('form').submit()</script><?php
        }else{
            updateLogin($id, $id_user, $password, $conn, $login, $name);
        }
    }

    function updateLogin($id, $id_user, $password, $conn, $login, $name){
        if($id == 'aluno'){
            $sql = "UPDATE alunos SET nome_aluno='$name', login_aluno='$login', senha_aluno='$password' WHERE id_aluno = $id_user;";
        }else if($id == 'professor'){
            $sql = "UPDATE professores SET nome_professor='$name', login_professor='$login', senha_professor='$password' WHERE id_professor = $id_user;";
        }

        if($conn->query($sql) === TRUE){
            $_SESSION['login'] = $login;
            $_SESSION['nome'] = $name;
            $_SESSION['id'] == $id;
            $_SESSION['id_user'] = $id_user;
            ?><form action="editarPerfil.php" method="POST" id="form">
                <input type="hidden" value="Dados Atualizados com Sucesso!" name="msgServer">
            </form>
            <script>document.getElementById('form').submit()</script><?php
        }else{
            ?><form action="editarPerfil.php" method="POST" id="form">
                <input type="hidden" value="Erro ao Atualizar os Dados" name="msgServer">
            </form>
            <script>document.getElementById('form').submit()</script><?php
        }
    }

    verifyPassword($id, $id_user, $password1, $password2, $conn, $login, $name);