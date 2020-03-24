<?php
require 'controller/Constantes.php';
require 'controller/functions/Func_Index.php';


$dirIndex = VIEW.T_BLOG;
$dirError = VIEW.T_ERROR;
$dirVar = indexValidacion( $dirIndex );

indexReload( $dirVar, $dirIndex, $dirError );



?>