<?php
$username = $_POST['user_name'];

$password = $_POST['user_password'];

$email = $_POST['user_email'];

if(empty($username)) {

    $name_error = 'Please Enter Your First Name';
} elseif(strlen($username) < 2) {
    $name_error = "Name can't be less than 2";
}
if(empty($password)) {

    $password_error = 'Please Enter Your Password';
} elseif(strlen($password) < 5) {
    $password_error = "Password can't be less than 5";
}

if(empty($email)) {

    $email_error = 'Please Enter Your E-Mail';
} elseif (!preg_match("/^[a-zA-Z ]*$/",$email)) {
    $email_error = "Your Email Must Agree Email Form Standarts";
}
include('index.php');


?>