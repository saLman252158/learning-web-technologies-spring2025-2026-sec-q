<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if (isset($_SESSION['username']) && isset($_SESSION['password']) && $username === $_SESSION['username'] && $password === $_SESSION['password']) {
        header("Location: home.php");
        exit();
    } 
    elseif ($username === "admin" && $password === "admin") {
        
        header("Location: adminhome.php");
        exit();
    }
    else {
        echo "Invalid username or password.";
    }
}
?>