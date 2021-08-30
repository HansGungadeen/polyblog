<?php
session_start();
include('config.php');


if (isset($_POST['user_edit_update_btn']))
{
    $name = $_POST['displayName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $uid = $_POST['user_id'];

    $properties  = [
        'displayName' =>  $name,
        'email' =>  $email,
        'phoneNumber' => $phone,
    ];


    $updatedUser = $auth->updateUser($uid, $properties);

    if ($updatedUser) 
    {
        $_SESSION['status'] = "User Update Successfully";
        header("Location: user_edit.php?id=$uid");
    }
    else 
    {
        $_SESSION['status'] = "User Not Updated ";
        header("Location: user_edit.php?id=$uid");
    }

}