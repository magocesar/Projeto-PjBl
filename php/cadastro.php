<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/cadastro.css">
  <title>areaDeCadastro</title>
</head>
<body>
  <h1>Area de Cadastro</h1>
  <form action="" method='POST' id='form'>
    <div>
      Nome: <input type="text" id='nome' placeholder='Digite seu Nome' required><br><br>
      Email: <input type="text" id='email' placeholder='Digite seu Email' required><br><br>
      Data de Nascimento: <input type="text" id='data' placeholder='DD/MM/AAAA' required><br><br>
      Senha: <input type="password" id='senha' placeholder='Crie sua senha' required><br><br>
      Genero: <br>
      F  <input type="radio" name="genero" id="fem" value="fem" required> M  <input type="radio" name="genero" id="masc" value="masc" required><br>
      <input type="submit" value="Criar perfil" id='submit'>
    </div>
  </form>  



</body>
</html>