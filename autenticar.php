<?php
//Incluimos el documento conexion.php
    include "conexion.php";
//Consultamos en la BD lo enviado por el formulario de login
    $consulta= 'SELECT * FROM administrador WHERE usuario = "'.$_POST['usuario'].'";';
//Lo guardamos en resultado
    $resultado= mysqli_query($conexion,$consulta);
//Organizamos la informacion en un arreglo llamado registro
    $registro= mysqli_fetch_array($resultado);

//Si la contraseña coincide iniciamos la session y guardamos en ella el nombre del ususario     
    if($registro['pass']== $_POST['pass']){
        session_start();
        $_SESSION['usuario']=$registro['usuario'];
//Si el ususario marco la casilla de "recordarme", creamos una cookie con el nombre de usuario
        if($_POST['check'] == 'yes'){
            setcookie("_coockie",$registro['usuario'],time() + 1000000);
        }
        //Redireccionamos al inicio
        header("Location: main.php");
    }
    
    else{
    //Si la contraseña no coincide los mandamos de regreso al login y mandamos el error=1
    //El error=1 es "Usuario o contraseña incorrecta"
        header("Location:log.php?error=1");
        
    }
?>