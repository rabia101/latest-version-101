<?php 
include "header/header.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bottique";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_REQUEST['action'])){
	//echo "i am there to delete";bottique_owner
$sql = "DELETE FROM `bottiqueowner` WHERE `id` = '".$_REQUEST['id']."'";
	$conn->query($sql);
}

?>
<?php if(isset($_REQUEST['message'])){
    if($_REQUEST['message'] == "success"){
    ?>
<div class="row">
    <div class="alert alert-success">
        <?php echo $_REQUEST['text'];?>
    </div>
</div>
    <?php }?>
<?php if($_REQUEST['message'] == "error"){
    ?>
<div class="row">
    <div class="alert alert-danger">
        <?php echo $_REQUEST['text'];?>
    </div>
</div>
    <?php }?>
  <?php  } ?>
<div class="row">
    <div class="col-md-12">
        <h2>Online Boutiques</h2>
    </div>
</div>
<div class="row">
    <hr>
</div>
<div class="row">
<?php
$sql = "SELECT * FROM `bottiqueowner` ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    <div class="col-md-3">
        <?php echo $row["name"]; ?><br>
        <a href = "view_bottique_owner.php?id=<?php echo $row["id"]; ?>" class="btn btn-default">
        <img height="100" width="100" src="http://localhost/rabia/<?php echo $row['image']; ?>">
        </a>
    </div>

    <?php }
}?>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Featured Products</h2>
    </div>
</div>
<div class="row">
    <hr>
</div>
<div class="row">
<?php
$sql = "SELECT * FROM `product` ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    <div class="col-md-3">
        <?php echo $row["productname"]; ?><br><img height="100" width="100" src="http://localhost/front-site/<?php echo $row['image']; ?>">
    </div>
    <a href = "view_bottique_owner.php?id=<?php echo $row["id"]; ?>" class="btn btn-default">view</a>

    <?php }
}?>
</div>