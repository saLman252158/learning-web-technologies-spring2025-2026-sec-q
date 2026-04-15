<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration</title>
</head>
<body>

<div>
    
    <div>
        <h1> X-Company </h1>
    
        <div class="nav">
            <a href="publichome.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="reg.php">Registration</a>
        </div>
    </div>

    <div>
        <fieldset>
            <legend>Registraton</legend>
            <p>Name <input type ="text" class ="name"> </p>
            <p>email <input type ="email" class ="email"> </p>
            <p>userName <input type ="text" class ="username"> </p>
            <p>Password <input type ="password" class ="password"> </p>
            <p>confirmpassword <input type ="password" class ="password"> </p>

            <fieldset> 
                <legend>Gender</legend>
                <input type ="checkbox" name= "gender" > Male
                <input type ="checkbox" name= "gender" > Female
                <input type ="checkbox" name= "gender" > Other
            </fieldset>

            <fieldset> 
                <legend>Date of birth</legend>
                <input type ="text" name= "date" > /
                <input type ="text" name= "month" > /
                <input type ="text" name= "year" > (dd/mm/yyy)
            </fieldset>
            <br><br>

            <input type = "submit"><input type = "reset">

        </fieldset>
    </div>

    <div>
        Copyright © 2017
    </div>

</div>

</body>
</html>