<?php

<<<<<<< HEAD
$host="localhost";
$user="root";
$pass="";
$db="login";
$conn=new mysqli($host ,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>
=======
$host = "localhost";
$user = "root";
$pass = "";
$db = "login";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Failed to connect to DB: " . $conn->connect_error);
}


?>
>>>>>>> 0ae0f5d9323d992c6cee4ddff2a01a5e2e81d6e5
