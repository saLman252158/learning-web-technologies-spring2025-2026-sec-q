<!DOCTYPE html>
<html lang="en">
<head>
    <title>X Company - Registration</title>
</head>

<body>

<div>
        <h1> X-Company </h1>
    
        <div class="nav">
            <a href="publichome.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="registration.php">Registration</a>
        </div>
    </div>


    <form method="POST">
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

      <div>
        Copyright © 2017
    </div>

    <?php
session_start();
if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $conf_pass = $_POST['confirm_password'];
    if ($pass !== $conf_pass) {
        die("Passwords do not match!");
    }
    $_SESSION['user_id'] = $user;
    $_SESSION['status'] = "Registered";

  
    header("Location: publichome.php");
    exit();
}
?>
</body>
</html>