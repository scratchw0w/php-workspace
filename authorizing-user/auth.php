<?php
session_start();
?>

<!DOCTYPE html>

<html>
<body>
<?php
    if($_POST["login"] == 'admin' && $_POST["password"] == '1111') {
        $_SESSION['login'] = $_POST["login"];
        $_SESSION['auth'] = true;
    } else {
        $_SESSION['auth'] = false;
    }
    header('Location: restricted.php');
?>
</body>
</html>