<?php
 
    require 'static/connect.php';
    require 'function.php';

    $name = trim($_POST['username']);
    $password = trim($_POST['password']);

    $number = trim($_POST['number']);
    $description = trim($_POST['description']);

    $email = trim($_POST['email']);

    if(strlen(($name) <= 1))
        f_alert("incorrect name");
    else if(strlen(($email)) <= 6)
        f_alert("incorrect email");
    else if(strlen(($password)) < 8)
        f_alert("sloppy password");
    else {
        insert($name, $password, $email, $number, $description, $conn);
        header('Location: input.php');
        exit;
    }

