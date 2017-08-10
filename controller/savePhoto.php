<?php
$msjSavePhoto = '';
if (isset($_POST['uploadImagen'])) {
    require_once 'model/Photo.php';
    $temp = tmpfile();
    $dir_subida = 'multimedia/';
    $target_file = $dir_subida . basename($_FILES["loadImage"]["name"]);
    $namePhoto = $_POST['titlePhoto'];
    $img = $_FILES["loadImage"]["name"];
    $fileType = pathinfo($target_file, PATHINFO_EXTENSION);
    if ($fileType == 'jpg' or $fileType == 'png') {
        if (move_uploaded_file($_FILES['loadImage']['tmp_name'], $target_file)) {
            $msjSavePhoto = "el titulo se ha guardado";
            $img_url = 'multimedia/' . basename($_FILES["loadImage"]["name"]);
            $photo_save = Photo::savePhoto($img_url, $namePhoto);
        } else {
            $msjSavePhoto = 'Error al subir la imagen';
            echo $_FILES['loadImage']['error'];
        }
    } else {
        $msjSavePhoto = 'Error al subir imagen solo se permite jpg y png';
    }
}
