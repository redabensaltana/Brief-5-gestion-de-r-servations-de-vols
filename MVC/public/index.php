<?php
session_start();
define('URL' , 'http://localhost/MVC/public');
require_once '../app/init.php';
$app = new App;


//         echo"<pre>";
//         print_r($_POST);
//         print_r($_SESSION);
//         return;