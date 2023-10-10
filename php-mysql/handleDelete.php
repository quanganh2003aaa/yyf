<?php
    require_once './database.php';

    $id = $_POST['id'];

    var_dump($id);

    $sql = "DELETE FROM `users` WHERE id = $id";

    mysqli_query($connect, $sql);