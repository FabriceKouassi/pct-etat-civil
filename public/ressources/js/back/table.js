// Fonction de filtre du tableau
function filterTable() {
    let searchName = document.getElementById('search-name').value.toLowerCase();
    let searchStatus = document.getElementById('search-status').value.toLowerCase();
    let rows = document.getElementById('data-table').getElementsByTagName('tr');

    for (let i = 1; i < rows.length; i++) {
    let cells = rows[i].getElementsByTagName('td');
    let nameCell = cells[0].textContent.toLowerCase();
    let statusCell = cells[2].textContent.toLowerCase();

    if (nameCell.includes(searchName) && (statusCell.includes(searchStatus) || searchStatus === "")) {
        rows[i].style.display = "";
    } else {
        rows[i].style.display = "none";
    }
    }
}

