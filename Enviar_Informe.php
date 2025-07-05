<!DOCTYPE html>
<html>
<head>
  <title>Enviar Informe</title>
  <link rel="icon" type="image/png" href="ruta/imagen.png">
  <link rel="stylesheet" type="text/css" href="reporte.css">
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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
// Obtener los valores de los campos de texto
$nombre = $_POST['field1'];
$telefono = $_POST['field2'];
$factura = $_POST['field3'];
$fechaCompra = $_POST['field4'];
$correo = $_POST['field5'];
$detalles = $_POST['field6'];
$daño = $_POST['field7'];
$marca = $_POST['field8'];
$modelo = $_POST['field9'];
$serie = $_POST['field10'];
$fechaReclamo = $_POST['field11'];
$accesorio = $_POST['field12'];
$firmaCliente = $_POST['field13'];
$firmaPanafoto = $_POST['field14'];

// Consulta SQL para insertar los valores en la tabla
$sql = "INSERT INTO Informe (Nombre, Telefono, Factura, FechaDeCompra, Correo, Detalles, Daño, Marca, Modelo, Serie, FechaDeReclamo, Accesorios, FirmaDelCliente, FirmaDePanafoto) VALUES ('$nombre', '$telefono', '$factura', '$fechaCompra', '$correo', '$detalles', '$daño', '$marca', '$modelo', '$serie', '$fechaReclamo', '$accesorio', '$firmaCliente', '$firmaPanafoto')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Los valores se han enviado correctamente.');</script>";
} else {
    echo "<script>alert('Error al enviar los valores: " . $conn->error . "');</script>";
}
}
// Cerrar la conexión a la base de datos
$conn->close();
?>


  <button id="toggleMenu">&#9776;</button>
  <nav id="sidebar">

    <ul>
      <li><a href="Home_Trabajador_de_Area.html">Inicio</a></li>
      <li><a href="Enviar_Informe.php">Enviar Informe a Taller</a></li>
      <li><a href="Consultas.php">Estado de Productos</a></li>
      <li class="footer-item"><a href="Logout.php">Cerrar Sesion</a></li>
    </ul>
  </nav>
  <main>
    
  <form action="Enviar_Informe.php" method="POST">

    <div class="form-container">
  <div class="column">
    <label for="field1">Nombre:</label>
    <input type="text" id="field1" name="field1">

    <label for="field2">Teléfono:</label>
    <input type="text" id="field2" name="field2">

    <label for="field3">Factura:</label>
    <input type="text" id="field3" name="field3">

    <label for="field4">Fecha de Compra:</label>
    <input type="text" id="field4" name="field4">

    <label for="field5">Correo:</label>
    <input type="text" id="field5" name="field5">

    <label for="field6">Detalles:</label>
    <input type="text" id="field6" name="field6">

    <label for="field7">Daño:</label>
    <input type="text" id="field7" name="field7">
  </div>

  <div class="column">
    <label for="field8">Marca:</label>
    <input type="text" id="field8" name="field8">

    <label for="field9">Modelo:</label>
    <input type="text" id="field9" name="field9">

    <label for="field10">Serie:</label>
    <input type="text" id="field10" name="field10">

    <label for="field11">Fecha de Reclamo:</label>
    <input type="text" id="field11" name="field11">

    <label for="field12">Accesorios:</label>
    <input type="text" id="field12" name="field12">

    <label for="field13">Firma del cliente</label>
    <input type="text" id="field13" name="field13">

    <label for="field14">Firma de Panafoto:</label>
    <input type="text" id="field14" name="field14">

  </div>
</div>
  <center>
     <button type="submit">Enviar Reporte</button>
   </center>
 </form>
  </main>
  <script src="script.js"></script>
</body>
</html>