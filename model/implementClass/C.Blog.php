<?php
namespace Blog;
use IBlog\IBlog;

require_once 'model/interface/IBlog.php';

class Blog implements IBlog
{

    private $conn = null ;
    private $id;
    public  $Tema;
    public  $Descrip;
    public  $Fecha;
    public  $Contenido;
    public  $Img;

    /*
    __construct($conn); Fundamental pasarle por parametro la Conexion a la BS.
    */
    function __construct( $conn )
    {
        
        //Pasamos por parametro la conexion a la Base de Datos:
        //Esta proviene de un Object Conexion->onConexion();
        //que retorna la conexion ya validad y activa
    
        $this->conn =  $conn;
    
    }



    /*
     Metodo que mostrara todos los Id 
    */

    public function allIdBlog(){

        $br = "<br>"; //salto de linea;
        $conn = $this->conn;

        $sql = "SELECT * FROM Blog";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                // print "<b>id:</b>" . $row["idBlog"].$br; 
                print "<b>Tema:</b> ".$row["temaBlog"] .$br;
                print  "<b>Descripcion:</b> ".$row["descripBlog"]. $br;
                print "<b>Web:</b> ".$row["nombreWebBlog"]. $br;
                print "<b>Contenido:</b> ".$row["contenidoBlog"]. $br;
                print '<img src="'.$row["img"].'" alt="'.$row["img"].'">';

            }
        } else {
            print "No Existen Datos";
        }
    }





    /* 
        Retornamos Datos Especificos solicitados por el usuario
    */
    public function returnId(){
        //Return Id
    }    
    public function returnTema(){
        //Return Tema
    } 
    public function returnDescription(){
        //Return Descripcion del Tema
    }
    public function returFecha(){
        //Return Fecha en la que se publico el Tema
    }
    public function returnContenido(){
        //Return Contenido compleo del Tema
    }
    public function returnAddressImg(){

    }
    
}



?>