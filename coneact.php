<?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    $srevername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'database';
    
    // Crear conexión
    $conn = new mysqli($srevername, $username, $password, $dbname);
    
    // Verificar conexión
    if ($conn->connect_error) {
        die("conexion fallida: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM colores";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo "id " . $row["id"]. " - Nombre: ". $row['name']. " - hexa: ". $row["hexa"]. " - rgb: ". $row["rgb"] . "<br>";
        }
    } else {
        echo "0  resultados";
    }
    $conn->close();
?>
