<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Online Boutiqe System</title>
   <link href="https://www.tutorialspoint.com/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://www.tutorialspoint.com/scripts/jquery.min.js"></script>
   <script src="https://www.tutorialspoint.com/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class = "container">
<div class="row">
   <h1>Online Boutiqe Front Site </h1>
</div>
<div class="row">
&nbsp;
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-8">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Boutiqe</a>
    </div>
    <ul class="nav navbar-nav">
		<li ><a href="index.php">Home</a></li>
		
    </ul>
	
  </div>
  <div class="col-md-4">
  <?php if(isset( $_SESSION['customer'])){?>
        <a href ="myaccount.php">Welcome( <?php echo  $_SESSION['customer']['customer_name'];?>)</a>&nbsp;|&nbsp;<a href ="logout.php">Logout</a>
  <?php } else {?>
        <a href ="register.php">register</a>&nbsp;|&nbsp;<a href ="login.php">login</a>
  <?php } ?>
  </div>
  </div>
  </div>
</nav>