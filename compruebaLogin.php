<?php


try{
    $base=new PDO('mysql:host=localhost; dbname=psicohelp', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $base->exec("SET CHARACTER SET utf8");
    
    $sql="SELECT * FROM psicologos WHERE Email = :email AND Password = :pass";
    
    $resultado = $base->prepare("$sql");
    
    $email=htmlentities(addslashes($_POST["txtEmail"]));
    $pass=htmlentities(addslashes($_POST["txtPassword"]));
    
    $resultado->bindValue(":email", $email);
    $resultado->bindValue(":pass", $pass);
    
    $resultado->execute();
    
    $num_registro=$resultado->rowCount();
    
    if ($num_registro !=0) {
        
        session_start();
        
        $_SESSION["psicologo"]=$_POST["txtEmail"];
        header("location:pacientes.php");
        
    }else{
        echo "Error: Usuario o contraseña incorrectos";
        header("iniciarSesion.php");
    }
    



    $base=new PDO('mysql:host=localhost; dbname=psicohelp', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $base->exec("SET CHARACTER SET utf8");
    
    $sql="SELECT * FROM pacientes WHERE Email = :email AND Password = :pass";
    
    $resultado = $base->prepare("$sql");
    
    $email=htmlentities(addslashes($_POST["txtEmail"]));
    $pass=htmlentities(addslashes($_POST["txtPassword"]));
    
    $resultado->bindValue(":email", $email);
    $resultado->bindValue(":pass", $pass);
    
    $resultado->execute();
    
    $num_registro=$resultado->rowCount();
    
    if ($num_registro !=0) {
        
        session_start();
        
        $_SESSION["paciente"]=$_POST["txtEmail"];
        header("location:tomarHora.php");
        
    }else{
        echo "Error: Usuario o contraseña incorrectos";
        header("iniciarSesion.php");
    }

    
    
    
    
} catch (Exception $e) {

    die('Error: '. $e->getMessage());
}

?>

