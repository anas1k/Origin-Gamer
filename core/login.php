<?php  
    include('../include/require.php');
    $path = "Login";
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
                <div class="position-absolute start-25 top-25 translate-middle-y">
                    <img class="logo mt-5" src="../assets/img/logo/logo.png" alt="logo" >
                    <h1 class="h2 text-start text-white">Log In</h1>
                    <p class="text-white mb-4">Login with your account to access the dashboard</p>
                    <form action="POST">
                        <div class="input-group p-4">
                            <span class="fa fa-user fa-lg pt-3 input-group-text bg-secondary" id="basic-addon1"></span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group pt-0 p-4">
                            <span class="fa fa-lock fa-lg pt-3 input-group-text bg-secondary" id="basic-addon1"></span>
                            <input type="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group p-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-white ml-3" for="flexCheckDefault"> Remember Me </label>
                        </div>
                        <div class="">
                            <button class="btn btn-primary col-11">Connect</button>
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