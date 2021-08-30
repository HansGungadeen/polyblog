<?php
session_start();
include('config.php');

if (isset($_POST['insert_comment']))
{
    //_post to var
    $name = $_POST['name'];
    $course = $_POST['course'];
    $comment = $_POST['comment'];

    //data to be pushed
    $postData = 
    [
        'name' => $name,
        'course' => $course,
        'comment' => $comment,
    ];

    //table name
    $ref_table = "comments";
    $postRef = $database->getReference($ref_table)->push($postData);

    if($postRef)
    {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: blog_user.php");
    }
    else {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: comment_form.php");
    }
}