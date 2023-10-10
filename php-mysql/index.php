<?php
    require_once './getUser.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>STATUS</th>
            <th>AVATAR</th>
            <th>Action</th>
        </tr>

        <?php foreach ($users as $user):?>

        <tr>
            <td><?php echo $user[0] ?></td>
            <td><?php echo $user[1] ?></td>
            <td><?php echo $user[2] ?></td>
            <td>
                <?php echo $user[4] ==1 
                ? '<span style="color: green"><h3> Active </h3></span>'
                : '<span style="color: red"><h3> Deactive </h3></span>' ?>
            </td>
            <td>
                <img src="<?php echo $user[5] ?>" style="width: 200px" alt="">
            </td>
            <td>
                <!-- <a href="./handleDelete.php?id=<?php echo $user[0] ?>">XOA</a> -->
                <form action="./handleDelete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $user[0] ?>">
                    <button type="submit">XOA</button>
                </form>
                
                <!-- <a href="./edit.php?id=<?php echo $user[0] ?>">SUA</a> -->
                <form action="./edit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $user[0] ?>">
                    <button type="submit">SUA</button>
                </form>

            </td>
        </tr>

        <?php endforeach ?>
        
    </table>
</body>
</html>