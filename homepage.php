<?php
session_start();
include("connect.php");

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size: 50px; font-weight:bold;">
            Hello <?php
            $email = $_SESSION['email'];
            $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

            if ($row = mysqli_fetch_assoc($query)) {
                echo $row['firstName'] . ' ' . $row['lastName'];
            }
            ?>
            :)
        </p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
