<?php  
    include('../include/require.php');
    $path = "Sign Up";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('../include/head.php'); ?>
</head>
<body>
    <div class="fullheight">
        <main class="row col-12 mx-0">
            <div class="col-4 background px-5">
                <div class="d-flex flex-column  justify-content-center mt-5">
                    <img class="logo align-self-center mt-5" src="../assets/img/logo/logo.png" alt="logo" >
                    <h1 class="text-start text-white">Log In</h1>
                    <p class="text-white mb-4">Login with your account to access the dashboard</p>
                    <form action="POST">
                        <div class="input-group mt-2 p-2">
                            <span class="fa fa-user fa-lg pt-3 input-group-text bg-secondary" id="basic-addon1"></span>
                            <input type="text" class="form-control" placeholder="Username" name="userName" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group pt-0 p-2">
                            <span class="fa fa-lock fa-lg pt-3 input-group-text bg-secondary" id="basic-addon1"></span>
                            <input type="password" class="form-control" placeholder="Password" name="userPassword" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group p-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-white ml-3" for="flexCheckDefault"> Remember Me </label>
                        </div>
                        <div class="">
                            <button class="btn btn-primary col-12">Connect</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-8 fullheight image-background ">
                <div >
                    <img/>
                </div>
            </div>
        
        </main>
    </div>
</body>
</html>