<?php
    // $servername = "45.89.204.4";
    // $username = "u115254492_rootdck";
    // $password = "N4v[uGo7?";
    // $dbname = "u115254492_apidck";
    $servername = "24.144.89.231";
    $username = "engranetmx";
    $password = "huaweiP20";
    $dbname = "sistemaMexiClientes";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
?>