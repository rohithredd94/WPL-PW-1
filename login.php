<?php
	
  session_start();

  error_reporting(E_ALL);
	ini_set('display_errors', 1);

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION = array();
    if (!empty($_POST["name"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {

      $_SESSION['sess_name'] = test_input($_POST["name"]);
      $_SESSION['sess_username'] = test_input($_POST["username"]);
      header('Location: welcome.php');

    } else {
      header('Location: login.html');
    }

	} else {
    header('Location: login.html');
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
