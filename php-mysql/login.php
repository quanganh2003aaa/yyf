<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./handleLogin.php" method="POST">
            Email
        <input type="email" name="email">
        <br>
            Password
        <input type="password" name="password">
        <br>
        <button type="submit">Đăng Nhập</button>

    </form>

    <?php require_once './layout/noti.php' ?>
</body>
</html>