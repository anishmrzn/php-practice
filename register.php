<?php
session_start();
include 'connection.php';
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $sql = "INSERT INTO user(username, password , email) 
    VALUES('$username', '$password','$email')";
    if(mysqli_query($con, $sql)){
        echo "user registerd successfully";

    }
    else{
        echo 'Error'. mysqli_error($con);
    }
}
?>
