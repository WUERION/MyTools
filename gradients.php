<?php

// $conexion_gradient = new mysqli('localhost', 'root', '', 'datamytools');

// if ($conexion_gradient->connect_error) {
//     die('Error de conexion (' . $conexion_gradient->connect_errno . ') ' . $conexion_gradient->connect_error);
// }

// $result_gradient = $conexion_gradient->query('SELECT * FROM gradient');

// $gradients = array();

// while($row_gradinet = $result_gradient->fetch_assoc()) {
//     $gradients = array(
//         'fristColor' => $row_gradinet['firstColor'],
//         'deg' => $row_gradinet['deg'],
//         'secondColor' => $row_gradinet['secondColor']
//     );
//     $gradients[] = $gradient;//!
// }


// echo json_encode($gradients);




// $conexion_gradient = new mysqli('localhost', 'root', '', 'datamytools');

// if ($conexion_gradient->connect_error) {
//     die('Error de conexion (' . $conexion_gradient->connect_errno . ') ' . $conexion_gradient->connect_error);
// }

// $result_gradient = $conexion_gradient->query('SELECT id, firstColor, deg, secondColor FROM gradient');

// $gradients = array();

// while($row_gradinet = $result_gradient->fetch_assoc()) {
//     $gradient = array(
//         'fristColor' => $row_gradinet['firstColor'],
//         'deg' => $row_gradinet['deg'],
//         'secondColor' => $row_gradinet['secondColor']
//     );
//     $gradients[] = $gradient;
// }

// echo json_encode($gradients);


$conexion_gradient = new mysqli('localhost', 'root', '', 'datamytools');

if ($conexion_gradient->connect_error) {
    die('Error de conexion (' . $conexion_gradient->connect_errno . ') ' . $conexion_gradient->connect_error);
}

$result_gradient = $conexion_gradient->query('SELECT id, firstColor, deg, secondColor FROM gradient');

$gradients = array();

while($row_gradinet = $result_gradient->fetch_assoc()) {
    $gradient = array(
        'fristColor' => $row_gradinet['firstColor'],
        'deg' => $row_gradinet['deg'],
        'secondColor' => $row_gradinet['secondColor']
    );
    $gradients[] = $gradient;
}

echo json_encode($gradients);

?>

