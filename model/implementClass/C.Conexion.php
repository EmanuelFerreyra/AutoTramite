<?php
namespace Conexion;
use IConexion\IConexion as IConex;

require 'model/interface/IConexion.php';

class Conexion implements IConex{

    private $conn;
    private $local;
    private $user;
    private $pass;
    private $db;

    function __construct(){
        $this->local = "localhost";
        $this->user  = "root";
        $this->pass  = "";
        $this->db = "AutoTramite";
    }

    /* 
        Conexion a la Base de Datos Mysqli
    */
    public function onConexion(){
        $Local = $this->local;
        $User =  $this->user;
        $Pass =  $this->pass;
        $Db =    $this->db;


        $conn = $this->conn = mysqli_connect( $Local,$User,$Pass,$Db );    
        return $conn;
    }
   
    
    /*
     Metodo para Cerrar la Conexion Mysqli.
    */
    public function closeConexion($conn){
        mysqli_close($conn);
    }


    /*
    Verificacomos la Conexion si esta Activa;
    le pasamos la @conn - que devuelve la conexion.
    */
    public function validarConexion($conn){
        if( !empty($conn) ){
            print 'Exito en la Conexion';
        }else{
            print 'Problemas en la Conexion';
        }
    }

    /*
    Metodo para modificar los datos: 
    Localhost,User,Pass,Data Base por defecto
    */
    
    public function updateLocalhost($localhost){
        return $this->local = $localhost;
    }
    public function updateUser($user){
        return $this->user = $user;
    }
    public function updatePass($pass){
        return $this->pass = $pass;
    }
    public function updateDB($db){
        return $this->db = $db;
    }


}


?>