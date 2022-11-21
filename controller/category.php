<?php

require_once('../controller/database.php');

function GetCategory(){
    
    $sql = "SELECT * FROM category";
    $result = connect() -> query($sql);

    return $result;
}

function AddCategory($name){
    
    $sql = "INSERT INTO category (name) VALUES ('$name')";
    $result = connect() -> query($sql);

    return 1;
}

function EditCategory($id, $name){
    
    $sql = "UPDATE category SET name = '$name' WHERE id = '$id'";
    $result = connect() -> query($sql);

    return 1;
}

function DeleteCategory($id){
    
    $sql = "DELETE FROM category WHERE id = '$id'";
    $result = connect() -> query($sql);

    return 1;
}