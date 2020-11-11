<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
</head>
<body>

    <h2>All users:</h2>
    <a href="main_page.php">Go back.</a>

    <?php 
    
    $sql = "SELECT login, first_name, img FROM users";

    $result = $conn->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $imgsrc = $row["img"];
        echo '<br><br>User: ' . $row["first_name"] . "<br>";
        echo 'User login is: ' . $row["login"] . "<br>";
        if($imgsrc != null) {
            echo "<img src='$imgsrc' width='150' >";
            echo "<br>";
        }
    }
    ?>
    <a href="main_page.php">Go back.</a>
</body>
</html>