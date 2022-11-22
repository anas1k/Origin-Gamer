<?php

require_once('../controller/database.php');	

function GetUsers(){
    
    $sql = "SELECT * FROM users";
    $result = connect() -> query($sql);

    return $result;
}

function AddUser($name, $email, $password, $role){
    
    $sql = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";
    $result = connect() -> query($sql);

    $_SESSION['icon'] = "success";
    $_SESSION['message'] = "Utilisateur ajouté avec succès";

    return 1;
}