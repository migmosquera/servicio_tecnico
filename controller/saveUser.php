<?php

$msj_save_user = '';
if (isset($_POST['saveUser'])) {
    
    include_once "model/User.php";
    
    $id = $_POST['idUser'];
    $email = $_POST['email'];
    $url_instagram = $_POST['url_instagram'];
    $url_facebook = $_POST['url_facebook'];
    $url_twitter = $_POST['url_twitter'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $phone3 = $_POST['phone3'];
    $id_twitter = $_POST['id_twitter'];
    $token_instagram = $_POST['token_instagram'];
    $name_instagram = $_POST['name_instagram'];
    $id_instagram = $_POST['id_instagram'];
    $address = $_POST['address'];
    
    $user->update($id, $email, $url_instagram, $url_facebook, $url_twitter, $phone1, $phone2, $phone3, $id_twitter, $token_instagram, $name_instagram, $id_instagram, $address);
    $msj_save_user = $save_user_msj;
    return $msj_save_user;
}

