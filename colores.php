<?php

$conexion = new mysqli('localhost', 'root', '', 'datamytools');

if($conexion->connect_error) {
    die('Error de conexion ('. $conexion->connect_errno . ') ' . $conexion->connect_error);
}

$result = $conexion->query('SELECT id, hexa FROM colores');

$colors = array();

while($row = $result->fetch_assoc()) {
    $colors[] = $row['hexa'];
}

echo json_encode($colors);
// header('Location: index.php');

