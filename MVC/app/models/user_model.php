<?php

require_once '../app/core/Connection.php';

class user_model extends Connection
{

    public function getflights()
    {
        $result = $this->connection()->query("SELECT * FROM flight;");
        return $result;
    }

    public function addbooking($firstname, $lastname, $age, $id_flight, $id_user)
    {
        $this->connection()->query("INSERT INTO `booking` (`firstname`, `lastname`, `age`, `id_flight`, `id_user`) VALUES ('$firstname', '$lastname', '$age', '$id_flight', '$id_user');");
    }

    // public function addbookingtwice()
    // {
    // }
    public function deleteseats($seatstoremove, $id_flight)
    {
        $this->connection()->query("UPDATE `flight` SET `seats` = seats - '$seatstoremove' WHERE `id` = '$id_flight';");
    }

    public function getbookings($id_user)
    {
        $result = $this->connection()->query("SELECT * FROM `booking` WHERE `id_user` = '$id_user';");
        // $result = $this->connection()->query("SELECT booking(*),flight. = '$id_user';");
        return $result;
    }
}
