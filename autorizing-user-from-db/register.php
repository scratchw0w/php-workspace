<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<form action="new_user.php" method="POST">
    <input type="text" placeholder="Create id" name="id" >
    <input type="text" placeholder="Create login" name="login" >
    <input type="text" placeholder="Enter your name" name="name" >
    <input type="text" placeholder="Enter your surname" name="surname" >
    <input type="text" placeholder="Create password" name="password" >
    <input type="submit" value="Enter">
</form>


<a href="main_page.php">Back</a>

</body>
</html>