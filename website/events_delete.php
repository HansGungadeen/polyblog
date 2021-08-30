<?php
session_start();
include('config.php');

if (isset($_POST['event_delete']))
{
    $id = $_POST['id_key'];

    $ref_table = "events/".$id;

    $deleteData = $database->getReference($ref_table)->remove();

    if($deleteData)
    {
        $_SESSION['status'] = "Event Deleted Successfully";
        header("Location: event_admin.php");
    }
    else {
        $_SESSION['status'] = "Event Not Deleted ";
        header("Location: event_admin.php");
    }
}