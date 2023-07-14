function sortInvoices() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.querySelector(".section-invoices__table table");
    switching = true;
  
    while (switching) {
      switching = false;
      rows = table.rows;
  
      for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
        x = rows[i].getElementsByTagName("td")[3]; 
        y = rows[i + 1].getElementsByTagName("td")[3]; 
  
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
  
      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }
  
  function searchInvoices() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search_invoices");
    filter = input.value.toUpperCase();
    table = document.querySelector(".section-invoices__table table");
    tr = table.getElementsByTagName("tr");
  
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1]; 
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  
    sortInvoices(); // Appeler la fonction pour trier le tableau après la recherche
  }
  