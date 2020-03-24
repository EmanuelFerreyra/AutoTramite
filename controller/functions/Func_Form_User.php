<?php

/*Funciones para Validar el Login del Usuario*/


/*
Valida que los datos no esten vacios
funcion Retorna true | false
*/

function validarDatosUser( $nombre, $pass ){
    if( !empty($nombre) ){
        if( !empty($pass) ){
            return true;
        }
    }else{
        return false;
    }
};



/*
Funcion si dependiendo del caso:
truen : continua con el programa.
false: retorna a la dir.. de donde provino.
*/


function returnAddressDataIncomplet( $var,$dir,$exit ){
    if( $var == false ){
        //$dir = tiene que se igual a la direccion de Login.php
        header("location:".$dir);
    }else{
        $exit;
    }

};




/*Funcion modifica los caracteres  a Miniscula*/

function ModifMiniNombreUser( $nameUser ){
    return strtolower($nameUser);
};
/*Funcion para encripta el Password*/
function ModifMiniPassUser( $passUser ){
    return md5($passUser);
}


/*Funcion que retornara a la dir.. URL  donde se encuentra la Pagina de Inicio*/
function exitFormUser( $sendToURL,$name,$pass){

    $nombre = ModifMiniNombreUser( $name );
    $clave = ModifMiniPassUser( $pass );

    header("location:".$sendToURL."?nombre=".$nombre."&clave=".$clave);

}
?>