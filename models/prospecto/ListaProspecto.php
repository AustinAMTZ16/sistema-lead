<?php
    include('../../functions/Prospectos.php');

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Method: GET');
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorizaction, X-Request-with, X-API-KEY, Origin, Accept, Access-Control-Request-Method");
    
    $requestMethod = $_SERVER["REQUEST_METHOD"];

    if($requestMethod == "GET"){
        $prospectosLista = getListaProspecto();
        echo $prospectosLista;
    }else{
        $data = [
            'status' => 405,
            'message' => $requestMethod. ': Method Not Allowed',
        ];
        header("HTTP/1.0 405 Method Not Allowed");
        echo json_encode($data);
    }
?>
