<?php
include_once "model/User.php";
session_start();
$id = $_SESSION['id'];
$user = User::selectForId($id);
if ($user) {
    return $user;
} else {
    
    if (session_destroy()) {
        header('Location: index.php');
    }
}
	

