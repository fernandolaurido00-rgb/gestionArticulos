<?php
include('config/conexion.php');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$cantidad = $_POST['cantidad'];
$bodega = $_POST['bodega'];

$sql = "UPDATE articulos SET
nombre='$nombre',
marca='$marca',
cantidad='$cantidad',
bodega='$bodega'
WHERE id=$id";

if($conn->query($sql) === TRUE){
    header('Location: index.php');
}else{
    echo "Error al actualizar";
}
?>