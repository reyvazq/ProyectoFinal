<?php
include "conexion.php";
class Auth extends conexion{
    public function registrar($nombre,$tel,$correo,$contra){
        $conexion = parent::conectar();
        $nivel = "cliente";
        $sql = "INSERT INTO cliente (nom_cliente, tel_cliente, correo_cliente, password, nivel)
        VALUES (?,?,?,?,?)";
        $query = $conexion->prepare($sql);
        $query->bind_param('sssss', $nombre,$tel,$correo,$contra,$nivel);
        return $query->execute();
    }

    public function iniciar($correo, $contra){
        $conexion = parent::conectar();
        $contraexi = "";
        $lvl = "";
        $sql = "SELECT * FROM cliente 
        WHERE correo_cliente = '$correo'";
        $res = mysqli_query($conexion,$sql);
        if (mysqli_num_rows($res) > 0) {
            $contraexi = mysqli_fetch_array($res); 
            $contraexi = $contraexi['password'];           

            if (password_verify($contra, $contraexi)) {
                
                $_SESSION['correo_cliente'] = $correo;
                return true;
            }
        
             else {
                return false;
            }
        } else {
            return false;
        }
    }
}?>