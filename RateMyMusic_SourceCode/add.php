<?php
include 'config.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $song = trim($_POST["songn"]);
    $artist = trim($_POST["artn"]);

    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg', 'png', 'pdf');
    
    if(in_array($fileActualExt, $allowed)){
        if($fileError===0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDest = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDest);
                
            } else {
                echo "too big";

            }
            
        }else{
            echo "error uploading";
            }
    } else{
        echo "cannot upload file";
    }

$sql = " INSERT INTO music (song, artist, pic) VALUES ( '$song', '$artist','$fileDest') " ;

if ($conn->query($sql) === TRUE) {
    header('Location: search.html');
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
