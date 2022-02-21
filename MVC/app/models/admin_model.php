<?php

    require_once '../app/core/Connection.php';

class admin_model extends Connection{

    public function getflights(){
        $sql = "SELECT * FROM flight;";
        $result = $this->connection()->query($sql);
        return $result;
    }

    public function insertflight($departure,$destination,$direction_type,$depart_date,$return_date,$seats,$price){
        $sql = "INSERT INTO flight (departure, destination, direction_type, depart_date, return_date,seats,price) VALUES ('$departure','$destination','$direction_type','$depart_date','$return_date','$seats','$price');";
        $this->connection()->query($sql);
    }

    public function editflight($departure,$destination,$direction_type,$depart_date,$return_date,$seats,$price){
        $sql = "UPDATE flight SET departure ='$departure' , destination='$destination' , direction_type= '$direction_type' , depart_date='$depart_date' , return_date='$return_date' , seats='$seats' , price='$price' WHERE id = '$id' ;";
        $this->connection()->query($sql);
    }
    
    public function deleteflight($id){
        $sql = "DELETE FROM flight WHERE id='$id';";
        $this->connection()->query($sql);
    }
    
}