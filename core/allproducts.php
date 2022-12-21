<?php
    include('../include/require.php');
    $path = "Products";
    if(!isset($_SESSION['fullname'])){
        $_SESSION['icon'] = "error";
        $_SESSION['message'] = "Veuillez saisir votre email et mot de passe";
        header('Location: ../core/login.php');
        die;
    }
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
                                    <a class="btn rounded-pill btn-success px-3" onclick="createProduct()">
                                        <i class="fa fa-plus mr-2"></i>
                                        <b>Add Product</b>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-white">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Picture</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Price $(USD)</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Description</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($AllProducts as $product) {?>
                                            <tr id="Product<?= $product['idProduct']; ?>" >
                                                <th scope="row"><?= $product['idProduct']; ?></th>
                                                <?php if(!empty($product['picture'])){
                                                    echo '<td><img id="ProductPicture'. $product['idProduct'].'" src="'.$product['picture'].'" style="width:4rem;" /></td>';
                                                }else{
                                                    echo '<td><img class="m-0" src="../assets/img/logo/frame.png" style="width:4rem;height: 4.7rem;" /></td>';
                                                    } ?>
                                                <td id="ProductName<?= $product['idProduct']; ?>" ><?= $product['nameProduct']; ?></td>
                                                <td id="ProductCategory<?= $product['idProduct']; ?>"><?= $product['nameCategory']; ?></td>
                                                <td id="ProductPrice<?= $product['idProduct']; ?>"><?= $product['price']; ?></td>
                                                <td id="ProductQuantity<?= $product['idProduct']; ?>"><?= $product['quantity']; ?></td>
                                                <td id="ProductDescription<?= $product['idProduct']; ?>"><?= $product['description']; ?></td>
                                                <td>
                                                    <a href="#" onclick="GetProduct('<?= $product['idProduct']; ?>','<?= $product['idCategory']; ?>')" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="#" onclick="DeleteProduct('<?= $product['idProduct']; ?>')" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- <a href="" class="btn btn-block btn-dark">View all</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                

            <!-- PRODUCT MODAL -->
            <div class="modal fade " id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered mt-3 mb-1">
                    <div class="modal-content background text-white">
                        <div class="modal-header">
                            <h5 class="" id="exampleModalLabel">Add Product</h5>
                            <button type="button" class="fa fa-xmark px-1 p-0 m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pt-0 pb-1">
                            <form id="form" method="POST" enctype="multipart/form-data" >
                                <div class="mb-0">
                                    <label class="col-form-label">Name</label>
                                    <input type="text" class="form-control" id="NameInput" name="name" />
                                    <div id="ValidateName"></div>
                                </div>
                                <div class="mb-0">
                                    <label for="productCategory" class="col-form-label">Category</label>
                                    <select class="form-select" id="CategoryInput" name="idCategory" required>
                                        <option value selected disabled>Please select</option>
                                        <?php foreach($AllCategories as $category) {
                                            echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                                        } ?>    
                                        
                                    </select>
                                </div>
                                <input type="hidden" id="IdInput" name="id" />
                                <div class="mb-0">
                                    <label class="col-form-label">Picture</label>
                                    <div id="">
                                        <input id="PictureInput" class="dropify" data-max-file-size-preview="10M" data-height="100" type="file"  name="picture"  />
                                        <div id="ValidatePicture" class="text-success"></div>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <label class="col-form-label">Price $(USD)</label>
                                    <input type="number" step=0.01 class="form-control" id="PriceInput" name="price" /> 
                                    <div id="ValidatePrice"></div>
                                </div>    
                                <div class="mb-0">
                                    <label class="col-form-label">Quantity</label>
                                    <input type="number" class="form-control" id="QuantityInput" name="quantity" />
                                    <div id="ValidateQuantity"></div>
                                </div>    
                                <div class="mb-0">
                                    <label class="col-form-label">Description</label>
                                    <textarea class="form-control" id="DescriptionInput" rows="8" name="description"></textarea>
                                    <span id="ValidateDescription"></span>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-outline-light text-black" data-bs-dismiss="modal">Cancel</button>
                                    <button id="saveProduct" type="submit" name="addProductForm" class="btn btn-primary">Save</button>
                                    <div id="editProduct" style="display: none">
                                        <!-- <button type="submit" id="deleteValidation" name="deleteProductForm" class="btn btn-danger text-black">Delete</button> -->
                                        <button id="updateProduct" type="submit" name="updateProductForm" class="btn btn-warning text-black">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once('../include/footer.php'); ?>
            </main>
        </div>
    
    </body>
</html>
