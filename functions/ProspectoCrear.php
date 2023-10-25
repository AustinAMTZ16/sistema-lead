<?php
    require_once './connection/conexion.php';

    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fecha_actual = date("Y-m-d h:i:s"); 
        //tb_Prospectos
        $nombre = $_POST["nombre"];
        $apellidoPaterno = $_POST["apellidoPaterno"];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        $asunto = 'Sistema MexiClientes';
        $mensaje = 'El registro fue creado desde el sistema MexiClientes';
        
        $conversacion = $_POST['conversacion'];
        $categoriaProspecto = 'Prospecto';
        $estadoSistema = 'Activo';
        //$fechaNacimiento = $_POST['fechaNacimiento'];
        //$lugarNacimiento = $_POST['lugarNacimiento'];
        $origenProspecto = $_POST['origenProspecto'];
        $dominioOrigen = $_SESSION["usuario"]; //obtener el dominio del usuario en sesion 
        $giroDominio = $_SESSION["giroDominio"]; //obtener el giro del usuario en sesion 
        //tb_Recompensa
        // $puntosRecompens = '1';
        // $puntosRecompensa =str_replace(' ', '', $puntosRecompens);


        //$fechaModificacion = '';
        $idProstecto = ''; //Obtener el ID del usuario

        $sqlProspecto = "INSERT INTO tb_prospecto (
                        nombre, apellidoPaterno, apellidoMaterno, telefono, correo, asunto, mensaje, conversacion, dominioOrigen, giroDominio, categoriaProspecto, estadoSistema, origenProspecto
                    )VALUES (
                        '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$telefono', '$correo', '$asunto', '$mensaje', '$conversacion','$dominioOrigen', '$giroDominio', '$categoriaProspecto', '$estadoSistema', '$origenProspecto')";

        if ($conn->query($sqlProspecto) === TRUE) {
            //header("Seguardo prospecto 'idProspecto = 509'"); // Redireccionar a la página principal después de crear el registro
            if ($conn->affected_rows) {
                $idProstectos = $conn->insert_id;
                $idProstecto = json_encode($idProstectos);
            } //end if
            //echo "Registro insertado, el id insertado ha sido el " . $idProstecto = $conn->insert_id();

        } else {
            header("Location: panelEmpresa.php");
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // consulta para conocer el ultimo registro que se hizo en la tabla tb_prospecto 
        // $sqlBuscarProspecto =  idProspecto Que guarde el idProspecto del ultimo registro guardado.
        // $idProstecto = $sqlBuscarProspecto;
        $sqlPuntos = "INSERT INTO tb_recompensa(
                        puntosRecompensa,fechaModificacion, idProspecto
                    ) VALUES('1','$fecha_actual', '$idProstecto')";

        if ($conn->query($sqlPuntos) === TRUE) {
            header("Location: panelEmpresa.php"); // Redireccionar a la página principal después de crear el registro
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>