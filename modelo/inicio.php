<?php session_start();//iniciamos una sesion 
include "Auth.php";//incluimos el Auth.php para obtener sus recursos

//recibimos los datos de nuestro formulario de iniciar.php
$correo = $_POST['correo'];
$contra = $_POST['contra'];

$Auth = new Auth(); //creamos una instancia de la clase Auth para poder acceder a los metodos 

if($Auth->iniciar($correo,$contra)){//recibimos los datos en nuestra funcion iniciar
    header("location:  ../contenido.php");//lo direccionamos a el contenido
} else{
    $mensaje = "No se pudo iniciar sesion";
    header("location:  ../iniciar.php?mensaje=".urlencode($mensaje));
}

?>