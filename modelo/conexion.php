<?php

class conexion {//conectamos la BD
    public $ser = 'localhost';
    public $usu = 'root';
    public $contra = '';
    public $db = 'abarrotes';
    public $port = 3306;

    public function conectar(){
        return mysqli_connect(
           $this->ser,
           $this->usu,
           $this->contra,
           $this->db,
           $this->port
        );
    }
}
?>