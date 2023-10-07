<?php
    $servername = "45.89.204.4";
    $username = "u115254492_rootdck";
    $password = "N4v[uGo7?";
    $dbname = "u115254492_apidck";

    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
?>