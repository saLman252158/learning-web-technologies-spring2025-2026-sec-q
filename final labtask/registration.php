<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>X Company - Registration</title>
            <style>
        body {
            margin: 0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 24px;
        }
        .container1 {
            padding: 20px 24px;
            height: 400px;
            width: 40%;
            border: 1px solid black;
        }

         .container2 {
            padding: 20px 24px;
            height: 400px;
            width: 60%;
            border: 1px solid black;
        }

        .container3 {
            padding: 20px 24px;
            height: 400px;
            width: 100%;
            border: 1px solid black;
            
        }

            .footer {
            text-align: center;
            padding: 10px;
            height: 50px;
            width: 100%;
            border: 1px solid black;
        }
    </style>
</head>

<body>

<div class="header">
    <div>
        <h1> X-Company </h1>
    </div>
        <div>
            <a href="publichome.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="registration.php">Registration</a>
        </div>
</div>

<div class="container3" style="justify-content: center; align-items: center; display: flex;">
        
    <form method="POST" style ="display: inline-block;">
        <fieldset>
            <legend>REGISTRATION</legend>
            <table>
                <tr><td>Name</td><td>: <input type="text" name="name"></td></tr>
                <tr><td>Email</td><td>: <input type="email" name="email"></td></tr>
                <tr><td>User Name</td><td>: <input type="text" name="username"></td></tr>
                <tr><td>Password</td><td>: <input type="password" name="password"></td></tr>
                <tr><td>Confirm Password</td><td>: <input type="password" name="confirm_password"></td></tr>
            </table>

            <fieldset>
                <legend>Gender</legend>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
            </fieldset>

            <fieldset>
                <legend>Date of Birth</legend>
                <input type="text" name="day" size="2"> / 
                <input type="text" name="month" size="2"> / 
                <input type="text" name="year" size="4"> (dd/mm/yyyy)
            </fieldset>

            <br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Reset">
        </fieldset>
    </form>
</div>
      <div class="footer">
        Copyright © 2017
    </div>

<?php
    
    if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $conf_pass = $_POST['confirm_password'];
    if ($pass !== $conf_pass) {
        die("Passwords do not match!");
    }
    $_SESSION['username'] = $user;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $pass;
    $_SESSION['status'] = "Registered";

  
    header("Location: login.php");
    exit();
}
?>
</body>
</html>