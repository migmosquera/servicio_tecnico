<?php

require_once '../conexion/conexion.php';
$conectar = new Conectar();
$id = $_POST["idPhotoData"];
$urlImagen = $_POST["imagen"];
$delete = $conectar->prepare('DELETE FROM photo WHERE id = :id');
$delete->bindParam(':id', $id);
$delete->execute();
unlink("/opt/lampp/htdocs/servicio_tecnico/".$_POST["imagen"]);


