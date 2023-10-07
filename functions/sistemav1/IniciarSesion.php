<?php
// header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json');
// header('Access-Control-Allow-Method: POST');
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorizaction, X-Request-with, X-API-KEY, Origin, Accept, Access-Control-Request-Method");



    $requestMethod = $_SERVER["REQUEST_METHOD"];

    if($requestMethod == "POST"){
        $inputData = json_decode(file_get_contents("php://input"), true);
        if(empty($inputData)) {
            //echo json_encode(Prospecto::getWhere($_GET['idProspecto']));
            //$prospectoID = postIDProspecto(620);
            echo 'Para hacer uso del API es necesario mandar idProspecto.';
        }else{
            $idProspecto = $inputData['idProspecto'];
            $prospecto = postIDProspecto($idProspecto);
            echo $prospecto;
        }
    }else{
        $data = [
            'status' => 405,
            'message' => $requestMethod. 'Method Not Allowed',
        ];
        header("HTTP/1.0 405 Method Not Allowed");
        echo json_encode($data);
    }


     function postIDProspecto(){
        global $conn;
        // Verificar si se envió el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los valores ingresados en el formulario
            $usuario = $_POST['usuario'];
            $correo = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];
            // Consultar la base de datos para verificar el usuario
            $sql = "SELECT * FROM tb_login WHERE dominioB2B = '$usuario' or correo = '$correo' and password = '$contraseña'";

            $query_run = mysqli_query($conn, $sql);

            if($query_run){
                if(mysqli_num_rows($query_run)>0){
                    //$row = mysqli_fetch_assoc($query_run);
                    $row = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
                    $_SESSION["isUser"] = $row['idLogin'];
                    $_SESSION['usuario'] = $row['dominioB2B'];
                    $_SESSION['giroDominio'] = $row['giroDominio'];
    
                    if($row['giroDominio'] == 'Usuario Prospecto'){
                        header("Location: ./views/viewPanelClienteFidelizado.php");
                        exit();
                    }else{
                        header("Location: ./views/panelcontrol.php");
                        exit();
                    }
    
                    $data = [
                        'status' => 200,
                        'message' => 'Lista de prospectos obtenida correctamente.',
                        'data' => $row
                    ];
                    header("HTTP/1.0 200 Lista de prospectos obtenida correctamente.");
                    return json_encode($data);
                }else{
                    $data = [
                        'status' => 404,
                        'message' => 'Nombre de usuario o contraseña incorrectos..',
                    ];
                    header("HTTP/1.0 404 Nombre de usuario o contraseña incorrectos..");
                    return json_encode($data);
                }
            }else{
                $data = [
                    'status' => 500,
                    'message' => 'Internal Server Error.',
                ];
                header("HTTP/1.0 500 Internal Server Error.");
                return json_encode($data);
            }
            
        }
    }
