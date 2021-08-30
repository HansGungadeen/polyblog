<?php
session_start();
include('config.php');


// register user
if (isset($_POST['register_btn'])) 
{
    $name = $_POST['fullname'];
    // $phone = "+230".$_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}


$userProperties = [
    'email' => $email,
    'emailVerified' => false,
    // 'phoneNumber' => $phone,
    'password' => $password,
    'displayName' => $name,
];

$createdUser = $auth->createUser($userProperties);

if ($createdUser) 
{
    $_SESSION['status'] = "User created Successfully";
    header("Location: login_user.php");
}
else 
{
    $_SESSION['status'] = "User Not Created ";
    header("Location: register_user.php");
}
