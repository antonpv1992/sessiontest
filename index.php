<?php

session_start();

$_SESSION['test'] = 'test';
if(isset($_POST['email']) && isset($_POST['pass'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['pass'];
    header('Location: http://session.loc/home.php');
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
  <title>SessionTest</title>
</head>
<body>
  <form action="/" method="post">
    <input type="email" name="email">
    <input type="password" name="pass">
    <input type="submit" name="button">
  </form>
</body>
</html>