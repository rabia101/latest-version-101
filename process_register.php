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
$customer_name = $_POST['customer_name'];
$cnic = $_POST['cnic'];
$address = $_POST['address'];

$mobile_number = $_POST['mobile_number'];
$email = $_POST['email'];
$password = $_POST['password'];



$sql = "INSERT INTO `customer` (`id`, `customer_name`, `cnic`, "
        . " `address`, `mobile_number`, "
        . " `email`, `password`, `image`) "
        . "  VALUES "
        . " (NULL, "
        . " '$customer_name', "
        . " '$cnic', "
        . " '$address', "
        . " '$mobile_number', "
        . " '$email', "
        . " '$password', "
        . " '');";
$result = $conn->query($sql);
//$row = $result->fetch_assoc();


header("Location:index.php?message=success&text=Account created successfuly");

?>

