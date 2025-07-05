document.addEventListener("DOMContentLoaded", function() {
  var searchButton = document.getElementById("search-button");
  var searchInput = document.getElementById("search-input");
  var table = document.querySelector("table");
  var rows = table.getElementsByTagName("tr");

  searchButton.addEventListener("click", performSearch);
  searchInput.addEventListener("input", performSearch);

  function performSearch() {
    var searchTerm = searchInput.value.trim().toLowerCase();

    for (var i = 1; i < rows.length; i++) {
      var row = rows[i];
      var cells = row.getElementsByTagName("td");
      var found = false;

      if (searchTerm === "") {
        row.style.display = ""; // Mostrar todas las filas si el término de búsqueda está vacío
      } else {
        for (var j = 0; j < cells.length; j++) {
          var cell = cells[j];

          if (cell.textContent.toLowerCase().indexOf(searchTerm) > -1) {
            found = true;
            break;
          }
        }

        if (found) {
          row.style.display = ""; // Mostrar fila si se encontró la coincidencia
        } else {
          row.style.display = "none"; // Ocultar fila si no se encontró la coincidencia
        }
      }
    }
  }
});
