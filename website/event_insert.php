<?php
session_start();
include('config.php');

if (isset($_POST['event_insert'])) 
{
    //_post to var
    $event_name = $_POST['event_name'];
    $event_location = $_POST['event_location'];
    $event_date = $_POST['event_date'];

    //data to be pushed
    $postData = [
        'event_name' => $event_name,
        'event_location' => $event_location,
        'event_date' => $event_date,
    ];

    $ref_table = "events";
    $postRef = $database->getReference($ref_table)->push($postData);

    if ($postRef) 
    {
        $_SESSION['status'] = "Event Inserted Successfully";
        header("Location: event_admin.php");
    }
    else {
        $_SESSION['status'] = "Event Not Inserted ";
        header("Location: event_admin.php");
    }
}