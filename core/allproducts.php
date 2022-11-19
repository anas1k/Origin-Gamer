<?php
    include('../include/require.php');
    $path = "Products";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include_once('../include/head.php'); ?>
    </head>
    <body class="background">
        <?php include_once('../include/nav.php'); ?>
        <div class="container-fluid">
            <main class="content col-md-9 ml-sm-auto col-lg-10 px-md-4 p-4 text-white">
                <nav aria-label="breadcrumb"></nav>
                <h1 class="h2"><?= $path ?></h1>
                <p>This is the page containing all available products in stock</p>
                <div class="row">
                    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                        <div class="card">
                            <div class="d-flex justify-content-between align-items-center card-header m-2">
                                <h5 >All Products</h5>
                                <div class=" justify-content-end">
                                    <a class="btn rounded-pill btn-primary" data-bs-toggle="modal" data-bs-target="#productModal">
                                        <i class="fa fa-plus fa-lg"></i>
                                        Add Product
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-white">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Picture</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($AllProducts as $product) {?>
                                            <tr>
                                                <th scope="row"><?= $product['idProduct']; ?></th>
                                                <td><?= $product['nameProduct']; ?></td>
                                                <td><?= $product['nameCategory']; ?></td>
                                                <td><img src="<?= $product['picture']; ?>" style="width7rem; height: 4rem" /></td>
                                                <td><?= $product['price'].'$'; ?></td>
                                                <td><?= $product['description']; ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="" class="btn btn-block btn-dark">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="d-flex justify-content-end">
                    <span>Copyright © 2022 BY Anass KASSEMI</span>
                </footer>
            </main>
        </div>

        <!-- PRODUCT MODAL -->
        <div class="modal fade " id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered mt-3 mb-1">
                <div class="modal-content background text-white">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Add Product</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 pb-1">
                        <form id="form" method="post">
                            <div class="mb-0">
                                <label for="taskName" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="NameInput" name="nameInput" />
                                <div id="ValidateName"></div>
                            </div>
                            <div class="mb-0">
                                <label for="taskCategory" class="col-form-label">Category</label>
                                <select class="form-select" id="CategoryInput" name="categoryInput" required>
                                    <option value selected disabled>Please select</option>
                                    <?php foreach($AllCategories as $category) {
                                        echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                                    } ?>    
                                    
                                </select>
                            </div>
                            <input style="display: none" id="IdInput" name="idInput" />
                            <div class="mb-0">
                                <label for="taskPicture" class="col-form-label">Picture</label>
                                <input class="form-control" type="file" required id="PictureInput" name="pictureInput" />
                            </div>
                            <div class="mb-0">
                                <label for="taskPrice" class="col-form-label">Price</label>
                                <input type="number" class="form-control" id="PriceInput" name="priceInput" /> 
                                <div id="ValidatePrice"></div>
                            </div>    
                            <div class="mb-0">
                                <label for="taskDate" class="col-form-label">Description</label>
                                <textarea class="form-control" id="DescriptionInput" required rows="8" name="descriptionInput"></textarea>
                                <span id="ValidateDescription"></span>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-outline-dark text-black" data-bs-dismiss="modal">Cancel</button>
                                <button id="saveTask" type="submit" name="addProductForm"  class="btn btn-primary">Save</button>
                                <div id="editTask" style="display: none">
                                    <button type="submit" id="deleteValidation" name="deleteProductFrom" class="btn btn-danger text-black">Delete</button>
                                    <button id="updateTask" type="submit" name="updateProductForm" class="btn btn-warning text-black">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
