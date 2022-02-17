<?php

    include_once("connection.php");
    $conn = connectDB();

    if(isset($_POST['submit'])){

        $name = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $email = $_POST['email'];

        $insert = "INSERT INTO `register`(`first_name`,`last_name`,`email`)
                VALUES('$name','$lname','$email')";

        $conn->query($insert) or die ($conn->error);
        
        echo header("Location: register.php");
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER(SAMPLE)</title>
</head>
<body>
    <h3>REGISTER</h3>
    <form action="" class="form_submit" method="POST">
    <p class="name_label">FIRST NAME</p>
    <input type="text" name="f_name" class="f_name"></input>

    <p class="name_label">LAST NAME</p>
    <input type="text" name="l_name" class="l_name"></input>

    <p class="name_label">E-MAIL</p>
    <input type="email" name="email" class="e_mail"></input><br><br><br>

    <input type="submit" name="submit" class="submit_button" value="SUBMIT"></input>
</form>
</body>
</html>