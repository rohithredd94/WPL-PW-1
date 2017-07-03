<?php
    session_start();
    if(!isset($_SESSION['username']) || !isset($_SESSION['fullname']) || !isset($_SESSION['avatar'])){
        header('Location: login.html');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome!</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['fullname']; ?> </h1>
    <p>You are logged in as <?php echo $_SESSION['username']; ?></p>
    <img src="img/<?php echo $_SESSION['avatar']; ?>" alt="">
</body>
</html>