/**
 * In this file app.js you will find all CRUD functions name.
 *
 */

// event listener for saveValidation
$('#saveProduct').click(function (e) {
    if (document.getElementById('NameInput').value == '' || !/^[a-z A-Z 0-9]{5,}$/.test(document.getElementById('NameInput').value)) {
        e.preventDefault();

        document.getElementById('DescriptionInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('ValidateDescription').innerText = '';

        document.getElementById('NameInput').setAttribute('style', 'color:red; border: 1px red solid ;');

        document.getElementById('ValidateName').innerText = 'Veuillez entrer un nom valide ! verifiez que le nom contient au minimum 5 caractéres et sans caractéres speciaux!!';
        document.getElementById('ValidateName').setAttribute('style', 'color:red;font-size:10px;');
    } else if (document.getElementById('DescriptionInput').value == '' || !/^[a-z A-Z 0-9.:,]{5,}$/.test(document.getElementById('DescriptionInput').value)) {
        e.preventDefault();

        document.getElementById('NameInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('ValidateName').innerText = '';

        document.getElementById('DescriptionInput').setAttribute('style', 'color:red; border: 1px red solid ;');
        document.getElementById('ValidateDescription').innerText = 'Veuillez entrer une description valide ! verifiez que la description contient au minimum 5 caractéres!!';
        document.getElementById('ValidateDescription').setAttribute('style', 'color:red;font-size:10px;');
    } else if (document.getElementById('PictureFileField').classList.contains('has-preview') == false) {
        e.preventDefault();

        document.getElementById('NameInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('ValidateName').innerText = '';

        document.getElementById('DescriptionInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('ValidateDescription').innerText = '';

        document.getElementById('ValidatePicture').setAttribute('class', 'text-danger');
        document.getElementById('ValidatePicture').innerText = 'Veuillez choisr un fichier photo ! verifiez que la photo contient au maximum 10MB !!';
        document.getElementById('PictureFileField').setAttribute('style', 'height:10rem; border-radius: 1em !important;background-color: #151521 !important;border-color:red;font-size:10px;');
    }
});

// event listener for updateValidation
$('#updateProduct').click(function (ee) {
    if (document.getElementById('NameInput').value == '' || !/^[a-z A-Z 0-9]{5,}$/.test(document.getElementById('NameInput').value)) {
        ee.preventDefault();

        document.getElementById('DescriptionInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('ValidateDescription').innerText = '';

        document.getElementById('NameInput').setAttribute('style', 'color: red; border: 1px red solid;');
        document.getElementById('ValidateName').innerText = 'Veuillez entrer un nom valide ! verifiez que le nom contient au minimum 5 caractéres et sans caractéres speciaux!!';
        document.getElementById('ValidateName').setAttribute('style', 'color:red;font-size:10px;');
    } else if (document.getElementById('DescriptionInput').value == '' || !/^[a-z A-Z 0-9.:,/]{5,}$/.test(document.getElementById('DescriptionInput').value)) {
        ee.preventDefault();

        document.getElementById('NameInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('ValidateName').innerText = '';

        document.getElementById('DescriptionInput').setAttribute('style', 'color:red; border: 1px red solid ;');
        document.getElementById('ValidateDescription').innerText = 'Veuillez entrer un nom valide ! verifiez que le nom contient au minimum 5 caractéres!!';
        document.getElementById('ValidateDescription').setAttribute('style', 'color:red;font-size:10px;');
    } else if (document.getElementById('PictureFileField').classList.contains('has-preview') == false) {
        ee.preventDefault();

        document.getElementById('NameInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('ValidateName').innerText = '';

        document.getElementById('DescriptionInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('ValidateDescription').innerText = '';

        document.getElementById('ValidatePicture').setAttribute('class', 'text-danger');
        document.getElementById('ValidatePicture').innerText = 'Veuillez choisr un fichier photo ! Verifiez que la photo contient au maximum 10MB !!';
        document.getElementById('PictureFileField').setAttribute('style', 'height:10rem; border-radius: 1em !important;background-color: #151521 !important;border-color:red;font-size:10px;');
    }
});

// event listener for loginValidation
$('#LoginUser').click(function (e) {
    if (document.getElementById('EmailInput').value == '' || !/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/.test(document.getElementById('EmailInput').value)) {
        e.preventDefault();

        document.getElementById('PasswordInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('ValidatePassword').innerText = '';

        document.getElementById('EmailInput').setAttribute('style', 'color: red;border: 1px red solid;');
        document.getElementById('ValidateEmail').innerText = "Veuillez entrer un email valide ! Verifiez que l'email sans caractéres speciaux!!";
        document.getElementById('ValidateEmail').setAttribute('style', 'color:red;font-size:10px;');
    } else if (document.getElementById('PasswordInput').value == '' || !/^[a-z A-Z0-9]{5,}$/.test(document.getElementById('PasswordInput').value)) {
        e.preventDefault();

        document.getElementById('EmailInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
        document.getElementById('ValidateEmail').innerText = '';

        document.getElementById('PasswordInput').setAttribute('style', 'color:red; border: 1px red solid ;');
        document.getElementById('ValidatePassword').innerText = 'Veuillez entrer un mot de passe valide ! Verifiez que le mot de passe contient au minimum 5 caractéres et sans caractéres speciaux!!';
        document.getElementById('ValidatePassword').setAttribute('style', 'color:red;font-size:10px;');
    }
});

function createProduct() {
    // initialiser Product form
    document.getElementById('form').reset();

    // Afficher le boutton save
    document.getElementById('saveProduct').style.display = 'block';
    document.getElementById('editProduct').style.display = 'none';

    // Ouvrir modal form
    $('#productModal').modal('show');

    // Initialise Validation
    document.getElementById('DescriptionInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
    document.getElementById('ValidateDescription').innerText = '';

    document.getElementById('NameInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
    document.getElementById('ValidateName').innerText = '';
    document.getElementById('ValidatePicture').innerText = '';
    document.getElementById('PictureFileField').setAttribute('style', 'border-radius: 1em !important; background-color: #151521 !important;');
    document.getElementById('PictureFileField').setAttribute('class', 'dropify-wrapper');
    document.getElementById('PictureInput').setAttribute('data-default-file', '');
    document.getElementById('PreviewFileField').setAttribute('style', 'display:none;');
}

function GetProduct(id, idCategory) {
    // initialise Product form
    document.getElementById('form').reset();

    document.getElementById('saveProduct').style.display = 'none';
    document.getElementById('editProduct').style.display = 'block';

    // Initialise Product form
    $('#productModal').modal('show');

    // Initialise Validation
    document.getElementById('DescriptionInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
    document.getElementById('ValidateDescription').innerText = '';

    document.getElementById('NameInput').setAttribute('style', 'color:black; border: 1px #ced4da solid ;');
    document.getElementById('ValidateName').innerText = '';

    /* console.log(id); */

    document.getElementById('NameInput').value = document.querySelector(`#ProductName${id}`).innerText;

    document.getElementById('CategoryInput').value = idCategory;

    document.getElementById('DescriptionInput').value = document.querySelector(`#ProductDescription${id}`).innerText;

    document.getElementById('PriceInput').value = document.querySelector(`#ProductPrice${id}`).innerText;

    document.getElementById('QuantityInput').value = document.querySelector(`#ProductQuantity${id}`).innerText;

    document.getElementById('IdInput').value = id;

    // getting the image path from the image tag and setting it to the input field and previewing it
    let picTitle = document.querySelector(`#ProductPicture${id}`).getAttribute('src');
    /* console.log(picTitle); */
    document.getElementById('PictureInput').setAttribute('src', picTitle);
    document.getElementById('PictureFileField').setAttribute('class', 'dropify-wrapper has-preview');
    document.getElementById('PreviewFileField').setAttribute('style', 'display:block;');
    document.querySelector('.dropify-render').innerHTML = `<img src="${picTitle}" alt="Picture" style="max-height: 100px;"/>`;
    document.getElementById('ValidatePicture').setAttribute('class', 'text-success');
    document.getElementById('ValidatePicture').innerText = 'Photo précédente deja selectionné ! Si vous voulez changer la photo veuillez entrer une nouvelle photo !!';
    document.getElementById('PictureFileField').setAttribute('style', 'height:10rem; border-radius: 1em !important;background-color: #151521 !important;border-color:green;font-size:10px;');
}

function DeleteProduct(id) {
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
            Swal.fire({ background: '#1e1e2d', color: '#F0F6FC', title: 'Deleted!', text: 'Your product has been deleted successfully. ', icon: 'error' });
            // using ajax to send data without refresh
            $.ajax({
                url: '../include/require.php',
                type: 'POST',
                data: { deleteProductForm: id },
                dataType: 'html',
                success: function () {
                    // removing element from dom
                    document.querySelector(`#Product${id}`).remove();
                },
            });
        }
    });
}

function GetCategory(id) {
    // initialiser Category form

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
            Swal.fire({ background: '#1e1e2d', color: '#F0F6FC', title: 'Deleted!', text: 'Your category has been deleted successfully. ', icon: 'error' });
            // using ajax to send data without refresh
            $.ajax({
                url: '../include/require.php',
                type: 'POST',
                data: { deleteCategoryForm: id },
                dataType: 'html',
                success: function () {
                    // removing element from dom
                    document.querySelector(`#Category${id}`).remove();
                },
            });
        }
    });
}
