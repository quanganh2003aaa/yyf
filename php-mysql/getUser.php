<?php
    require_once './database.php';

    $sql = "SELECT * FROM users";

    $users = mysqli_query($connect, $sql);

    $users = mysqli_fetch_all($users);
    // var_dump($users);

    // die;