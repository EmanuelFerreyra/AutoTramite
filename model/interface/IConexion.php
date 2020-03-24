<?php
namespace IConexion;


interface IConexion{

    public function onConexion();
    public function updateLocalhost($localhost);
    public function updateUser($user);
    public function updatePass($pass);
    public function updateDB($db);



}

?>