<?php

session_start();

$email = "admin@admin.com";
$pass = "password1";

if($_SESSION['email'] === $email && $_SESSION['password'] === $pass){
    echo "Hello Admin!";
} else {
    echo "You not registrated";    
}

?>