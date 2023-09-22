<?php
    require_once './../connection/conecionPDO.php'; 


    $correo = $_POST['dominioB2B'];
    mail($correo, "Hotel Casa de Piedra", 'Su reservación está listo un asesor se podrá en contacto.');
    mail('soporte@hotelcasadepiedra.com', "Hotel Casa de Piedra", 'El sistema detectó una reservación por favor de revisar el sistema de gestión del hotel');
?>