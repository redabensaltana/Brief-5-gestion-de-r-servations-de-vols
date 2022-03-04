<?php

require_once '../app/core/Connection.php';

class user_model extends Connection
{

    public function getflights()
    {
        $result = $this->connection()->query("SELECT * FROM flight;");
        return $result;
    }

    public function addbooking($firstname, $lastname, $age, $departure, $destination, $departdate, $id_flight, $id_user)
    {
        $this->connection()->query("INSERT INTO `booking` (`firstname`, `lastname`, `age`,`departure`,`destination`,`date`,`id_flight`, `id_user`) VALUES ('$firstname', '$lastname', '$age','$departure','$destination','$departdate', '$id_flight', '$id_user');");
    }

    public function addbookingtwice($firstname, $lastname, $age, $departure, $destination, $departdate, $returndate, $id_flight, $id_user)
    {
        $this->connection()->query("INSERT INTO `booking` (`firstname`, `lastname`, `age`,`departure`,`destination`,`date`,`id_flight`, `id_user`) VALUES ('$firstname', '$lastname', '$age','$departure','$destination','$departdate', '$id_flight', '$id_user');");
        $this->connection()->query("INSERT INTO `booking` (`firstname`, `lastname`, `age`,`departure`,`destination`,`date`,`id_flight`, `id_user`) VALUES ('$firstname', '$lastname', '$age','$destination','$departure','$returndate', '$id_flight', '$id_user');");
    }
    
    public function deleteseats($seatstoremove, $id_flight)
    {
        $this->connection()->query("UPDATE `flight` SET `seats` = seats - '$seatstoremove' WHERE `id` = '$id_flight';");
    }

    public function getbookings($id_user)
    {
        $result = $this->connection()->query("SELECT * FROM `booking` WHERE `id_user` = '$id_user';");
        // $result = $this->connection()->query("SELECT booking(*),flight.departure,flight.destination,flight.direction_type,flight.depart_date,flight.return_date JOIN flight on booking.id_user = '$id_user';");
        return $result;
    }

    public function deletebooking($id){
        $this->connection()->query("DELETE FROM `booking` WHERE `id` = '$id';");
    }
}
