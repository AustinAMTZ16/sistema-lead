<?php
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