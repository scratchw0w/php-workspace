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
    <h1>Register Page</h1>
    <form action="lb2_new_user.php" method="POST" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="text" placeholder="Enter your name" name="name" >
    <input type="text" placeholder="Enter your surname" name="surname" >
    <select name="role_id">
    <option value="0">USER</option>
    <option value="1">ADMIN</option>
    </select>
    <input type="text" placeholder="Create password" name="password" >
    <input type="submit" value="Register" name="submit">
    </form>
    <a href="lb2_main.php">Back</a>
</body>
</html>