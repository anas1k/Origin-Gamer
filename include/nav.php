<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    
    <div class="position">
        <a class="" href="../core"><img src="../assets/img/logo/Logo.png" alt="" class="logo" /></a>
        <ul class="nav nav-pills mt-5 flex-column">
            <li class="nav-item m-2">
                <a class="nav-link <?= $path == "Home" ? "active" :""; ?> d-flex align-items-center" href="../core/index.php">
                    <i class="text-white  fa fa-house"></i>
                    <span class="m-4 text-white">Home</span>
                </a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link <?= $path == "Products" ? "active" :""; ?> d-flex align-items-center" href="../core/allproducts.php">
                    <i class="fa fa-boxes-stacked text-white"></i>
                    <span class="m-4 text-white">Products</span>
                </a>
            </li>
            <li class="nav-item m-2">
                <a class="nav-link <?= $path == "Category" ? "active" :""; ?> d-flex align-items-center" href="../core/allcategories.php">
                    <i class="fa fa-list text-white"></i>
                    <span class="m-4 text-white">Category</span>
                </a>
            </li>
        </ul>  
    </div>  
</nav>
<nav class="navbar navbar-light" >
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
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="true"><?= $_SESSION['fullname']; ?></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="../core/signout.php">Sign out</a></li>
            </ul>
        </div>
    </div>
</nav>