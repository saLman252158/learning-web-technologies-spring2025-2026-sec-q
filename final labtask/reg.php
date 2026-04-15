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
            <a href="#">Home</a> |
            <a href="#">Login</a> |
            <a href="#">Registration</a>
        </div>
    </div>

    <div>
        <fieldset>
            <legend>Registraton</legend>
            <p>Name <input type ="text"> </p>
            <p>email <input type ="email"> </p>
            <p>userName <input type ="text"> </p>
            <p>Password <input type ="password"> </p>
            <p>confirmpassword <input type ="password"> </p>

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