<?php
include 'conexionDB.php';

if (isset($_POST["btnRegistrarse"])) {
    $Nom=$_POST["txtNombre"];
    $Run=$_POST["txtRun"];
    $Fec=$_POST["txtFecha"];
    $Tel=$_POST["txtTelefono"];
    $Ema=$_POST["txtEmail"];
    $Pass=$_POST["txtPassword"];
    
    $sql="INSERT INTO pacientes(Nombre, Run, Fecha_Nacimiento, Telefono, Email, Password) VALUES(:nombre, :run, :fecha, :telefono, :email, :pass)";
  
    $resultado=$base->prepare($sql);
    
    $resultado->execute(array(":nombre"=>$Nom, ":run"=>$Run, ":fecha"=>$Fec, ":telefono"=>$Tel, ":email"=>$Ema, ":pass"=>$Pass));
    header("location:pacientes.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>REGISTRARSE</title>
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
            <a href="iniciarsesion.php">INICIAR SESION</a>
        </nav>
        <section>
            <fieldset class="registro">
            <legend>REGISTRARSE!</legend>
            <form name="frmRegistro" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
            <p>Su nombre: <input type="text" name="txtNombre" required="required"/></p> <br>
            <p>Su run: <input type="text" name="txtRun" required="required"/></p> <br>
            <p>Su fecha de nacimiento: <input type="date" name="txtFecha" required="required"/></p> <br>
            <p>Su telefono: <input type="number" name="txtTelefono" required="required"/></p> <br>
            <p>Su email: <input type="email" name="txtEmail" required="required"/></p> <br>
            <p>Su contraseña: <input type="password" name="txtPassword" required="required"/></p> <br>
            <p><input type="submit" name="btnRegistrarse" value="Registrarse" /></p>
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

    </body>
</html>