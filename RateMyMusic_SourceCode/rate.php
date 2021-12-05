<?php
    ini_set('display_errors', 1);
        session_start();
        if (!isset($_SESSION["username"])) {
            header("Location: rmmlogin.html");
            exit();
        }
        else {
     //connection to db
     include 'config.php';
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $songid = $_GET['sid'];
    $name = $_GET['sname'];
    $singer = $_GET['aname'];
    $img = $_GET['im'];
    $user = $_SESSION["username"];
    $r = '0';



    $sql = " INSERT INTO rate (user, song1, artist1, pic1, sid1, rate ) VALUES ( '$name', '$singer', '$img', '$user', '$songid', '$r' ) ";
    if ($conn->query($sql) === TRUE) {
      header('Location: userpage.html');
      
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
  ?>
