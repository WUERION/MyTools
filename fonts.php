<?php

// $conexion_font = new mysqli('localhost', 'root', '', 'datamytools');

// if ($conexion_font->connect_error) {
//     die('Error de conexion (' . $conexion_font->connect_errno . ') ' . $conexion_font->connect_error);
// }

// $result_font = $conexion_font->query('SELECT nameFont, urlFont FROM fonts');

// $fonts = array();

// while ($row_font = $result_font->fetch_assoc()) {
//     $font = array(
//         'name' => $row_font['nameFont'],
//         'url' => $row_font['urlFont']
//     );
//     $fonts[] = $font;
// }

// echo json_encode($fonts);


$conexion_font = new mysqli('localhost', 'root', '', 'datamytools');

if ($conexion_font->connect_error) {
    die('Error de conexion (' . $conexion_font->connect_errno . ') ' . $conexion_font->connect_error);
}

$result_font = $conexion_font->query('SELECT nameFont, urlFont FROM fonts');

$fonts = array();

while ($row_font = $result_font->fetch_assoc()) {
    $font = array(
        'name' => $row_font['nameFont'],
        'url' => $row_font['urlFont']
    );
    $fonts[] = $font;
}

echo json_encode($fonts);

?>
