<?php

session_start();

if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    setcookie(session_name(), session_id(), time()-3600);
    header('Location: http://session.loc/');
}