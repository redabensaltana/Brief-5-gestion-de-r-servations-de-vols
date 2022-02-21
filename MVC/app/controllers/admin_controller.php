<?php

class admin_controller extends Controller{

    public function flights(){
     $this->model = $this->model('admin_model');
     $data = $this->model->getflights();
     $this->view('admin/show_flights',['show_flights'=>$data]);
    }

    public function add_flight(){
    $this->view('admin/add_flight');
    }

    public function add_flight_db(){
        $this->departure = $_POST['departure'];
        $this->destination = $_POST['destination'];
        $this->type = $_POST['type'];
        $this->departdate = $_POST['departdate'];
        $this->returndate = $_POST['returndate'];
        $this->seats = $_POST['seats'];
        $this->price = $_POST['price'];

        $this->model = $this->model('admin_model');
        $this->model->insertflight($this->departure,$this->destination,$this->type,$this->departdate,$this->returndate,$this->seats,$this->price);

        // $this->flights();
        header('Location:http://localhost/MVC/public/admin_controller/flights');
    }

    public function edit_flight(){
    $this->view('admin/edit_flight',$_POST);
    }

    public function edit_flight_db(){
        $this->departure = $_POST['departure'];
        $this->destination = $_POST['destination'];
        $this->type = $_POST['type'];
        $this->departdate = $_POST['departdate'];
        $this->returndate = $_POST['returndate'];
        $this->seats = $_POST['seats'];
        $this->price = $_POST['price'];
        $this->id = $_POST['id'];

        $this->model = $this->model('admin_model');
        $this->model->editflight($this->departure,$this->destination,$this->type,$this->departdate,$this->returndate,$this->seats,$this->price,$this->id);

        // $this->flights();
        header('Location:http://localhost/MVC/public/admin_controller/flights');
    }

    public function delete_flight_db(){
        $this->id = $_POST['id'];

        $this->model = $this->model('admin_model');
        $this->model->deleteflight($this->id);

        header('Location:http://localhost/MVC/public/admin_controller/flights');
    }


}