<?php

class sign_controller extends Controller
{

    public function registerform()
    {
        $this->view('sign/register');
    }

    public function register()
    {
        $this->model = $this->model('sign_model');

        $data = [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'age' => $_POST['age'],
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'confirmpassword' => $_POST['confirmpassword'],
            'firstnameError' => '',
            'lastnameError' => '',
            'ageError' => '',
            'usernameError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        if (empty($data['firstname'])) {
            $data['firstnameError'] = 'Please enter firstname.';
        }

        if (empty($data['lastname'])) {
            $data['lastnameError'] = 'Please enter lastname.';
        }
        if (empty($data['age'])) {
            $data['ageError'] = 'Please enter age.';
        }

        if (empty($data['username'])) {
            $data['usernameError'] = 'Please enter username.';
        }


        if (empty($data['password'])) {
            $data['passwordError'] = 'Please enter password.';
        }

        if (empty($data['confirmpassword'])) {
            $data['confirmPasswordError'] = 'Please confirm password.';
        } else {
            if ($data['password'] != $data['confirmpassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
            }
        }

        if (empty($data['firstnameError']) && empty($data['lastnameError']) && empty($data['ageError']) && empty($data['usernameError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {
            // echo "hello world";
            // return;
            $this->model->register($data);
            header('location:' . URL . '/sign_controller/loginform');
        } else {
            // echo "hello world else";
            // return;
            header('location:' . URL . '/sign_controller/registerform');
        }
    }

    public function loginform()
    {
        $this->view('sign/login');
    }

    public function login()
    {

        // if(isset($_POST['submit'])){

        $this->model = $this->model('sign_model');


        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'usernameError' => '',
            'passwordError' => ''
        ];

        if (empty($data['username'])) {
            $data['usernameError'] = 'Please enter a username';
        }

        if (empty($data['password'])) {
            $data['passwordError'] = 'Please enter a password';
        }


        if (empty($data['usernameError']) && empty($data['passwordError'])) {

            $loggedUser = $this->model->login($data['username'], $data['password']);
            // print_r($loggedUser);return;


            // echo"<pre>";
            // print_r($loggedUser);
            // return;

            $user = $loggedUser['user']->fetch_assoc();
            $admin = $loggedUser['admin']->fetch_assoc();

            if (empty($user) && empty($admin) || !empty($user) && !empty($admin)) {
                header('location:' . URL . '/sign_controller/loginform');
            } elseif (!empty($user)) {
                //   echo "hello world";
                //     return;

                $_SESSION['iduser'] = $user['id'];
                header('location:' . URL . '/user_controller/flights');
            } elseif (!empty($admin)) {

                $_SESSION['idadmin'] = $admin['id'];
                header('location:' . URL . '/admin_controller/flights');
            }
        } else {
            header('location:' . URL . '/sign_controller/loginform');
        }
        // if($loggedUser){

        //     $_SESSION['user_id'] = $loggedUser->id;
        //     $_SESSION['username'] = $loggedUser->username;
        //     $_SESSION['email'] = $loggedUser->email;
        //     // header('location:' . URLROOT . '/pages/login');
        // }else{
        //     $data['passwordError']='Incorect password or username.';
        //     $this->view('sign/login',$data);
        // }
    }

    public function logout()
    {
        unset($_SESSION['iduser']);
        unset($_SESSION['idadmin']);
        session_destroy();
        header('location:' . URL . ' /sign_controller/loginform');
    }
}
