<?php

require_once('../controller/database.php');

function GetCategory(){
    
    $sql = "SELECT * FROM category";
    $result = connect() -> query($sql);

    return $result;
}