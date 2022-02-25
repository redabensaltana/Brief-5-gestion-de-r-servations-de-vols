<?php

    require_once '../app/core/Connection.php';
    
    class sign_model extends Connection{

    public function login($username,$password) {
        $user =  $this->connection()->query("SELECT * FROM user WHERE `username`= '$username' AND `password` ='$password' ;");
        $admin = $this->connection()->query("SELECT * FROM `admin` WHERE `adminname`= '$username' AND `password` ='$password' ;");
        $data=[
            'user'=>$user,
            'admin'=>$admin,
        ];
        
        return $data;

    }

    public function register($data){

        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $age = $data['age'];
        $username = $data['username'];
        $password = $data['password'];

        $this->connection()->query("INSERT INTO `user` (`firstname`, `lastname`, `age`, `username`, `password`) VALUES ('$firstname', '$lastname', '$age', '$username', '$password');");
    }

}