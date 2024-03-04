<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h2>Home Page</h2>
</div>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username'];?></strong> Choose what Action You want to perform</p>
    	<p> <a href="index.php?logout='1'" style="color: red;"><center>logout</center></a> </p>
    <?php endif ?>
</div>
<div class="data">
<center>
    <h3>For Batsman</h3>
<span>
   <a href="#" >Insert</a>
	</span>
	<span>
   <a href="Insert/Batsman.php" >Update</a>
	</span>
	<span>
   <a href="#"  >Delete</a>
	</span>
	</center>
	<center>
		<h3>For Bowler</h3>
<span>
   <a href="Insert/Batsman.php"  >Insert</a>
	</span>
	<span>
   <a href="#" >Update</a>
	</span>
	<span>
   <a href="#" " >Delete</a>
	</span>
	</center>
	<center>
		<h3>For Allrounder</h3>
<span>
   <a href="Insert/Batsman.php" >Insert</a>
	</span>
	<span>
   <a href="#"  >Update</a>
	</span>
	<span>
   <a href="#" >Delete</a>
	</span>
	</center>
	</div>
</body>
</html>