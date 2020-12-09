<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "android";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["namekey"];
$phone = $_POST["phonekey"];
$email =$_POST["emailkey"];

$sql = "INSERT INTO users (name, phone, email)
VALUES ('$name', '$phone', '$email');";
$cheak = mysqli_query($conn, $sql);
if(!$cheak){
    echo "Error".mysql_error();
}
else{
    echo"register done";
}
$conn->close();


?>