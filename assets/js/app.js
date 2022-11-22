/**
 * In this file app.js you will find all CRUD functions name.
 *
 */

// declaring validation inputs and spans
let Title = document.getElementById('NameInput'),
    Description = document.getElementById('DescriptionInput'),
    TitleSpan = document.getElementById('ValidateName'),
    DescriptionSpan = document.getElementById('ValidateDescription');

// event listener for saveValidation
$('#saveProduct').on('click', function (e) {
    if (Title.value == '' || !/^[a-z A-Z]{5,}$/.test(Title.value)) {
        e.preventDefault();

        Description.setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        DescriptionSpan.innerText = '';

        Title.setAttribute('style', 'color:red; border: 1px red solid ;');
        TitleSpan.innerText = 'Veuillez entrer un nom valide ! verifiez que le nom contient au minimum 5 caractéres et sans caractéres speciaux!!';
        TitleSpan.setAttribute('style', 'color:red;font-size:10px;');
    } else if (Description.value == '' || !/^[a-z A-Z.:,]{5,}$/.test(Description.value)) {
        ee.preventDefault();

        Title.setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        TitleSpan.innerText = '';

        Description.setAttribute('style', 'color:red; border: 1px red solid ;');
        DescriptionSpan.innerText = 'Veuillez entrer une description valide ! verifiez que la description contient au minimum 5 caractéres!!';
        DescriptionSpan.setAttribute('style', 'color:red;font-size:10px;');
    }
});

// event listener for updateValidation
$('#updateProduct').on('click', function (ee) {
    if (Title.value == '' || !/^[a-z A-Z]{5,}$/.test(Title.value)) {
        ee.preventDefault();

        Description.setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        DescriptionSpan.innerText = '';

        Title.setAttribute('style', 'color:red; border: 1px red solid ;');
        TitleSpan.innerText = 'Veuillez entrer un nom valide ! verifiez que le nom contient au minimum 5 caractéres et sans caractéres speciaux!!';
        TitleSpan.setAttribute('style', 'color:red;font-size:10px;');
    } else if (Description.value == '' || !/^[a-z A-Z.:,/]{5,}$/.test(Description.value)) {
        ee.preventDefault();

        Title.setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        TitleSpan.innerText = '';

        Description.setAttribute('style', 'color:red; border: 1px red solid ;');
        DescriptionSpan.innerText = 'Veuillez entrer un nom valide ! verifiez que le nom contient au minimum 5 caractéres!!';
        DescriptionSpan.setAttribute('style', 'color:red;font-size:10px;');
    }
});

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

    document.getElementById('QuantityInput').value = document.querySelector(`#ProductQuantity${id}`).innerText;

    document.getElementById('IdInput').value = id;

    let file = document.querySelector('#PictureInput');
    let pic = document.querySelector(`#ProductPicture${id}`);
    let picTitle = pic.getAttribute('src');
    console.log(picTitle);
    file.setAttribute('data-default-file', picTitle);
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
            }, 2500);
        }
    });
}

function deleteProduct(id) {
    // Delete action confirmation using SweetAlert2 combined with Ajax
    // SweetAlert2 pop up
    Swal.fire({
        background: '#1e1e2d',
        color: '#F0F6FC',
        title: 'Are you sure you want to delete this product?',
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
