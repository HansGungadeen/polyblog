<?php
session_start();
include('config.php');
use Firebase\Auth\Token\Exception\InvalidToken;

if (isset($_POST['login_btn'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $user = $auth->getUserByEmail("$email");

        $signInResult = $auth->signInWithEmailAndPassword($email, $password);
        $idTokenString = $signInResult->idToken();
        
        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
            $uid = $verifiedIdToken->claims()->get('sub');

            $_SESSION['verified_user_id'] = $uid;
            $_SESSION['idTokenString'] = $idTokenString;

            $_SESSION['status'] = "Logged In successfully";
            header("Location: blog_user.php");
            exit();

            } catch (InvalidToken $e){
                echo 'The token is invalid: '.$e->getMessage();
            } catch (\InvalidArgumentException $e){
                echo 'The token could not be parsed: '.$e->getMessage();
            }
    }catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e){
        //echo $e->getMessage();
        $_SESSION['status'] = "No Email Found";
        header("Location: login_user.php");
        exit();
    }
}

?>