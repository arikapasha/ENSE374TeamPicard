<?php
ini_set('display_errors', 1);
    session_start();
    if (!isset($_SESSION["username"] )) {
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

$user = $_SESSION["username"];


        $q = " SELECT * FROM rate WHERE rate.user = '$user' ORDER BY id DESC ";

$result = $conn->query($q);


        }
?>

<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sora&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link  rel="stylesheet" href="user1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

.fa {
    color: black;
    font-size:50px;
}

.checked {
  color: orange;
}

</style>
</head>
<body>
<div class = "wrapper1">
<h2 class = "title">Rate My Music </h2><br><br><br><br><br>
<p><a href = "search1.html"><button type="button" id = "but9"> Search a Rating </button></a></p>
<div id = "but10"><?php echo $_SESSION['username'];?></div>

<div id = "but17"><h2> All Your Ratings</h2></div>

<br><br><br>
<section> 
  
<?php
    while($row = $result->fetch_assoc()){
    ?>
<br>
<?php if (($row['rate'] == 1)) { ?>
    <div class="flex-container">

  <div class="box1">

<img src="<?=$row['pic1']?>" alt="Avatar" style="width:280px;height:280px;">

  </div>
  
  <div class="box3">
	<br>
	<div style="display:inline-block;"><br>
    <div><b><?=$row['song1']?></b></div>
    <div><b>by <?=$row['artist1']?></b></div>
   
	</div>
    </div>

    <div class="box2">
  <br><br> 
  <p class = "p1"> Your Rating:</p> 
<br>
  <span class="fa fa-star checked" ></span>
  <span style='font-size:50px;' class="fa fa-star " ></span>
  <span style='font-size:50px;' class="fa fa-star " ></span>
  <span style='font-size:50px;' class="fa fa-star " ></span>
  <span style='font-size:50px;' class="fa fa-star " ></span>

    </div>

</div>

<?php } ?>

<?php if (($row['rate'] == 2)) { ?>
    <div class="flex-container">

  <div class="box1">

<img src="<?=$row['pic1']?>" alt="Avatar" style="width:280px;height:280px;">

  </div>
  
  <div class="box3">
	<br>
	<div style="display:inline-block;"><br>
    <div><b><?=$row['song1']?></b></div>
    <div><b>by <?=$row['artist1']?></b></div>
   
	</div>
    </div>

    <div class="box2">
  <br><br> 
  <p class = "p1"> Your Rating:</p> 
<br>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star " ></span>
  <span class="fa fa-star " ></span>
  <span class="fa fa-star " ></span>

    </div>

</div>

<?php } ?>

<?php if (($row['rate'] == 3)) { ?>
    <div class="flex-container">

  <div class="box1">

<img src="<?=$row['pic1']?>" alt="Avatar" style="width:280px;height:280px;">

  </div>
  
  <div class="box3">
	<br>
	<div style="display:inline-block;"><br>
    <div><b><?=$row['song1']?></b></div>
    <div><b>by <?=$row['artist1']?></b></div>
   
	</div>
    </div>

    <div class="box2">
  <br><br> 
  <p class = "p1"> Your Rating:</p> 
<br>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star " ></span>
  <span class="fa fa-star " ></span>

    </div>

</div>

<?php } ?>

<?php if (($row['rate'] == 4)) { ?>
    <div class="flex-container">

  <div class="box1">

<img src="<?=$row['pic1']?>" alt="Avatar" style="width:280px;height:280px;">

  </div>
  
  <div class="box3">
	<br>
	<div style="display:inline-block;"><br>
    <div><b><?=$row['song1']?></b></div>
    <div><b>by <?=$row['artist1']?></b></div>
   
	</div>
    </div>

    <div class="box2">
  <br><br> 
  <p class = "p1"> Your Rating:</p> 
<br>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star " ></span>

    </div>

</div>

<?php } ?>

<?php if (($row['rate'] == 5)) { ?>
    <div class="flex-container">

  <div class="box1">

<img src="<?=$row['pic1']?>" alt="Avatar" style="width:280px;height:280px;">

  </div>
  
  <div class="box3">
	<br>
	<div style="display:inline-block;"><br>
    <div><b><?=$row['song1']?></b></div>
    <div><b>by <?=$row['artist1']?></b></div>
   
	</div>
    </div>

    <div class="box2">
  <br><br> 
  <p class = "p1"> Your Rating:</p> 
<br>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star checked" ></span>
  <span class="fa fa-star checked" ></span>

    </div>

</div>

<?php } ?>
    
<?php
}
$conn->close();
?>
<br>
</section>



</script>
</body>
</html>
