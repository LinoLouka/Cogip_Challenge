function sortContacts() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.querySelector(".section-contacts__table table");
  switching = true;

  var sortBy = document.getElementById("sort_contacts").value; // Récupérer la valeur de tri sélectionnée

  while (switching) {
    switching = false;
    rows = table.rows;

    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("td")[1];
      y = rows[i + 1].getElementsByTagName("td")[1];

      // Effectuer le tri en fonction du critère sélectionné
      switch (sortBy) {
        case "id":
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
          }
          break;
        case "name":
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
          }
          break;
        case "phone":
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
          }
          break;
        case "email":
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
          }
          break;
        case "company":
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
          }
          break;
        case "created_at":
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            shouldSwitch = true;
          }
          break;
      }

      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }

  // Afficher uniquement la colonne sélectionnée
  var columnIndex = getSelectedColumnIndex(sortBy);
  showSelectedColumn(columnIndex);
}

function getSelectedColumnIndex(sortBy) {
  switch (sortBy) {
    case "id":
      return 0;
    case "name":
      return 1;
    case "phone":
      return 2;
    case "email":
      return 3;
    case "company":
      return 4;
    case "created_at":
      return 5;
    default:
      return -1;
  }
}

function showSelectedColumn(columnIndex) {
  var table = document.querySelector(".section-contacts__table table");
  var rows = table.rows;

  for (var i = 0; i < rows.length; i++) {
    var cells = rows[i].getElementsByTagName("td");

    for (var j = 0; j < cells.length; j++) {
      if (j === columnIndex) {
        cells[j].style.display = "";
      } else {
        cells[j].style.display = "none";
      }
    }
  }
}
