<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Basic validation: check if username and password are not empty
    if (!empty($username) && !empty($password)) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: login.php");
        exit();
    } else {
        echo "Please fill in both username and password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
    <form method="post">

        <input type="text" name="username" placeholder="Username" ><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>


