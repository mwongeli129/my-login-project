<?php
session_start();
include("connect.php");
<<<<<<< HEAD
?>



=======

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

>>>>>>> 0ae0f5d9323d992c6cee4ddff2a01a5e2e81d6e5
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
<<<<<<< HEAD
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

                while ($row = mysqli_fetch_array($query)) {
                    echo $row['firstName'] . '' . $row['lastName'];
                }
=======
            $email = $_SESSION['email'];
            // Corrected SQL query syntax
            $query = mysqli_query($conn, "SELECT * FROM `users` WHERE `email`='$email'");

            if ($row = mysqli_fetch_assoc($query)) {
                echo $row['firstName'] . ' ' . $row['lastName'];
>>>>>>> 0ae0f5d9323d992c6cee4ddff2a01a5e2e81d6e5
            }
            ?>
            :)
        </p>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>