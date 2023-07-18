<?php
// $host = '45.89.204.4';
// $db = 'u115254492_apidck';
// $usuario = 'u115254492_rootdck';
// $contraseña = '1~wR>Qs3FC';

// $conexion = mysqli_connect($host, $usuario, $contraseña, $db);

// die("Base de datos Correcto");

// if (!$conexion) {
//     die('Error al conectar a la base de datos: ' . mysqli_connect_error());
// }



$servername = "45.89.204.4";
$username = "u115254492_rootdck";
$password = "1~wR>Qs3FC";
$dbname = "u115254492_apidck";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}





?>