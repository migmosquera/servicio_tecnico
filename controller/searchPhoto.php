<?php

require_once '../conexion/conexion.php';
$offset = $_POST['idPhotoData'];
$conectar = new Conectar();
if ($offset == 0) {
    $query = $conectar->prepare('SELECT * FROM photo ORDER BY date DESC LIMIT 5');
} else {
    $query = $conectar->prepare('SELECT * FROM photo ORDER BY date DESC LIMIT 5 OFFSET ' . $offset);
}
$query->execute();

$data = $query->fetchAll();
$myObj = array();
foreach($data as $datas)
{
    $obj = array();
    $id["id"] =$datas[0];
    $url["url"]=$datas[1];
    $title["title"]=$datas[2];
    $date["date"] =$datas[3];
    array_push($obj,$id,$url,$title,$date); 
    array_push($myObj,$obj); 
 }
$myJSON = json_encode($myObj);
echo $myJSON;
$conectar = null;
?>

