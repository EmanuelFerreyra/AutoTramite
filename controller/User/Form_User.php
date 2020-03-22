<?php
include '../Rout_Controller.php';
use user\User;



$userName = $_POST['user'];
$userPass = $_POST['pass'];

/*Object Usuario*/
$Usuario = new User($userName,$userPass);


$sendToURL = "../../view/template/Init.php";
$dir = "../../Index.php";



$validationUser = validarDatosUser( $Usuario->nameUser(), $Usuario->passUser());
$exitUrl = exitFormUser( $sendToURL,$Usuario->nameUser(),$Usuario->passUser());
returnAddressDataIncomplet( $validationUser,$dir,$exitUrl );







?>