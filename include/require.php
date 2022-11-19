<?php 

session_start();

include('../controller/products.php');
include('../controller/category.php');

$AllProducts = GetProducts();

$ProductsCount = CountProducts();

$FourProducts = FourProucts();

$AllCategories = GetCategory();
