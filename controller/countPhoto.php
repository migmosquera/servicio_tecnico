<?php
require_once 'model/Photo.php';
$photo_total = Photo::selectAll();

if(count($photo_total) % 5 > 0){
    $count_image = floor((count($photo_total) / 5) + 1);
}else{
    $count_image =  count($photo_total) / 5;
}

