<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Skyvoid";

// Obtener los valores del estado, nombre, marca y modelo enviados por AJAX
$estado = $_POST['estado'];
$id = $_POST['id'];



// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para actualizar el estado si existe un registro con los mismos valores de nombre, marca y modelo
$sql = "UPDATE Informe SET Estado = '$estado' WHERE Id = '$id'";


if ($conn->query($sql) === TRUE) {
    if ($conn->affected_rows > 0) {
        // Se actualizó correctamente el estado de un registro existente
        echo "Estado actualizado exitosamente";
    } else {
        // No se encontró un registro coincidente, el estado no se actualizó
        echo "No se encontró un registro coincidente para actualizar el estado";
    }
} else {
    // Ocurrió un error al actualizar el estado
    echo "Error al actualizar el estado: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
