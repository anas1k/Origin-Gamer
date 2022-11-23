<?php

require_once('../controller/database.php');

function GetProducts(){
    
    $sql = "SELECT p.id AS idProduct, p.name AS nameProduct, p.id_category AS idCategory, p.picture, p.quantity, p.price, p.description, c.name AS nameCategory, c.id AS idCategory 
        FROM products p LEFT JOIN category c ON p.id_category = c.id ORDER BY p.id DESC;";
    $result = connect() -> query($sql);

    return $result;
}

function CountProducts(){

    $sql = "SELECT * FROM products";
    $result = connect() -> query($sql);

    return $result;
}

function FourProducts(){

    $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 4 ";
    $result = connect() -> query($sql);
    
    return $result;
}

function AddProduct($name, $idCategorie, $idUser, $picture, $price, $quantity, $description){

    $sql = "INSERT INTO products (name, id_category, id_user, picture, price, quantity, description) VALUES ('$name', '$idCategorie', '$idUser', '$picture', '$price', '$quantity', '$description')";
    $result = connect() -> query($sql);

    $_SESSION['icon'] = "success";
    $_SESSION['message'] = "Produit ajouté avec succès";

    return 1;
}

function EditProduct($id, $name, $idCategorie, $idUser, $picture, $price, $quantity, $description){

    $sql = "UPDATE products SET name = '$name', id_category = '$idCategorie', id_user= '$idUser', picture = '$picture', price = '$price', quantity = '$quantity', description = '$description' WHERE id = '$id'";
    $result = connect() -> query($sql);

    $_SESSION['icon'] = "success";
    $_SESSION['message'] = "Produit modifié avec succès";

    return 1;
}

function DeleteProduct($id){

    $sql = "SELECT picture FROM products WHERE id = '$id'";
    $result = connect() -> query($sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['picture'] != '') {
        unlink($row['picture']);
    }

    $sql = "DELETE FROM products WHERE id = '$id'";
    $result = connect() -> query($sql);

    return 1;
}

function TotalQuantity(){
    
        $sql = "SELECT SUM(quantity) AS total FROM products";
        $result = connect() -> query($sql);

        return $result;
}

function LastPicUpdate($id, $name, $idCategorie, $idUser, $price, $quantity, $description){

    $sql = "UPDATE products SET name = '$name', id_category = '$idCategorie', id_user= '$idUser', price = '$price', quantity = '$quantity', description = '$description' WHERE id = '$id'";
    $result = connect() -> query($sql);

    $_SESSION['icon'] = "success";
    $_SESSION['message'] = "Produit modifié avec succès";

    return 1;
}