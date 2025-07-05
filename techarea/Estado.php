<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Consultas</title>
  <link rel="stylesheet" type="text/css" href="consult.css">
</head>
<body>

  <button id="toggleMenu">&#9776;</button>
  <nav id="sidebar">

    <ul>
      <li><a href="Home_Tecnico.html">Inicio</a></li>
      <li><a href="Consultass.php">Estado de Productos</a></li>
      <li class="footer-item"><a href="Logout.php">Cerrar Sesion</a></li>
    </ul>
  </nav>

<main>

  <div class="search-container">
    <center>
    <input type="text" id="search-input" placeholder="Buscar...">
    <button type="button" id="search-button">Buscar</button>
  </center>
  </div>
  
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Factura</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Serie</th>
        <th>Fecha de Reclamo</th>
        <th>Estado</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
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

        // Consulta SQL para obtener los datos de la tabla Informe
        $sql = "SELECT Id, Nombre, Factura, Marca, Modelo, Serie, FechaDeReclamo, Estado FROM Informe";

        // Ejecutar la consulta y obtener los resultados
        $result = $conn->query($sql);

        // Verificar si se obtuvieron resultados
        if ($result->num_rows > 0) {
            // Recorrer los resultados y generar las filas de la tabla
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['Id'] . '</td>';
                echo '<td>' . $row['Nombre'] . '</td>';
                echo '<td>' . $row['Factura'] . '</td>';
                echo '<td>' . $row['Marca'] . '</td>';
                echo '<td>' . $row['Modelo'] . '</td>';
                echo '<td>' . $row['Serie'] . '</td>';
                echo '<td>' . $row['FechaDeReclamo'] . '</td>';
                echo '<td>';
                echo '<select class="estado-select">';
                echo '<option value="requiere_cambio">Requiere cambio</option>';
                echo '<option value="revisado">Revisado</option>';
                echo '<option value="en_revision">En revisión</option>';
                echo '</select>';
                echo '</td>';
                echo '<td>';
                echo '<button class="guardar-estado-btn">Guardar Estado</button>';
                echo '</td>';
                echo '</tr>';
            }
        } else {
            // No se encontraron resultados en la tabla
            echo '<tr><td colspan="8">No se encontraron datos</td></tr>';
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
      ?>
    </tbody>
  </table>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="busqueda.js"></script>
<script>
$(document).ready(function() {
  // Evento clic del botón "Guardar Estado"
  $('.guardar-estado-btn').on('click', function() {
    // Obtener el valor del estado seleccionado
    var estado = $(this).closest('tr').find('.estado-select').val();
    
    // Obtener el valor del ID
    var id = $(this).closest('tr').find('td:first-child').text();
    
    // Realizar la solicitud AJAX para guardar el estado en la base de datos
    $.ajax({
      url: 'guardar_estado.php', // Ruta al archivo PHP que procesará la solicitud
      method: 'POST',
      data: { estado: estado, id: id }, // Incluir solo el ID en los datos POST
      success: function(response) {
        // La solicitud se completó con éxito
        console.log(response);
      },
      error: function(xhr, status, error) {
        // Ocurrió un error durante la solicitud AJAX
        console.error(error);
      }
    });
  });
});

</script>


</main>
  <script src="script.js"></script>
</body>
</html>
