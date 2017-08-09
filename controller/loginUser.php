<?php

include_once "model/User.php";
session_start();
$msjError = '';
if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $user = User::loginUser($username,$pass);
    if ($user) {
        $_SESSION['id'] = $user->getId();
        header('location: admin.php');
    } else {
        $msjError = $error_login;
        return $msjError;
    }
}
?>