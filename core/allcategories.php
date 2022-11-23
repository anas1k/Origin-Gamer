<?php
    include('../include/require.php');
    $path = "Category";
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
                <p>This is the page containing all available category in stock</p>
                <div class="row">
                    <div class="col-12 col-xs-4 col-md-4 col-xl-4 mb-4 mb-lg-0">
                        <div class="card">
                            <div class="d-flex justify-content-between align-items-center card-header m-2">
                                <h5 >Add Category</h5>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <form id="form" method="POST">
                                        <div class="mb-0">
                                            <label class="col-form-label">Name</label>
                                            <input type="text" class="form-control" id="NameInput" name="name"  required/>
                                            <input type="hidden" class="form-control" id="idInput" name="id"  />
                                            <div id="ValidateName"></div>
                                        </div>

                                        <div class="mt-2 d-flex justify-content-end">
                                            <div id="addButton" style="display: block">
                                                <button id="saveCategory" type="submit" name="addCategoryForm"  class="btn btn-primary">Add</button>
                                            </div>
                                            <div id="editButton" style="display: none">
                                                <button type="submit" name="editCategoryForm" class="btn btn-warning">Modify</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 col-xl-8 mb-4 mb-lg-0">
                        <div class="card">
                            <div class="d-flex justify-content-between align-items-center card-header m-2">
                                <h5 >All Categories</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-white">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($AllCategories as $Category) {?>
                                            <tr id="Category<?= $Category['id']; ?>">
                                                <th scope="row"><?= $Category['id']; ?></th>
                                                <td id="CategoryName<?= $Category['id']; ?>" ><?= $Category['name']; ?></td>
                                                <td>
                                                    <a href="#" onclick="GetCategory('<?= $Category['id']; ?>')" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="#" onclick="deleteCategory('<?= $Category['id']; ?>')" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php include_once('../include/footer.php'); ?>
            </main>
        </div>
        
    </body>
</html>
