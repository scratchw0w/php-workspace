<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="lb2_check_user.php" method="POST" enctype="multipart/form-data">
    <input type="text" placeholder="Enter your name" name="first_name" >
    <input type="text" placeholder="Enter your password" name="password" >
    <input type="submit" value="Log in" name="submit">
    </form>
    <a href="lb2_main.php">Back</a>
</body>
</html>