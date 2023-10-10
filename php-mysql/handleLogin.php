<?php 
    session_start();
    require_once './database.php';
    echo '<pre>';
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $login = "SELECT * FROM users WHERE email = '$email'  
                                    AND password = '$password' limit 1";

    $user = mysqli_query($connect, $login);
    $user = mysqli_fetch_assoc($user);
    // var_dump($user);die;
    if (! $user) {
        // echo "sai";die;
        // thaats baij
        header('location: ./login.php?status=3');
    }
    else{
        // echo "dung";die;
        //thêm thông tin user và check_login vào session
        $_SESSION['user'] = $user;
        // var_dump($_SESSION);die;
        $_SESSION['check_login'] = 1;
        header('location: ./home/index.php?status=4');
    }

    // if ($user) {
        
    // }

    
    
    