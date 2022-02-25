<?php

class user_controller extends Controller {

    public function flights(){
        $this->model = $this->model('user_model');
        $data = $this->model->getflights();
        $this->view('user/show_flights',['show_flights_user'=>$data]);
    }

    public function booking(){
        $this->view('user/booking');
    }
    public function booking_db(){
        $this->view('user/booking');
    }

}