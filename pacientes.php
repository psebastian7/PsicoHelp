 <?php
      session_start();
      
      if (!isset($_SESSION[psicologo])) {
          header("location:index.php");
       }else{
           
       }
       
       
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PACIENTES</title>
        <link href="Style/css.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="Img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="Img/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <header>
            <img src="Img/psicohelplogo.PNG" alt="PSICOHELP"/>
        </header>
        <nav>
            <a href="pacientes.php">PACIENTES</a> |
            <a href="horaAtencion.php">HORAS DE ATENCION</a> |
            <a href="perfilPsico.php">PERFIL</a> |
            <a href="cerrarSesion.php">CERRAR SESIÓN</a>
        </nav>
        <section>
              <fieldset class="registro">
      <legend>ADMINISTRAR PACIENTES!</legend>
             
      <form action="index.php" method="post"> 
          <p>ID Paciente: <input type="number" name="txtNombre" required="required"/></p> <br>
            <p>Descripción: <input type="password" name="txtPassword" required="required"/></p> <br>
            <p><input type="submit" value="Modificar" />  <input type="submit" value="Eliminar"></p>
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