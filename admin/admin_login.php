<?php
    require_once('scripts/config.php');

    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        login($username, $password);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="admin_login.php" method="POST">
    <label>Username:
        <input type="text" name="username" value="">
    </label>
    <label>Password:
        <input type="text" name="password" value="">
    </label>
    <button type="submit">Login</button>
    </form>
</body>
</html>