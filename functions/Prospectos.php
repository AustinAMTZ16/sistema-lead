<?php
    include '../../connection/dbcon.php';
    //require '../views/viewMail/mailSuscricion.php';
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
        $correoCliente = $data['correoCliente'];

        $mailSuscripcion = '
            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
                <tr>
                    <td align="center" style="padding:0;">
                        <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                            <tr>
                                <td align="center" style="padding:40px 0 30px 0;background:#70bbd9;">
                                    <img src="https://assets.codepen.io/210284/h1.png" alt="" width="300" style="height:auto;display:block;" />
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:36px 30px 42px 30px;">
                                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                        <tr>
                                            <td style="padding:0 0 36px 0;color:#153643;">
                                                <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Creating Email Magic</h1>
                                                <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan et dictum, nisi libero ultricies ipsum, posuere neque at erat.</p>
                                                <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="http://www.example.com" style="color:#ee4c50;text-decoration:underline;">In tempus felis blandit</a></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0;">
                                                <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                                    <tr>
                                                        <td style="width:260px;padding:0;vertical-align:top;color:#153643;">
                                                            <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/left.gif" alt="" width="260" style="height:auto;display:block;" /></p>
                                                            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed. Morbi porttitor, eget accumsan dictum, est nisi libero ultricies ipsum, in posuere mauris neque at erat.</p>
                                                            <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="http://www.example.com" style="color:#ee4c50;text-decoration:underline;">Blandit ipsum volutpat sed</a></p>
                                                        </td>
                                                        <td style="width:20px;padding:0;font-size:0;line-height:0;">&nbsp;</td>
                                                        <td style="width:260px;padding:0;vertical-align:top;color:#153643;">
                                                            <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/right.gif" alt="" width="260" style="height:auto;display:block;" /></p>
                                                            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Morbi porttitor, eget est accumsan dictum, nisi libero ultricies ipsum, in posuere mauris neque at erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus adipiscing felis, sit amet blandit ipsum volutpat sed.</p>
                                                            <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="http://www.example.com" style="color:#ee4c50;text-decoration:underline;">In tempus felis blandit</a></p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:30px;background:#ee4c50;">
                                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                        <tr>
                                            <td style="padding:0;width:50%;" align="left">
                                                <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                                    &reg; Someone, Somewhere 2023<br/><a href="http://www.example.com" style="color:#ffffff;text-decoration:underline;">Unsubscribe</a>
                                                </p>
                                            </td>
                                            <td style="padding:0;width:50%;" align="right">
                                                <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                                                    <tr>
                                                        <td style="padding:0 0 0 10px;width:38px;">
                                                            <a href="http://www.twitter.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/tw_1.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>
                                                        </td>
                                                        <td style="padding:0 0 0 10px;width:38px;">
                                                            <a href="http://www.facebook.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            ';

        $postAgregarProspecto = "INSERT INTO tb_prospecto (nombre, apellidoPaterno, apellidoMaterno,telefono, correo, asunto, mensaje, dominioOrigen, giroDominio, categoriaProspecto, estadoSistema, conversacion)
        VALUES('".$nombre."', '".$apellidoPaterno."', '".$apellidoMaterno."', '".$telefono."', '".$correo."', '".$asunto."', '".$mensaje."', '".$dominioOrigen."', '".$giroDominio."', '".$categoriaProspecto."', '".$estadoSistema."', '".$conversacion."' )";
        $query_run=$conn->query($postAgregarProspecto);
        
        if($query_run) {
            if($conn->affected_rows){
                $res = $query_run;
                mail($correo, "Gracias por suscribirte", $mailSuscripcion);
                mail($correoCliente, "Formulario de suscripcion MexiClientes", $mailSuscripcion);
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