<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "trabajopracticodb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === FALSE) {
    echo "Error al crear la tabla de usuarios: " . $conn->error;
}
?>
