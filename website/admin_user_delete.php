<?php
session_start();
include('config.php');


if (isset($_POST['user_delete_btn']))
{
    $uid = $_POST['user_id_delete'];
    // echo $uid;


    try {
        $auth->deleteUser($uid);
        $_SESSION['status'] = "User Account Deleted!"; //$e->getMessage();
        header("Location: users_list.php ");
        exit();
        // echo $uid;

    } catch (Exception $e) 
    {
        // echo $uid;
        $_SESSION['status'] = "No Such ID Found"; //$e->getMessage();
        header("Location: users_list.php ");
        exit();
    }

    


}


