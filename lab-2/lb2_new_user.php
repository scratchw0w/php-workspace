<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "labdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Adding new user
$first_name = $_POST["name"];
$last_name = $_POST["surname"];
$role_id = $_POST["role_id"];
$password = $_POST["password"];

$sql = "INSERT INTO users (first_name, last_name, password, photo, role_id) VALUES ('$first_name', '$last_name', '$password', 0, '$role_id')";
$result = mysqli_query($conn, $sql);
header('Location: lb2_main.php');

?>