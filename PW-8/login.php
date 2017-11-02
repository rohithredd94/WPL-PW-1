<?php
    session_start();

    $con = mysqli_connect("localhost","root","root","pw8",3310);
    if(mysqli_connect_errno()){
        echo "Failed to Connect to mysql".mysql_connect_error();
    }else{
        echo "Connection Successfull"."<br>";
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION = array();

        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            //$username = mysql_real_escape_string($username);
            $query = "SELECT username, password, fullname, avatar FROM users WHERE username = '$username';";
            $result = mysqli_query($con, $query);
            if($result->num_rows == 0){
                //echo "User not found";
                header('Location: login.html');
                exit();
            }
            $userdata = mysqli_fetch_array($result, MYSQLI_ASSOC);
            //$hash = hash('sha256', hash('sha256', $password));
            //echo $hash;
            if($password != $userdata['password']){
                //echo "Incorrect password";
                header('Location: login.html');
                exit();
            }else{
                session_regenerate_id();
                $_SESSION['username'] = $userdata['username'];
                $_SESSION['fullname'] = $userdata['fullname'];
                $_SESSION['avatar'] = $userdata['avatar'];
                session_write_close();
                header('Location: welcome.php');
                exit();
            }
        }else{
            //echo "Input fields missing";
            header('Location: login.html');
            exit();
        }
    }else{
        header('Location: login.html');
        exit();
    }

    mysqli_close($con);
?>