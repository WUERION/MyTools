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
    echo "Error:" . $sql . '<br>' . $conn->error;
}

// sentencia para obtener los datos
$sql_data = 'SELECT id, hexa FROM colores';
$result = $conn->query($sql_data);

if($result) {
    // while ($row = $result->fetch_assoc()) {
        // echo $row['id'], $row['hexa'];
    // }
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<p style="color: cyan;">' . $row['hexa'] . '</p>';
        
    }
} else {
    echo 'Error' . $sql . '<br>' . mysqli_error($conn);
}

header('Location: index.php');

$conn->close();
?>