<?php
ini_set('display_errors', 1);

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    
    include 'config.php';
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $q = " SELECT * FROM usersignup WHERE username = '$username' && password = '$password' ";


       
    $r = $conn->query($q);
    $row = $r->fetch_assoc();
    $validate = true;

    if($username != $row["username"] && $password != $row["password"])
    {
        $validate = false;
    }
    
    if($validate == true)
    {

        session_start();
        $_SESSION["username"] = $row["username"];
        $_SESSION["img"] = $row["img"];
        header("Location: userpage.php");
        $conn->close();
        exit();
    }
    else
    {
       echo "The username/password combination was incorrect. Login failed.";
        $conn->close();
    }


?>
