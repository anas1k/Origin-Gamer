<?php 

session_start();

include('./controller/products.php');

$AllProducts = GetProducts();

$ProductsCount = CountProducts();

