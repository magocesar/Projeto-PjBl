<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Side Menu Bar CSS</title>
        <link rel="stylesheet" href="homepage_a_p.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <header class="barra">  </header>

        <div class="sidebar">
            <header> FR Academy</header>
            <ul>
                <!-- tem que mudar os icones-->
                <li><a href="#"><i class="fas fa-stream"></i>Perfil</a></li>
                <li><a href="#"><i class="fas fa-stream"></i>Meus cursos</a></li>
                <li><a href="#"><i class="fas fa-stream"></i>Busca</a></li>
            </ul>
        </div>

        <div class="container">  
            <form id="contact" action="" method="post">
                <h3>Novo curso</h3>
                <fieldset>
                <input placeholder="Nome do curso" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                <input placeholder="Matéria" type="text" tabindex="3" required>
                </fieldset>
                <fieldset>
                <textarea placeholder="Descrição" tabindex="5" required></textarea>
                </fieldset>
                <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Salvar</button>
                </fieldset>
            </form>
 
  
</div>