<?php 

$server = "localhost";
$username = "id16938501_contact_us";
$password = "8m-|k@Xqw=%s%u1x";
$database = "id16938501_contact";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>