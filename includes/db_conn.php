<?php
// db_conn.php
$servername = "localhost"; // O la IP/dominio de tu servidor de BD
$username = "quinta_user"; // Tu usuario de MySQL
$password = "Qm123.1"; // Tu contraseña de MySQL
$dbname = "quinta_muebles_db"; // El nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Opcional: Establecer el conjunto de caracteres a UTF-8 para evitar problemas con acentos
$conn->set_charset("utf8mb4");

?>