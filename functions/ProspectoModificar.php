<?php
require_once './connection/conexion.php';

// Obtener el ID del registro a editar
$id = $_GET["idProspecto"];

// Consulta SQL para obtener el registro específico
$sqlBuscarProspectoModificar = "SELECT * FROM tb_prospecto WHERE idProspecto = ?";
$stmt = $conn->prepare($sqlBuscarProspectoModificar);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

$usuario = $result->fetch_assoc();
$stmt->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $idM = $_POST["idProspecto"];
    $nombre = $_POST["nombre"];
    $apellidoPaterno = $_POST["apellidoPaterno"];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $conversacion = $_POST['conversacion'];
    $origenProspecto = $_POST['origenProspecto'];

    // Consulta SQL preparada para actualizar el registro
    $sqlActualizar = "UPDATE tb_prospecto SET nombre=?, apellidoPaterno=?, apellidoMaterno=?, telefono=?, correo=?, conversacion=?, origenProspecto=? WHERE idProspecto=?";
    $stmt = $conn->prepare($sqlActualizar);
    $stmt->bind_param("sssssssi", $nombre, $apellidoPaterno, $apellidoMaterno, $telefono, $correo, $conversacion, $origenProspecto, $idM);

    if ($stmt->execute()) {
        header("Location: viewProspectoLista.php"); 
        exit();
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
    $stmt->close();
}