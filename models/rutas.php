<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorizaction, X-Request-with, X-API-KEY, Origin, Accept, Access-Control-Request-Method");

//include('../functions/Prospectos.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];  //OBTIENE EL METEDO DEL API
$inputData = json_decode(file_get_contents("php://input"), true); //SE OBTIENE LOS VALORES DEL API
$urlPath = $_SERVER['REMOTE_ADDR'] .':'.$_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI']; //SE OBTIENE EL PATH DE LA API

if ($requestMethod == "POST") {

    $inputData = json_decode(file_get_contents("php://input"), true);
    if (empty($inputData)) {
        //echo json_encode(Prospecto::getWhere($_GET['idProspecto']));
        //$prospectoID = postIDProspecto(620);
        echo 'Para hacer uso del API es necesario mandar idProspecto.';
    } else {
        // $idProspecto = $inputData['idProspecto'];
        // $prospecto = postIDProspecto($idProspecto);
        // echo $prospecto;
        echo 'POST';
    }
} elseif ($requestMethod == "GET") {
    $data = $inputData; 
    $path = $_SERVER['REQUEST_URI'];
    switch($path){
        case '/models/rutas.php':
            echo 'URL:' . $urlPath;
        break;
        default:
        echo "No existe ruta.";
    }
} else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . 'Method Not Allowed',
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}
