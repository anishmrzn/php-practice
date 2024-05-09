<?php
session_start();
include 'connection.php';
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($con,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");

    $users = mysqli_fetch_assoc($result);
    $row = mysqli_num_rows($result);
    if($users){
        $_SESSION['name'] = $users['Username'];
        
        echo "Logged in";
        header('location: dashboard.php');
    }
}
?>
