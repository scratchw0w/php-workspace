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

$currentUser = $_GET['id'];

$sql = "SELECT id, first_name, last_name, password, role_id, photo FROM users WHERE id='$currentUser'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $currentUserName =  $row["first_name"];
    $currentUserLastName = $row["last_name"];
    $currentUserRole = $row["role_id"];
    $currentUserPhoto = $row["photo"];
    $currentUserPass = $row["password"];
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

<form action="lb2_simple_update_ex_user.php" method="POST" enctype="multipart/form-data">
    Select image to upload: 
    <input type="file" name="fileToUpload" id="fileToUpload" value="<?=$currentUserPhoto;?>">
    <input type="hidden" name="userId" value="<?=$currentUser;?>" >
    <input type="text" name="name" value="<?=$currentUserName;?>" >
    <input type="text" placeholder="Enter new surname" name="surname" value="<?=$currentUserLastName;?>" >
    <input type="text" placeholder="Enter new password" name="password" value="<?=$currentUserPass;?>" >
    <input type="submit" value="Update" name="submit">
</form>

</body>
</html>