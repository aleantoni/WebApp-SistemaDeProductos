<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" type="text/css" href="LoginS.css">
</head>
<body>

<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Skyvoid";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

//Verificar si se enviaron los datos del formulario
if (isset($_POST['correo']) && isset($_POST['contraseña'])) {
// Obtener los datos enviados por el formulario
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Consulta SQL para verificar las credenciales del usuario
$sql = "SELECT * FROM Userwork WHERE correo = '$correo' AND contraseña = '$contraseña'";
$result = $conn->query($sql);

// Verificar si se encontró una coincidencia
if ($result->num_rows > 0) {
    // Inicio de sesión exitoso, redireccionar al siguiente HTML
    header("Location: Home_Trabajador_de_Area.html");
    exit();
} else {
    // Las credenciales son incorrectas, mostrar un mensaje de error
    echo "Usuario o contraseña incorrectos";
}
}

// Cerrar la conexión a la base de datos
$conn->close();
?>


  <div class="container">
    <div class="logo">
      <img src="Img/logo.png" alt="Logo de la empresa">
    </div>
    <form class="login-form" action="Login_Trabajador_de_Area.php" method="POST">
      <h2>Iniciar sesión</h2>
      <input type="text" name="correo"  placeholder="Correo" required>
      <input type="password" name="contraseña" placeholder="Contraseña" required>
      <button type="submit">Ingresar</button>
      <br>
      <br>
      <li><a href="techarea/Login_Tecnico.php">Login para Tecnicos de Taller</a></li>
    </form>
  </div>
</body>
</html>
