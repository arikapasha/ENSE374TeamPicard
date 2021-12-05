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
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM `music` WHERE song LIKE '%$search%' OR artist LIKE '%$search%'";
    $result = $conn->query($sql);
    
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Song Search</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
.fa {
  color: black;
}
span:hover {
  color: yellow;
}

</style>
  </head>
  <body class = "wrapper1">
<h2>Searching for "<?=$search?>": </h2>

<?php
    while($row = $result->fetch_assoc()){
    ?>
<div class = "result"><?=$row['song']?> by <?=$row['artist']?> <button class = "b2">Rate This Song
<a href = "rate1.php?sid=<?=$row["sid"]?>&sname=<?=$row["song"]?>&aname=<?=$row["artist"]?>&im=<?=$row["pic"]?>"><span class="fa fa-star"></span></a>
<a href = "rate2.php?sid=<?=$row["sid"]?>&sname=<?=$row["song"]?>&aname=<?=$row["artist"]?>&im=<?=$row["pic"]?>"><span class="fa fa-star "></span></a>
<a href = "rate3.php?sid=<?=$row["sid"]?>&sname=<?=$row["song"]?>&aname=<?=$row["artist"]?>&im=<?=$row["pic"]?>"><span class="fa fa-star "></span></a>
<a href = "rate4.php?sid=<?=$row["sid"]?>&sname=<?=$row["song"]?>&aname=<?=$row["artist"]?>&im=<?=$row["pic"]?>"><span class="fa fa-star"></span></a>
<a href = "rate5.php?sid=<?=$row["sid"]?>&sname=<?=$row["song"]?>&aname=<?=$row["artist"]?>&im=<?=$row["pic"]?>"><span class="fa fa-star"></span></a></button></div>


<?php
}
$conn->close();
?>
  </body>
</html>
</body>
</html>

