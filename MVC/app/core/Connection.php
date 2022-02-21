<?php

class Connection{
    private $servername ;
    private $username;
    private $password;
    private $dbname;

    protected function connection(){
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->dbname="flygoo.com";
            $conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname); 
            return $conn; 
    }
}