<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang ki</title>
</head>
<body>
    <form action="./handleRegister.php" method="POST">
        name
        <input type="text" name="name">
        <br>
        email
        <input type="email" name="email">
        <br>
        avatar
        <input type="text" name="avartar">
        <br>
        password
        <input type="password" name="password">
        <br>
        <button type="submit">Dang ky</button>
    </form>    

    <?php require_once './layout/noti.php' ?>
    
</body>
</html>