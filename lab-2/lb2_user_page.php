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


<form action="lb2_new_user.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" >
    <input type="text" placeholder="Enter your surname" name="surname" >
    <input type="text" placeholder="Create password" name="password" >
    <input type="submit" value="Register" name="submit">
</form>
</body>
</html>