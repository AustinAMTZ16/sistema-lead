<?php
    require_once './../connection/conexion.php'; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Campos que modificar o agregar sea el caso.
        $dominioB2B = $_POST['dominioB2B'];
        mail($dominioB2B, "MexiClientes", 'Recuperando su contraseña.');
    }
?>