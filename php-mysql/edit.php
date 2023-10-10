<?php
    require_once './database.php';
    $id = $_POST['id'];
    
    $sql = "SELECT * FROM users where id = $id limit 1";

    $user = mysqli_query($connect, $sql);

    $user = mysqli_fetch_assoc($user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./handleUpdate.php" method="POST">
        <input type="hidden" name="id" value='<?php echo $user['id']?>'>
        name
        <input type="text" name="name" value='<?php echo $user['name']?>'>
        <br>
        email
        <input type="email" name="email" value=<?php echo $user['email'] ?>>
        <br>
        avatar
        <input type="text" name="avartar" value=<?php echo $user['avatar'] ?>>
        <br>
        password
        <input type="password" name="password">
        <br>
        <button type="submit">OK SUA XONG</button>
    </form>    


</body>
</html>