<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xCompany</title>
</head>
<body>

<div>
    
    <div>
        <h1> X-Company </h1>
    
        <div class="nav">
            <a href="publichome.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="registration.php">Registration</a>
        </div>
    </div>

   <form method="post" action="login.php">
       <fieldset>
        <legend>Login</legend>
        username <input type="text" name="username" class="username">
        <br>
        <br>
        password <input type="password" name="password" class="password">
        <br>
        <br>

        <input type="submit" name="submit" value="Login">  <a href="forgotpass.php"> Forgot Password? </a>
       </fieldset>
   </form>

</div>

<?php
    
    if(isset($_REQUEST['submit'])){
    $username = $_REQUEST['username'] ?? '';
    $password = $_REQUEST['password'] ?? '';

    if($username === '' || $password === ''){
        echo "null username or password!";
    } else {

        if(isset($_SESSION['username']) && isset($_SESSION['password'])){

            if($username === $_SESSION['username'] && $password === $_SESSION['password']){
                $_SESSION['status'] = true;
                header('Location: loggedin.php');
                exit();
            } else {
                echo "invalid user!";
            }

        } else {
            echo "No registered user found!";
        }
    }
}
?>
</body>
</html> 