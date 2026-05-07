<?php
include('conexion.php');

$sql = "SELECT * FROM articulos ORDER BY id DESC";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Artículos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <h1>Gestión de Artículos</h1>

    <form action="guardar.php" method="POST" class="formulario">
        <input type="text" name="nombre" placeholder="Nombre del artículo" required>
        <input type="text" name="marca" placeholder="Marca" required>
        <input type="number" name="cantidad" placeholder="Cantidad" required min="0">
        <input type="text" name="bodega" placeholder="Bodega" required>
        <button type="submit">Guardar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Bodega</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($resultado && $resultado->num_rows > 0): ?>
                <?php while ($fila = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $fila['id']; ?></td>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td><?php echo $fila['marca']; ?></td>
                        <td><?php echo $fila['cantidad']; ?></td>
                        <td><?php echo $fila['bodega']; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>
                            |
                            <a href="eliminar.php?id=<?php echo $fila['id']; ?>" onclick="return confirm('¿Eliminar artículo?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No hay artículos registrados mostrar</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>