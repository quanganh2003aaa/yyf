<?php
    require_once './database.php';
    // var_dump($_POST);die;

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $avatar = $_POST['avartar'];

    $sql = "UPDATE `users` 
            SET `name`='$name',`email`='$email',`password`='$password',`avatar`='$avatar'
            WHERE id=$id;";
    $user = mysqli_query($connect, $sql);
    var_dump($user);
    // die;