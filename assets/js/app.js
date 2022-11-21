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

    document.getElementById('NameInput').value = document.querySelector(`#ProductName${id}`).innerText;

    /* document.getElementById('categoryInput').innerText = document.querySelector(`#ProductCategory${id}`).innerText; */

    document.getElementById('DescriptionInput').value = document.querySelector(`#ProductDescription${id}`).innerText;

    document.getElementById('PriceInput').value = document.querySelector(`#ProductPrice${id}`).innerText;
    /*  let file = document.querySelector('#PictureInput');
    file.setAttribute('value', document.querySelector(`#ProductPicture${id}`).innerText); */
}

function GetCategory(id) {
    // initialiser Product form

    document.getElementById('saveCategory').style.display = 'none';
    document.getElementById('editButton').style.display = 'block';

    document.getElementById('NameInput').value = document.querySelector(`#CategoryName${id}`).innerText;
    document.getElementById('idInput').value = id;
}

function deleteCategory(id) {
    // Delete action confirmation using SweetAlert2 combined with Ajax

    // prevent Reload of page
    /* event.preventDefault(); */

    // SweetAlert2 pop up
    Swal.fire({
        title: 'Are you sure you want to delete this category?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
    }).then((result) => {
        // after confirmation is succesfull
        if (result.isConfirmed) {
            Swal.fire('Deleted!', 'Your category has been deleted.', 'success');
            // using ajax to send data withut refresh
            $.ajax({
                url: '../include/require.php',
                type: 'POST',
                data: { deleteCategoryFrom: id },
                dataType: 'html',
                success: function () {},
            });
        }
    });
}
