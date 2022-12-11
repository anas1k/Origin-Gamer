<?php  
    include('../include/require.php');
    $path = "Sign up";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('../include/head.php'); ?>
</head>
<body>
    <div class="">
        <main class="fullheight row col-12 mx-0">
            <div class="col-12 col-md-12 col-lg-4 col-sm-12 fullheight background px-5">
                <div class="d-flex flex-column  justify-content-center mt-5">
                    <img class="logo align-self-center mt-5" src="../assets/img/logo/logo.png" alt="logo" >
                    <h1 class="text-start text-white"><?= $path; ?></h1>
                    <p class="text-white mb-4"><?= $path; ?> with your account to access the dashboard</p>
                    <form  method="POST">
                        <div class="input-group mt-2 p-2">
                            <span class="fa fa-user fa-lg pt-3 input-group-text bg-secondary"></span>
                            <input type="text" class="form-control col-12" placeholder="Full Name" id="NameInput" name="name" >
                            <div class="col-12" id="ValidateEmail"></div>
                        </div>
                        <div class="input-group pt-1 p-2">
                            <span class="fa fa-user fa-lg pt-3 input-group-text bg-secondary"></span>
                            <input type="text" class="form-control col-12" placeholder="Email" id="EmailInput" name="email" >
                            <div class="col-12" id="ValidateEmail"></div>
                        </div>
                        <div class="input-group pt-1 p-2">
                            <span class="fa fa-lock fa-lg pt-3 input-group-text bg-secondary"></span>
                            <input type="password" class="form-control" placeholder="Password" id="PasswordInput" name="password" >
                            <div class="col-12" id="ValidatePassword"></div>
                        </div>
                        <!-- <div class="input-group p-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-white ml-3" for="flexCheckDefault"> Remember Me </label>
                        </div> -->
                        <div class="">
                            <button type='submit' id="LoginUser" name="loginUser" class="mb-5 btn btn-primary mt-4 col-12" style>Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-8 d-lg-block d-none d-md-none"  style="height: 100vh !important;background-size: cover;background-image: url(../assets/img/logo/wallpaper.jpg); background-repeat: no-repeat; background-position:center ">
                
            </div>

        </main>
    </div>
    <?php include_once('../include/footer.php'); ?>
</body>
</html>