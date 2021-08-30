<?php
session_start();
include('config.php');

if (isset($_POST['enabledisable_user_btn']))
{
    $disena = $_POST['account_disena'];
    $uid = $_POST['user_id'];

    // switch ($disena) {
    //     case "disable":
    //         $updatedUser = $auth->disableUser($uid);
    //         $msg = "User A/C Disabled";

    //     case "enable":
    //         $updatedUser = $auth->enableUser($uid);
    //         $msg = "User A/C Enabled";
        
    //     default:
    //         # code...
    //         break;
    // }

    if ($disena == "disable") 
    {
        //disable the account


        $updatedUser = $auth->disableUser($uid);
        $msg = "User A/C Disabled";

    }
    else 
    {
        //enable the account
        $updatedUser = $auth->enableUser($uid);
        $msg = "User A/C Enabled";
    }

    if ($updatedUser) 
    {
        $_SESSION['status'] = "$msg";
        header("Location: user_edit.php?id=$uid");
    }
    else 
    {
        $_SESSION['status'] = "Something Went Wrong ";
        header("Location: user_edit.php?id=$uid");
    }

}