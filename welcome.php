<?php
	session_start();

	if(!isset($_SESSION['sess_name']) || !isset($_SESSION['sess_username'])){
		header('Location: login.html');
		exit();
	}
?>

</!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
</head>
<body>
	<h1>Welcome <?php echo $_SESSION["sess_name"] ?></h1>
	<p>You are logged in as <?php echo $_SESSION["sess_username"] ?></p>
</body>
</html>