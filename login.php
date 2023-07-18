<?php
session_start();
// Establece los datos de conexión a la base de datos
$host = '45.89.204.4';
$user = 'u115254492_rootdck';
$password = '1~wR>Qs3FC';
$database = 'u115254492_apidck';


// Conecta a la base de datos
$conn = mysqli_connect($host, $user, $password, $database);

// Verifica si la conexión fue exitosa
if (!$conn) {
    die('Error de conexión: ' . mysqli_connect_error());
}
$errorMessage = " ";
// Procesa el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    // Consulta para verificar las credenciales
    $query = "SELECT * FROM tb_login WHERE dominioB2B = '$email' and password = '$contrasena'";
    $result = mysqli_query($conn, $query);

    $_SESSION['dominioB2B'] = $row['dominioB2B'];
    $_SESSION['giroDominio'] = $row['giroDominio'];

    if ($result && mysqli_num_rows($result) > 0) {
        // Credenciales válidas, inicio de sesión exitoso
        $row = mysqli_fetch_assoc($result);
        // Inicia la sesión y guarda los datos del usuario
        
        // Redirecciona al área protegida o a otra página de tu elección
        header('Location: inicio.php');
        exit();
    } else {
        // Credenciales inválidas, muestra un mensaje de error
        // echo 'Credenciales inválidas. Por favor, intenta nuevamente.';
        $errorMessage = "Credenciales inválidas. Por favor, intenta nuevamente.";
        // $errorMessage = 'Credenciales inválidas. Por favor, intenta nuevamente.';
        header('Location: index.html');
        
    }
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>
