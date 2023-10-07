<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Method: GET');
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorizaction, X-Request-with, X-API-KEY, Origin, Accept, Access-Control-Request-Method");

    include('../../functions/Prospectos.php');

    $requestMethod = $_SERVER["REQUEST_METHOD"];
    $inputData = json_decode(file_get_contents("php://input"), true);;

    if($requestMethod == "GET"){
        if(empty($inputData['idProspecto'])) {
            $data = [
                'status' => 405,
                'message' => $requestMethod. ': Para hacer uso del API es necesario mandar idProspecto.',
            ];
            header("HTTP/1.0 405 Para hacer uso del API es necesario mandar idProspecto.");
            echo json_encode($data);
        }else{
            $idProspecto = $inputData['idProspecto'];
            $prospecto = getBuscarProspecto($inputData);
            echo $prospecto;
        }
    }else{
        $data = [
            'status' => 405,
            'message' => $requestMethod. ': Method Not Allowed',
        ];
        header("HTTP/1.0 405 Method Not Allowed");
        echo json_encode($data);
    }
?>
