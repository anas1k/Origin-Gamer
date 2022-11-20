<?php

require_once('../controller/database.php');

function GetProducts(){
    
    $sql = "SELECT p.id AS idProduct, p.name AS nameProduct, p.id_category AS idCategory, p.picture, p.price, p.description, c.name AS nameCategory 
        FROM products p INNER JOIN category c ON p.id_category = c.id;";
    $result = connect() -> query($sql);

    return $result;
}

function CountProducts(){
    $sql = "SELECT * FROM products";
    $result = connect() -> query($sql);
    return $result;
}

function FourProducts(){

    $sql = "SELECT * FROM products LIMIT 4 ";
    $result = connect() -> query($sql);
    
    return $result;
}

function AddProduct($name, $idCategorie, $picture, $price, $description){
    $sql = "INSERT INTO products (name, id_category, picture, price, description) VALUES ('$name', '$idCategorie', '$picture', '$price', '$description')";
    $result = connect() -> query($sql);

    return 1;
}

function EditProduct($id, $name, $idCategorie, $picture, $price, $description){
    $sql = "UPDATE products SET name = '$name', id_category = '$idCategorie', picture = '$picture', price = '$price', description = '$description' WHERE id = '$id'";
    $result = connect() -> query($sql);

    return 1;
}

