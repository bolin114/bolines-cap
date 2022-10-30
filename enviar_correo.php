<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Carter+One&family=Fugaz+One&family=Handlee&family=Montserrat+Alternates:wght@300&family=Special+Elite&family=Staatliches&family=Titan+One&family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style_enviar_correo.css">
    <link rel="shortcut icon" href="img_go/LOGO.png">
    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <style type="text/css"> 
        a { text-decoration: none; 
            color: black;} 
        </style> 
    <title>Enviar Correo</title>
</head>
<body>
    <header class="header">
        <a href="index.html">
            <img class="header__logo" src="img_go/LOGO.png" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace" href="index.html">Tienda</a>
        <a class="navegacion__enlace" href="nosotros.html">Nosotros</a>
        <a class="navegacion__enlace" href="contacto.html">Contacto</a>
        <a class="navegacion__enlace navegacion__enlace--activo" href="enviar_correo.html">Enviar Correo</a>
    </nav>
    <form method="post">
        <input type="text" placeholder="name" name="name" required>
        <input type="email" placeholder="email" name="email" required>
        <input type="text" placeholder="asunto" name="asunto" required>
        <textarea placeholder="mensaje" name="msg"></textarea>
        <input class="submit" type="submit" name="enviar">
    </form>
    <?php
    include("correo.php");
    ?>
    <footer class="footer_con">
        <p class="footer__texto_con">- Bolin's-Cap -</p>
    </footer>
</body>
</html>