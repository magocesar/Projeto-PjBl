<?php
    include("conn.php");

    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $type = $_POST['type'];

    function verificarTipo($login, $senha, $type, $conn){
        if($type == 'aluno'){
            verificarAluno($login, $senha, $conn);
        }else if($type == 'professor'){
            verificarProfessor($login, $senha, $conn);
        }
    }

    function verificarAluno($login, $senha, $conn){
        
        $sql = "SELECT nome_aluno, login_aluno, senha_aluno FROM alunos WHERE login_aluno = '$login' AND senha_aluno = '$senha';";
        $result = $conn->query($sql);

        if($result->num_rows == 0){
            ?><form action="login.php" method="POST" id="form"><input type="hidden" value="Login ou Senha Inválidos!" name="msgServer"></form><script>document.getElementById('form').submit()</script><?php
        }else{
            $row = $result->fetch_assoc();
            $nome = $row['nome_aluno'];
            logar($login, $nome);
        }
    }


    function verificarProfessor($login, $senha, $conn){
        $sql = "SELECT nome_professor, login_professor, senha_professor FROM professores WHERE login_professor = '$login' AND senha_professor = '$senha';";
        $result = $conn->query($sql);

        if($result->num_rows == 0){
            ?><form action="login.php" method="POST" id="form"><input type="hidden" value="Login ou Senha Inválidos!" name="msgServer"></form><script>document.getElementById('form').submit()</script><?php
        }else{
            $row = $result->fetch_assoc();
            $nome = $row['nome_professor'];
            logar($login, $nome);
        }
    }



    function logar($login, $nome){
        echo $login;
        echo $nome;
    }

    verificarTipo($login, $senha, $type, $conn);


?>