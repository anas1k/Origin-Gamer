<?php 

session_start();

include('../controller/products.php');
include('../controller/category.php');

$AllProducts = GetProducts();

$ProductsCount = CountProducts();

$FourProducts = FourProducts();

$AllCategories = GetCategory();


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_REQUEST['addProductForm'])){
        extract($_POST);
        
        if ($_FILES['picture']['name'] != "") {
        $fileName = $_FILES['picture']['name'];
        $fileTmpName = $_FILES['picture']['tmp_name'];
        $fileSize = $_FILES['picture']['size'];
        $fileError = $_FILES['picture']['error'];
        $fileType = $_FILES['picture']['type'];
    
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg', 'jpeg', 'png' , 'jfif');
    
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 10728640) {  // 10MB max file size
                    $fileNameNew = date("dmy") . time() ."." . $fileActualExt; //create unique name using time and date and name of 'picture'
                    $fileDestination = "../assets/img/uploads/" . $fileNameNew;

                    

                    $result = AddProduct($name, $idCategory, $fileNameNew, $price, $description);
                    if($result == 1){
                        move_uploaded_file($fileTmpName, $fileDestination);
                        header('Location: '. $_SERVER['PHP_SELF']); //refresh page
                        die;
                    }
                } else {
                    $_SESSION['message'] = "Le fichier est trop grand";
                    header('Location:' . $_SERVER['PHP_SELF']); //to avoid alerts when refresh page
                    die;
                }
            } else {
                $_SESSION['message'] = "Erreur de téléchargement de fichier";
                header('Location:' . $_SERVER['PHP_SELF']); //to avoid alerts when refresh page
                die;
            }
        } else {
            $_SESSION['message'] = "Erreur";
            header('Location:' . $_SERVER['PHP_SELF']); //to avoid alerts when refresh page
            die;
        }
    }
        
    }
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $result = DeleteProduct($id);
        if($result == 1){
            header('Location: ../core/allproducts.php'); //refresh page
            die;
        }
    }
}