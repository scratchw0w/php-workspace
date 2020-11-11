<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<form action="new_user.php" method="POST" enctype="multipart/form-data">
    <input type="text" placeholder="Create id" name="id" >
    <input type="text" placeholder="Create login" name="login" >
    <input type="text" placeholder="Enter your name" name="name" >
    <input type="text" placeholder="Enter your surname" name="surname" >
    <input type="text" placeholder="Create password" name="password" >
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Register" name="submit">
    
</form>


<a href="main_page.php">Back</a>

</body>
</html>