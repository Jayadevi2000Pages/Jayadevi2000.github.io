<?php
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$size_imagen=$_FILES['imagen']['size'];

if($size_imagen<=1000000){
    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/server_images/';
    move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.basename($_FILES['imagen']['name']));

    $int = (int)filter_var($nombre_imagen, FILTER_SANITIZE_NUMBER_INT);
    echo("The extracted numbers are: $int \n");
    require_once "CRUD.php";
    $mycrud = new Crud();
    $mycrud -> subeFoto("UPDATE dolls SET Foto ='" .$nombre_imagen ."'WHERE doll_id =". $int."");

}else{
    echo "Archivo demasiado grande";
}
