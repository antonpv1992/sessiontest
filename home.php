<?php

session_start();

$email = "admin@admin.com";
$pass = "password1";

if($_SESSION['email'] === $email && $_SESSION['password'] === $pass){
    echo "Hello Admin!";
} else {
    echo "You not registrated";
    header('Location: http://session.loc/');  
}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no,
                 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SessionLogout</title>
</head>
<body>
    <form action="/logout.php" method="post">
        <input type="submit" name="logout">
    </form>
</body>
</html>

