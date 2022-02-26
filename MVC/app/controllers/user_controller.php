<?php

class user_controller extends Controller
{

    public function flights()
    {
        $this->model = $this->model('user_model');
        $data = $this->model->getflights();
        $this->view('user/show_flights', ['show_flights_user' => $data]);
    }

    public function booking()
    {
        $this->view('user/booking');
    }

    public function booking_db()
    {
        $this->model = $this->model('user_model');
        // $data = $this->model->getflights();

        //          echo"<pre>";
        //         print_r($data->fetch_all());
        //         return;

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $id_flight = $_POST['idflight'];
        $id_user = $_SESSION['iduser'];
        // $seats = $data[''];
        $i=0;

        $seatstoremove = count($firstname);

        foreach ($firstname as $fname) {
            $this->model->addbooking($fname,$lastname[$i],$age[$i],$id_flight,$id_user);
            $i++;
        }

        $this->model->deleteseats($seatstoremove,$id_flight);

        header('location:' . URL . '/user_controller/flights');
    }
}
