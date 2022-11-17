<?php

    include('include/require.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Origin Gamer - Dashboard</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #1e1e2d">
            <a class="" href="#"><img src="assets/img/logo/Logo.png" alt="" class="logo" /></a>
            <div class="position mt-5">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item m-2">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="text-white fa fa-house"></i>
                            <span class="m-4 text-white">Home</span>
                        </a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="#">
                            <i class="fa fa-boxes-stacked text-white"></i>
                            <span class="m-4 text-white">Products</span>
                        </a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link" href="#">
                            <i class="fa fa-list text-white"></i>
                            <span class="m-4 text-white">Categorie</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-light overflow-hidden" style="background-color: #32324a">
            <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
                <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="col-12 col-md-2 col-lg-2">
                <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search" />
            </div>
            <div class="col-12 col-md-5 col-lg-7 d-flex align-items-center justify-content-md-end mr-5 mt-3 mt-md-0">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">John Doe</button>
                    <ul class="dropdown-menu active" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid" style="background-color: #151521">
            <div class="">
                <main class="content col-md-9 ml-sm-auto col-lg-10 px-md-4 p-4 text-white">
                    <nav aria-label="breadcrumb"></nav>
                    <h1 class="h2">Dashboard</h1>
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
                                    <h5 class="card-title"><?php echo CountProducts()-> num_rows; ?></h5>
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
                                <h5 class="card-header">Latest Products</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-white">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Picture</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($AllProducts as $product) {?>
                                                <tr>
                                                    <th scope="row"><?= $product['id']; ?></th>
                                                    <td><?= $product['name']; ?></td>
                                                    <td><img src="<?= $product['picture']; ?>" style="width7rem; height: 4rem" /></td>
                                                    <td><?= $product['price'].'$'; ?></td>
                                                    <td><?= $product['description']; ?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="#" class="btn btn-sm btn-primary">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="#" class="btn btn-block btn-dark">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="d-flex align-items-end justify-content-between">
                        <span>Copyright © 2022 BY Anass KASSEMI</span>

                        <a class="nav-link text-secondary" href="#">Contact</a>
                    </footer>
                </main>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
