<?php
    // include './database.php'; cach 1
    // include_once './database.php';
    // require './database.php'; cach 2
    require_once './database.php';
    
    // echo "<pre>";
    // var_dump($_POST);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $avatar = $_POST['avartar'];
    $status = 1;

    $sql = "INSERT INTO users(`name`, `email`, `password`, `status`, `avatar`) 
    VALUES ('$name','$email','$password',$status,'$avatar');";
    $check = mysqli_query($connect, $sql);

    if ($check == true) {
        header('location: ./login.php?status=1');
    }
    else{
        header('location: ./register.php');
    }

    // var_dump($check);die;
    