<?php

    require_once './connection/conexion.php';


    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Campos que modificar o agregar sea el caso.
        $idProspecto = $_POST['idProspecto'];
        $puntosRecompensa = $_POST["puntosRecompensaF"];
    

        //Consulta para validar el registro existente.
        $sql = "SELECT idProspecto FROM tb_recompensa WHERE idProspecto = '$idProspecto'";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            // El registro ya existe, realizar una operación de actualización
            $fila = $resultado->fetch_assoc();
            $idProspectoR = $fila["idProspecto"];
            // $fecha_actual = date("d-m-Y h:i:s"); 
            $fecha_actual = date("Y-m-d h:i:s"); 
            // print_r($fecha_actual);

            $sqlActualizar = "UPDATE tb_recompensa SET puntosRecompensa = '$puntosRecompensa',fechaModificacion = '$fecha_actual' WHERE idProspecto = $idProspectoR";
            if ($conn->query($sqlActualizar) === TRUE) {
                //echo "Registro actualizado correctamente1.";
                header("Location: viewProspectoLista.php");
            } else {
                echo "Error al actualizar el registro: " . $conn->error;
                header("Location: viewProspectoLista.php");
            }
            //header("Location: panelcontrol.php");
        } else {
            // El registro no existe, realizar una operación de inserción
            $sqlInsertar = "INSERT INTO tb_recompensa (idProspecto, puntosRecompensa) VALUES ('$idProspecto', '$puntosRecompensa')";
            if ($conn->query($sqlInsertar) === TRUE) {
                //echo "Registro insertado correctamente2.";
                header("Location: viewProspectoLista.php");
            } else {
                echo "Error al insertar el registro: " . $conn->error;
                header("Location: viewProspectoLista.php");
            }
        }
    }


    $idUser = $_GET['idProspecto'];//540
    $sqlBuscarUserPuntos="SELECT * FROM tb_recompensa WHERE idProspecto='$idUser'";//Consultapuntos del usuario(IdUsuario) 2, 10, 10-20-23, 540
    $Response = $conn->query($sqlBuscarUserPuntos);
    $ResponsePuntosUsuario = $Response->fetch_assoc();

?>