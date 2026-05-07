<?php
include('config/conexion.php');

$id = $_GET['id'];

$sql = "SELECT * FROM articulos WHERE id=$id";
$resultado = $conn->query($sql);
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Artículo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">

<h1>Editar Artículo</h1>

<form action="actualizar.php" method="POST" class="formulario">

    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

    <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required>

    <input type="text" name="marca" value="<?php echo $fila['marca']; ?>" required>

    <input type="number" name="cantidad" value="<?php echo $fila['cantidad']; ?>" required>

    <input type="text" name="bodega" value="<?php echo $fila['bodega']; ?>" required>

    <button type="submit">Actualizar</button>
</html>