<?php
/*  
    Funcion para verificar si la Pagina Index no esta vacia..
    @return true | false
*/

function indexValidacion( $dir ){
    if( isset($dir) ){
        return true;
    }else{
        return false;
    }     
}




/*
    Funcion : debe pasarse por parametro un booleano. 
    @var = boolean;
    
*/

function indexReload( $var,$dirIndex, $dirError ){
    if( $var == true ){
        include $dirIndex;
    }else{
        include $dirError;
    }
}




?>