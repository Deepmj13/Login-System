<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header("location: login-page.php");

    exit;
}
if(isset($_POST['submit'])){
    $_SESSION = array();
    session_destroy();
    header("location: login-page.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
</head>
<body>
    <h1><?php echo $_SESSION['email'];?> Logged in !</h1>
    hi... <?php echo $_SESSION['email'];?>How going on
    <form method="post">
    <button type="submit" name="submit">Logout</button>
    </form>
</body>
</html>