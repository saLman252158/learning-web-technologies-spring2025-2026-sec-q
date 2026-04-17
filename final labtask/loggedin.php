<?php
session_start();
if(!isset($_SESSION['status']) || $_SESSION['status'] !== true){
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>xCompany</title>
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
    </style>
</head>
<body>

<div class="header">
    <h1> X-Company </h1>

    <div class="header">
        logged in as <a href="profile.php"><?php echo $_SESSION['username'] ; ?></a> | <a href="logout.php">Logout</a>
    </div>
</div>


<div style ="display: flex;">

    <div class ="container1">
        <h2>Account</h2>
        <hr>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profile.php">View Profile</a></li>
            <li><a href="editprofile.php">Edit Profile</a></li>
            <li><a href="changepass.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="container2">
        <h2>Welcome <?php echo $_SESSION['username'] ; ?></h2>
    </div>
</div>

</body>
</html>