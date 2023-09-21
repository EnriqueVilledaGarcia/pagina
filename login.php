<?php
// Obtener datos del formulario
$usuario = $_POST["usuario"];
$password = $_POST["password"];

// Conectar a la base de datos (reemplaza estos valores con los tuyos)
$servidor = "localhost:3308";
$nombreUsuario = "enrique";
$contrasenaBD = 'progra2H7*+';
$nombreBD = "software";

$conn = new mysqli($servidor, $nombreUsuario, $contrasenaBD, $nombreBD);

// Verificar la conexión a la base de datos
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Preparar y ejecutar una consulta SQL para insertar datos
$consulta = "INSERT INTO datos (usuario, contraseña) VALUES ('$usuario', '$password')";

if ($conn->query($consulta) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
