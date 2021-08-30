<?php
session_start();
include('config.php');


if (isset($_POST['publish_data'])) 
{
    //for publish
    $id = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $comment = $_POST['comment'];
    
    //data to be pushed
    $postData = [
        'name' => $name,
        'course' => $course,
        'comment' => $comment,
    ];
    $ref_table = "publication";
    $postRef = $database->getReference($ref_table)->push($postData);

    $ref_table_delete = "comments/".$id;
    $deleteData = $database->getReference($ref_table_delete)->remove();

    
    if ($postRef) {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: blog_admin.php");
    }
    else {
        $_SESSION['status'] = "Data Not Inserted ";
        header("Location: blog_admin.php");
    }
}

    ?>