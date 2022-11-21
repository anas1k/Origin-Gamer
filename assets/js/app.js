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

function GetProduct(id, idCategory) {
    // initialiser Product form
    document.getElementById('form').reset();

    document.getElementById('saveProduct').style.display = 'none';
    document.getElementById('editProduct').style.display = 'block';

    // Initialisez Product form
    $('#productModal').modal('show');
    console.log(id);

    document.getElementById('NameInput').value = document.querySelector(`#ProductName${id}`).innerText;

    document.getElementById('CategoryInput').value = idCategory;

    document.getElementById('DescriptionInput').value = document.querySelector(`#ProductDescription${id}`).innerText;

    document.getElementById('PriceInput').value = document.querySelector(`#ProductPrice${id}`).innerText;

    document.getElementById('IdInput').value = id;

    let file = document.querySelector('#PictureInput');
    let pic = document.querySelector(`#ProductPicture${id}`);
    let picTitle = pic.getAttribute('src');
    console.log(picTitle);
    file.setAttribute('data-default-file', picTitle);
    $('.dropify').dropify();
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
    // SweetAlert2 pop up
    Swal.fire({
        background: '#1e1e2d',
        color: '#F0F6FC',
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
            Swal.fire({ background: '#1e1e2d', color: '#F0F6FC', title: 'Deleted!', text: 'Your category has been deleted, redirecting to category page. ', icon: 'error' });
            // using ajax to send data withut refresh
            setTimeout(function () {
                $.ajax({
                    url: '../include/require.php',
                    type: 'POST',
                    data: { deleteCategoryForm: id },
                    dataType: 'html',
                    success: function () {
                        // refresh page
                        location.reload();
                    },
                });
            }, 3000);
        }
    });
}

function deleteProduct(id) {
    // Delete action confirmation using SweetAlert2 combined with Ajax
    // SweetAlert2 pop up
    Swal.fire({
        background: '#1e1e2d',
        color: '#F0F6FC',
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
            Swal.fire({ background: '#1e1e2d', color: '#F0F6FC', title: 'Deleted!', text: 'Your product has been deleted, redirecting to products page. ', icon: 'error' });
            // using ajax to send data withut refresh
            setTimeout(function () {
                $.ajax({
                    url: '../include/require.php',
                    type: 'POST',
                    data: { deleteProductForm: id },
                    dataType: 'html',
                    success: function () {
                        // refresh page
                        location.reload();
                    },
                });
            }, 3000);
        }
    });
}
