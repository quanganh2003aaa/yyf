<?php
    echo '<pre>';
    session_start();
    $_SESSION['check_login'] = 2;
    header('location: ./home/index.php');