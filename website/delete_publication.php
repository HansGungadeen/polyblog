<?php
session_start();
include('config.php');

if (isset($_POST['delete_btn']))
{
    $id = $_POST['id_key'];

    $ref_table = "publication/".$id;

    $deleteData = $database->getReference($ref_table)->remove();

    if($deleteData)
    {
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location: blog_admin.php");
    }
    else {
        $_SESSION['status'] = "Data Not Deleted ";
        header("Location: blog_admin.php");
    }
}