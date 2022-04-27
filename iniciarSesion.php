<html>
    <head>
        <meta charset="UTF-8">
        <title>INICIAR SESION</title>
        <link href="Style/css.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="Img/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header>
            <img src="Img/psicohelplogo.PNG" alt="PSICOHELP"/>
        </header>
        <nav>
            <a href="index.php">INICIO</a> |
            <a href="psicologos.php">PSICOLOGOS</a> |
            <a href="guiaAyuda.php">GUIA DE AYUDA</a> |
            <a href="registrarse.php">REGISTRARSE</a> |
            <a href="iniciarSesion.php">INICIAR SESION</a>
        </nav>
        <section>
            <fieldset class="registro">
            <legend>INICIAR SESION!</legend>
            <form  name="frmLogin" method="POST" action="compruebaLogin.php" > 
            <p>Su email: <input type="email" name="txtEmail" id="txtEmail" required="required"/></p> <br>
            <p>Su contraseña: <input type="password" name="txtPassword" id="txtPassword" required="required"/></p> <br>
            <p><input type="submit" name="btnLogin"/></p>
            </form>
            </fieldset>
        </section>
        <footer>
            <a href="https://www.facebook.com" target="_blank"><img src="Img/1000px-F_icon.svg.png" alt="FACEBOOK" width="50" height="50" onclick=""/></a>
            <a href="https://www.twitter.com" target="_blank"><img src="Img/twitter-2012-negative-logo-5C6C1F1521-seeklogo.com.png" alt="TWITTER" width="50" height="50"/></a>
            <br>
            <a>&COPY;PsicoHelp</a>
            <br>
            <a>Soporte o Contacto : psicohelp@contacto.com</a>
        </footer>
        <?php
        // put your code here
        ?>
    </body>
</html>