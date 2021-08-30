<?php
include('authentication.php');




unset($_SESSION['verified_user_id']);
unset($_SESSION['idtokenString']);

$_SESSION['status'] = "Logged Out successfully";
header("Location: login_user.php");
exit();
?>

