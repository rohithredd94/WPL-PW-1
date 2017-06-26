<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	echo htmlspecialchars($_POST["name"]);
  	echo "<br>";
  	echo htmlspecialchars($_POST["email"]);
    echo "<br>";
    echo htmlspecialchars($_POST["website"]);
    echo "<br>";
    echo htmlspecialchars($_POST["comments"]);
    echo "<br>";
    echo htmlspecialchars($_POST["gender"]);
	}
?>
