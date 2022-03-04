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

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        // ?:::::::::::::::::::::::::::::::::::::::::::::::::
        $departure = $_POST['departure'];
        $destination = $_POST['departure'];
        $directiontype = $_POST['directiontype'];
        $departdate = $_POST['departdate'];
        $returndate = $_POST['returndate'];
        // ?:::::::::::::::::::::::::::::::::::::::::::::::::
        $id_flight = $_POST['idflight'];
        $id_user = $_SESSION['iduser'];
        $i = 0;

        $seatstoremove = count($firstname);

        if ($directiontype == "one-way") {

            foreach ($firstname as $fname) {
                $this->model->addbooking($fname, $lastname[$i], $age[$i], $departure, $destination, $departdate, $id_flight, $id_user);
                $i++;
            }
            $this->model->deleteseats($seatstoremove, $id_flight);
        } elseif ($directiontype == "round-trip") {

            foreach ($firstname as $fname) {
                $this->model->addbookingtwice($fname, $lastname[$i], $age[$i], $departure, $destination, $departdate, $returndate, $id_flight, $id_user);
                $i++;
            }
            $this->model->deleteseats($seatstoremove, $id_flight);
            
        }


        header('location:' . URL . '/user_controller/flights');
    }

    public function bookings()
    {
        $this->model = $this->model('user_model');
        $data = $this->model->getbookings($_SESSION['iduser']);
        $this->view('user/show_bookings', ['show_bookings_user' => $data]);
    }
}
