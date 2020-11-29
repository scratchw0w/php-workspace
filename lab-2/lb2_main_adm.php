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
    <a href="lb2_logout.php">Log out</a> 
    |
    <a href="lb2_user_page.php">Change my profile</a><br>
    HTML;
    echo "You are admin!";
    ?>

    <form action="lb2_update_user.php" method="post">
        <input type="text" placeholder="User to update" name="user_id">
    </form>
    <form action="lb2_delete_user.php" method="post">
        <input type="text" placeholder="User to delete" name="user_id">
    </form>

    <h2>All users:</h2>
    <?php 
    
    $sql = "SELECT id, first_name, last_name, role_id FROM users";

    $result = $conn->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $_SESSION['id'] = $row["id"];
        echo '<a href="lb2_user_page.php">'. '<br><br>ID: ' . $row["id"] . '</a>';
        echo '<br><br>User name: ' . $row["first_name"];
        echo '<br><br>User last name: ' . $row["last_name"];
        echo '<br><br>User role: ' . $row["role_id"];
    }

    
    ?>

    <a href="/lb2_register.php">Register</a>
</body>
</html>