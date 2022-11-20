<?php
    include('../include/require.php');
    $path = "Home";

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
                <p>This is the homepage of a simple admin interface</p>
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Users</h5>
                            <div class="card-body">
                                <h5 class="card-title">345</h5>
                                <p class="card-text text-success">18.2% increase since last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Products</h5>
                            <div class="card-body">
                                <h5 class="card-title"><?= CountProducts() -> num_rows; ?></h5>
                                <p class="card-text text-success">4.6% increase since last month</p>
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Purchases</h5>
                            <div class="card-body">
                                <h5 class="card-title">43</h5>
                                <p class="card-text text-success">2.6% decrease since last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Traffic</h5>
                            <div class="card-body">
                                <h5 class="card-title">64k</h5>
                                <p class="card-text text-success">2.5% increase since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Recent Products</h5>
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
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($FourProducts as $product) {?>
                                            <tr>
                                                <th scope="row"><?= $product['id']; ?></th>
                                                <td><?= $product['name']; ?></td>
                                                <?php foreach($AllCategories as $Category){
                                                        if($Category['id'] == $product['id_category']){
                                                            echo "<td>".$Category['name']."</td>";
                                                        }
                                                    }
                                                ?>
                                                <td><img src="<?= $product['picture']; ?>" style="width7rem; height: 4rem" /></td>
                                                <td><?= $product['price'].'$'; ?></td>
                                                <td><?= $product['description']; ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                                    <a href="../include/require.php?id=<?= $product['idProduct']; ?>" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="allproducts.php" class="btn btn-block btn-dark">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="d-flex justify-content-end">
                    <span>Copyright © 2022 BY Anass KASSEMI</span>
                </footer>
            </main>
        </div>
        
    </body>
</html>
