<?php
    require '../inc/dbcon.php';

    function getProspectoList(){
        global $conn;
        $query = " SELECT * FROM tb_prospecto";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            if(mysqli_num_rows($query_run)>0){
                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
                $data = [
                    'status' => 200,
                    'message' => 'Lista de prospectos obtenida correctamente.',
                    'data' => $res
                ];
                header("HTTP/1.0 200 Lista de prospectos obtenida correctamente.");
                return json_encode($data);
            }else{
                $data = [
                    'status' => 404,
                    'message' => 'No se encontraron prospectos.',
                ];
                header("HTTP/1.0 404 No se encontraron prospectos.");
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
    function postIDProspecto($idProspecto){
        global $conn;
        $sqlBuscarProspectoID = "SELECT * FROM tb_prospecto 
        WHERE idProspecto=$idProspecto";
        
        $query_run = $conn->query($sqlBuscarProspectoID);

        if($query_run){
            if(mysqli_num_rows($query_run)>0){
                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);
                $data = [
                    'status' => 200,
                    'message' => 'Se obtuvo correctamente el prospecto.',
                    'data' => $res
                ];
                header("HTTP/1.0 200 Se obtuvo correctamente el prospecto.");
                return json_encode($data);
            }else{
                $data = [
                    'status' => 404,
                    'message' => 'No se encontro prospecto.',
                ];
                header("HTTP/1.0 404 No se encontro prospecto.");
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
?>