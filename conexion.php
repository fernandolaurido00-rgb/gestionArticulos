<?php

$host = "mysql-laurido.alwaysdata.net";
$usuario = "laurido";
$password = "karen2216";
$bd = "laurido_gestionarticulos";

$conn = new mysqli($host, $usuario, $password, $bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>