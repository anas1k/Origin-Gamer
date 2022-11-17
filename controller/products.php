<?php

require_once('./controller/database.php');

function GetProducts(){
    
    $sql = "SELECT * FROM products";
    $result = connect() -> query($sql);

    return $result;
}

function CountProducts(){
    $sql = "SELECT * FROM products";
    $result = connect() -> query($sql);
    return $result;
}

function FourProucts(){

    $sql = "SELECT * FROM products LIMIT 4";
    $result = connect() -> query($sql);
    
    return $result;
}