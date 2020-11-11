<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<form action="auth.php" method="POST">
    <input type="text" placeholder="Enter login" name="login" >
    <input type="text" placeholder="Enter password" name="password" >
    <input type="submit" value="Enter">
</form>

<a href="register.php">Registration Link</a>
<a href="show_users.php">See all users</a>

</body>
</html>