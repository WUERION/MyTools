<?php
$srevername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'datamytools';

// Crear conexión
$conn = mysqli_connect($srevername, $username, $password, $dbname);

if (!$conn) {
    die('Conexion fallida:' . mysqli_connect_error());
}

// recoger los datos del form
$code_color = $_POST['dataColor'];


// sentencia de insercion
$sql = "INSERT INTO colores (hexa) VALUES ('$code_color')";

if ($conn->query($sql) === true) {
    echo "registro creado";
} else {
    echo "Error:" . $sql . $conn->error;
};

// sentencia para obtener los datos
$sql_data = 'SELECT id, hexa FROM colores';
$result = $conn->query($sql_data);

if ($result) {
    // while ($row = $result->fetch_assoc()) {
    // echo $row['id'], $row['hexa'];
    // }
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p style="color: cyan;">' . $row['hexa'] . '</p>';
    }
} else {
    echo 'Error' . $sql . mysqli_error($conn);
}

// recogemos los datos del form
$code_gradient_first = $_POST['firstColor'];
$code_gradient_deg = $_POST['deg'];
$code_gradient_second = $_POST['secondColor'];

// sentencia de insercion
$sql_gradient = "INSERT INTO gradient (firstColor, deg, secondColor) VALUES ('$code_gradient_first', '$code_gradient_deg', '$code_gradient_second')";

if ($conn->query($sql_gradient) === true) {
    echo "registro creado";
} else {
    echo "Error: " . $sql_gradient . $conn->error;
}


// sentecia para obtener los datos
$sql_gradient = 'SELECT id, firstColor, deg, secondColor FROM gradient';
$result_gradient = $conn->query($sql_gradient);

if ($result_gradient) {
    // while ($row = mysqli_fetch_assoc($result_gradient)) {
    //     echo '<p style="color: cyan;">' . $row['firstColor, deg, secondColor'] . '</p>';
    // }
    while ($row = $result_gradient->fetch_assoc()) {
        echo $row['firstColor, deg, secondColor'];
    }
} else {
    echo 'Error' . $sql_gradient . mysqli_error($conn);
}


// recogemos los datos del form
$code_name_font = $_POST['nameFont'];
$code_url_font = $_POST['urlFont'];

// sentecia de insercion
$sql_font = "INSERT INTO fonts (nameFont, urlFont) VALUES ('$code_name_font', '$code_url_font')";

if ($conn->query($sql_font) === true) {
    echo "registro creado";
} else {
    echo "Error:" . $sql_font . $conn->error;
}

// senrtecia para obtener los datos
// $sql_font = 'SELECT id, nameFont, urlFont FROM fonts';
// $result_font = $conn->query($sql_font);

// if ($result_font) {
//     while ($row = $result_font->fetch_assoc()) {
//         echo $row['nameFont, urlFont'];
//     }
// } else {
//     echo 'Error' . $sql_font . mysqli_error($conn);
// }

header('Location: index.php');

$conn->close();
