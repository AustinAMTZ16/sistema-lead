<?php
    require_once './../connection/conexion.php'; 


    $correo = $_POST['correo'];
    mail($_POST['correo'], "Recuperación de tu perfil MexiClientes", 'Buenas tardes, es un gusto ayudarle <br> Mandamos su contraseña: xxx.');

?>