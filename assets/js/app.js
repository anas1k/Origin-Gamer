/**
 * In this file app.js you will find all CRUD functions name.
 *
 */

function createProduct() {
    // initialiser Product form
    document.getElementById('form').reset();

    // Afficher le boutton save
    document.getElementById('saveProduct').style.display = 'block';
    document.getElementById('editProduct').style.display = 'none';
    // add class list

    // Ouvrir modal form
    $('#productModal').modal('show');
}

function GetProduct(id) {
    // initialiser Product form
    document.getElementById('form').reset();

    document.getElementById('saveProduct').style.display = 'none';
    document.getElementById('editProduct').style.display = 'block';

    // Initialisez Product form
    $('#productModal').modal('show');
    console.log(id);

    document.getElementById('NameInput').value = document.querySelector(`#ProducttName${id}`).innerText;
}
