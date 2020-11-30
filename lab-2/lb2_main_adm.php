<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "labdb";

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
    <title>Document</title>
</head>
<body>
    <h1>Main-page</h1>
    <?php 
    echo $_SESSION['first_name'] . "  |  " . <<< HTML
    <a href="lb2_logout.php">Log out</a><br>
    HTML;
    echo "You are admin!";
    ?>

    <h2>All users:</h2>
    <?php 
    
    $sql = "SELECT id, first_name, last_name, role_id FROM users";

    $result = $conn->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $_SESSION['id'] = $row["id"];
        
        echo '<a href="' . htmlspecialchars("lb2_user_page.php?id=" . urlencode($row["id"])) . '">'. "ID: " . $row["id"] . '</a>';
        echo '<br><br>User name: ' . $row["first_name"];
        echo '<br><br>User last name: ' . $row["last_name"];
        if($row["role_id"] == 1) {
            echo '<br><br>User role: Admin<br>';
        } else {
            echo '<br><br>User role: User<br>';
        }
    }

    
    ?>

    <a href="lb2_register.php">Add new user</a>
</body>
</html>