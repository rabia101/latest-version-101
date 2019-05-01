<?php
session_start();
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
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM `customer` where email = '$email' and password = '$password';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if(!empty($row['email'])){
        $_SESSION['customer'] = $row;
	header("Location:index.php?message=success");
}else{
	header("Location:index.php?message=error");
}
?>

