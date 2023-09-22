<?php
    require_once './../connection/conexion.php'; 


    $correo = $_POST['correo'];
    mail($_POST['correo'], "Hotel Casa de Piedra", 'Su reservación está listo un asesor se podrá en contacto.');

?>