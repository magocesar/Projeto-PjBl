<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

<div class="testbox">
  <h1>Cadastro</h1>

  <form action="/">
      <hr>
    <div class="accounttype">
      <input type="radio" value="None" id="radioOne" name="account" checked/>
      <label for="radioOne" class="radio" chec>Aluno</label>
      <input type="radio" value="None" id="radioTwo" name="account" />
      <label for="radioTwo" class="radio">Professor</label>
    </div>
  <hr>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="name" id="name" placeholder="Email" required/>
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="name" id="name" placeholder="Nome" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="name" id="name" placeholder="Senha" required/>
  <div class="gender">
    <input type="radio" value="None" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Masc</label>
    <input type="radio" value="None" id="female" name="gender" />
    <label for="female" class="radio">Fem</label>
   </div> 
   <a href="login.php" class="button">Cadastrar</a>
  </form>
</div>
  
</body>
</html>