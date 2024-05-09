<?php
session_start(); 
include 'connection.php';
$username = $_SESSION['name'];
$query = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($con,$query);
$user = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php
    echo $username ."<br>";
    echo $user['Password'];
    ?></h1>
    
</body>
</html>