<?php
if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    echo "handler file <br>";
    echo "Your name is: " . $name;
} else {
    echo "Please submit the form from form.html";
}
?>