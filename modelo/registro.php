<?php
include "Auth.php";//incluimos la case Auth
//Recibe los datos del formulacio
$nombre =  $_POST['nombre'];
$tel = $_POST['tel'];
$contra = password_hash($_POST['contra'],PASSWORD_DEFAULT);
$correo = $_POST['correo'];

$Auth = new Auth();//creamos una instancia de la clase Auth

if($Auth->registrar($nombre,$tel,$correo,$contra)){//pasamos los parametros a la funcion registrar
header("location: ../iniciar.php");//y lo redireccionamos al iniciar.php ()
} else{
    echo"No se pudo registar";
}

?>