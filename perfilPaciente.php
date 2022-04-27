<?php
      session_start();
      
      if (!isset($_SESSION[paciente])) {
          header("location:index.php");
       }else{
           
       }
       
       
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TOMA DE HORA DE ATENCIÓN</title>
        <link href="Style/css.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="Img/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header>
            <img src="Img/psicohelplogo.PNG" alt="PSICOHELP"/>
        </header>
        <nav>
          
          
            <a href="tomarHora.php">HORAS DE ATENCIÓN</a> |
            <a href="perfilPaciente.php">PERFIL</a> |
            <a href="cerrarSesion.php">CERRAR SESIÓN</a>
        </nav>
        <section>
   <fieldset class="registro">
            <legend>MODIFICAR PERFIL!</legend>
            <form name="frmModPa" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
            <p>Su nombre: <input type="text" name="txtNombre" required="required"/></p> <br>
            <p>Su run: <input type="text" name="txtRun" required="required"/></p> <br>
            <p>Su fecha de nacimiento: <input type="date" name="txtFecha" required="required"/></p> <br>
            <p>Su telefono: <input type="number" name="txtTelefono" required="required"/></p> <br>
            <p>Su email: <input type="email" name="txtEmail" required="required"/></p> <br>
            <p>Su contraseña: <input type="password" name="txtPassword" required="required"/></p> <br>
            <p><input type="submit" value="Modificar" /></p>
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