<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	echo "Name: ".test_input($_POST["name"])."<br>";
    
  	echo "Username: ".test_input($_POST["username"])."<br>";

    echo "Password: ".test_input($_POST["password"])."<br>";
	}
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
