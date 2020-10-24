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


        /**
         * @param mixed $userName
         */
        public function setUserName($userName)
        {
            $this->userName = $userName;
        }

        /**
         * @param mixed $userPass
         */
        public function setUserPass($userPass)
        {
            $this->userPass = $userPass;
        }

        /**
         * @return mixed
         */
        public function getUserName()
        {
            return $this->userName;
        }

        /**
         * @return mixed
         */
        public function getUserPass()
        {
            return $this->userPass;
        }

        public function data(){
            print 'data';
        }
}




