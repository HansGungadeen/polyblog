<?php
session_start();
include('config.php');
use Firebase\Auth\Token\Exception\InvalidToken;



if (isset($_SESSION['verified_user_id'])) 
{
    $uid = $_SESSION['verified_user_id'];
    $idTokenString = $_SESSION['idtokenString'];


    try {
        $verifiedIdToken = $auth->verifyIdToken($idTokenString);
        //echo "working";
    } catch (InvalidToken $e) {
        echo 'The token is invalid: '.$e->getMessage();
        $_SESSION['status'] = "Token Invalid/Expired. Login Again";
        header('Location:logout_user.php');
        exit();
    } catch (\InvalidArgumentException $e) {
        echo 'The token could not be parsed: '.$e->getMessage();
    }
}

else {

    $_SESSION['status'] = "Login to access Home Page";
    header('Location:login_user.php');
    exit();
}


?>