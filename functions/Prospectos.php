<?php
    include '../../connection/dbcon.php';
    /* CAMPOS NECESARIOS PARA CREAR UN PROSPECTO
        idProspecto : 'int : identificador de prospecto', 
        nombre : 'varchar : nombre del prospecto', 
        apellidoPaterno : 'varchar : primer apellido del prospecto', 
        apellidoMaterno : 'varchar : Segundo apellido del prospecto', 
        telefono : 'varchar : Numero de contacto del prospecro', 
        correo : 'varchar : Correo electronico del prospecto', 
        asunto : 'varchar : Motivo por el cual el prospecto se pone en contacto', 
        mensaje : 'varchar : Descripcion de la solicitud del prospecto', 
        dominioOrigen : 'varchar : Pagina web origen del prospecto', 
        giroDominio : 'varchar : Giro de la pagina web origen', 
        categoriaProspecto : 'varchar : Categoria de la pagina web origen', 
        fechaCreacion : 'varchar : Fecha que el prospecto llena el formulario de contacto', 
        estadoSistema : 'varchar : Identificador de visibilidad en el sistema dck', 
        conversacion  : 'varchar : Bitacora del prospecto con el objetivo de saber cuál fue el ultimo contacto y que sucedio'
    */

    function getListaProspecto(){
        global $conn;
        $getProspectoList = " SELECT * FROM tb_prospecto";
        $query_run = mysqli_query($conn, $getProspectoList);
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
    function getBuscarProspecto($idProspecto){
        global $conn;
        $id = $idProspecto['idProspecto'];
        
        $getBuscarProspecto = "SELECT * FROM tb_prospecto WHERE idProspecto=$id";
        $query_run = $conn->query($getBuscarProspecto);

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
    function postAgregarProspecto($data) {
        global $conn;
        $nombre = $data['nombre'];
        $apellidoPaterno = $data['apellidoPaterno'];
        $apellidoMaterno = $data['apellidoMaterno'];
        $telefono = $data['telefono'];
        $correo = $data['correo'];
        $asunto = $data['asunto'];
        $mensaje = $data['mensaje'];
        $dominioOrigen = $data['dominioOrigen'];
        $giroDominio = $data['giroDominio'];
        $categoriaProspecto = $data['categoriaProspecto'];
        $estadoSistema = $data['estadoSistema'];
        $conversacion = $data['conversacion'];

        $postAgregarProspecto = "INSERT INTO tb_prospecto (nombre, apellidoPaterno, apellidoMaterno,telefono, correo, asunto, mensaje, dominioOrigen, giroDominio, categoriaProspecto, estadoSistema, conversacion)
        VALUES('".$nombre."', '".$apellidoPaterno."', '".$apellidoMaterno."', '".$telefono."', '".$correo."', '".$asunto."', '".$mensaje."', '".$dominioOrigen."', '".$giroDominio."', '".$categoriaProspecto."', '".$estadoSistema."', '".$conversacion."' )";
        $query_run=$conn->query($postAgregarProspecto);
        
        if($query_run) {
            if($conn->affected_rows){
                $res = $query_run;
                mail($correo, "Gracias por suscribirte", "Gracias por su registro nos estaremos poniendo en contacto lo mas pronto posible.");
                mail('aldahir.dar@gmail.com', "Formulario de suscripcion MexiClientes", "Se registro un cliente revisa tu sistema");
                $data = [
                    'status' => 200,
                    'message' => 'Se agrego correctamente el prospecto.',
                    'data' => $res
                ];
                header("HTTP/1.0 200 Se agrego correctamente el prospecto.");
                return json_encode($data);
            }else{
                $data = [
                    'status' => 404,
                    'message' => 'No se agrego prospecto.',
                ];
                header("HTTP/1.0 404 No se agrego prospecto.");
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
    function updateProspecto($data){
        global $conn;

        $idProspecto = $data['idProspecto'];
        $nombre = $data['nombre'];
        $apellidoPaterno = $data['apellidoPaterno'];
        $apellidoMaterno = $data['apellidoMaterno'];
        $telefono = $data['telefono'];
        $correo = $data['correo'];
        $asunto = $data['asunto'];
        $mensaje = $data['mensaje'];
        $dominioOrigen = $data['dominioOrigen'];
        $giroDominio = $data['giroDominio'];
        $categoriaProspecto = $data['categoriaProspecto'];
        $estadoSistema = $data['estadoSistema'];
        $conversacion = $data['conversacion'];
        //$fechaCreacion = $data['fechaCreacion'];

        $query = "UPDATE tb_prospecto SET
            nombre='".$nombre."', apellidoPaterno='".$apellidoPaterno."' , apellidoMaterno='".$apellidoMaterno."', telefono='".$telefono."' , correo='".$correo."' , asunto='".$asunto."' , mensaje='".$mensaje."' , dominioOrigen='".$dominioOrigen."' , giroDominio='".$giroDominio."' , categoriaProspecto='".$categoriaProspecto."', estadoSistema='".$estadoSistema."' , conversacion='".$conversacion."' 
            WHERE idProspecto=$idProspecto";
        $query_run = $conn->query($query);

        if($query_run) {
            if($conn->affected_rows){
                $data = [
                    'status' => 200,
                    'message' => 'Se modifico correctamente el prospecto.',
                ];
                header("HTTP/1.0 200 Se modifico correctamente el prospecto.");
                return json_encode($data);
            }else{
                $data = [
                    'status' => 404,
                    'message' => 'No se modifico prospecto.',
                ];
                header("HTTP/1.0 404 No se modifico prospecto.");
                return json_encode($data);
            }
        }else{
            $data = [
                'status' => 500,
                'message' => 'Internal Server Error.',
                'data' => $data['idProspecto']
            ];
            header("HTTP/1.0 500 Internal Server Error.");
            return json_encode($data);
        }
    }
    function deleteProspecto($data){
        global $conn;
        $idProspecto = $data['idProspecto'];
        $query = "DELETE FROM tb_prospecto WHERE idProspecto=$idProspecto";
        $query_run = $conn->query($query);
        if($query_run) {
            if($conn->affected_rows >= 0) {
                $data = [
                    'status' => 200,
                    'message' => 'Se elimino correctamente el prospecto.',
                ];
                header("HTTP/1.0 200 Se elimino correctamente el prospecto.");
                return json_encode($data);
            }else{
                $data = [
                    'status' => 404,
                    'message' => 'No se elimino prospecto.',
                ];
                header("HTTP/1.0 404 No se elimino prospecto.");
                return json_encode($data);
            }
        }else{
            $data = [
                'status' => 500,
                'message' => 'Internal Server Error.',
                'data' => $data['idProspecto']
            ];
            header("HTTP/1.0 500 Internal Server Error.");
            return json_encode($data);
        }
    }
?>