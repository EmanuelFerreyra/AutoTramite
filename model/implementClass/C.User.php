<?php
namespace user;
include '../interface/IUser.php';
use InterfaceUser\IUser;


// class User implements IUser{
    class User {
    public $userName;    
    private $userPass;


    function __construct($nameUser, $passUser)
    {
        $this->userName = $nameUser;
        $this->userPass = $passUser;
    }
    
    public function nameUser(){
        return $this->userName; 
    }
    public function passUser(){
        return $this->userPass; 
    }
    public function idUser(){
        print "id: 1"; 
    }
}




