<?php
    include("conn.php");

    $login = $_POST['login'];

    $nome = $_POST['nome'];
    
    $senha1 = $_POST['senha1'];

    $senha2 = $_POST['senha2'];

    $type = $_POST['option'];

    function verificarSenha($login, $nome, $conn, $type, $senha1, $senha2){
        if($senha1 != $senha2){
            ?><form action="cadastro.php" id="form" method="POST"><input type="hidden" value="As senhas devem ser iguais!" name="msgServer"></form><script>document.getElementById('form').submit()</script><?php
        }else{
            verificarRepetidos($login, $nome, $conn, $type, $senha1);
        }
    }

    function verificarRepetidos($login, $nome, $conn, $type, $senha1){
        $sql = "SELECT login_aluno FROM alunos WHERE login_aluno = '$login' UNION SELECT login_professor FROM professores WHERE login_professor = '$login';";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            ?><form action="cadastro.php" id="form" method="POST"><input type="hidden" value="Esse Login já é utilizado por outro usuário!" name="msgServer"></form><script>document.getElementById('form').submit()</script><?php
        }else{
            Cadastro($login, $nome, $senha1, $conn, $type);
        }
    }

    function CadastroAluno($login, $nome, $senha, $conn){
        $sql = "INSERT INTO alunos (login_aluno, nome_aluno, senha_aluno) VALUES
        ('$login', '$nome', '$senha');";
        if($conn->query($sql) === TRUE){
            ?><form action="login.php" id="form" method="POST"><input type="hidden" value="Cadastro Realizado com Sucesso" name="msgServer"></form><script>document.getElementById('form').submit()</script><?php
        }else{
            echo "Error". $conn->error;
        }
    }

    function CadastroProfessor($login, $nome, $senha, $conn){
        $sql = "INSERT INTO professores (login_professor, nome_professor, senha_professor) VALUES
        ('$login', '$nome', '$senha');";
        if($conn->query($sql) === TRUE){
            ?><form action="login.php" id="form" method="POST"><input type="hidden" value="Cadastro Realizado com Sucesso" name="msgCadastro"></form><script>document.getElementById('form').submit()</script><?php
        }else{
            echo "Error". $conn->error;
        }
    }


    function Cadastro($login, $nome, $senha, $conn, $type){
        if($type == 'aluno'){
            CadastroAluno($login, $nome, $senha, $conn);
        }else if($type == 'professor'){
            CadastroProfessor($login, $nome, $senha, $conn);
        }
    }

    verificarSenha($login, $nome, $conn, $type, $senha1, $senha2)
?>