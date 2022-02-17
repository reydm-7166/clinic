<?php 

    include_once("connection.php");
    $conn = connectDB();  

    session_start();
    
    if($_SESSION != NULL){
        header('Location: admin.html');
    } 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOG IN</title>
</head>
<body>
    <h3>ADMIN LOG IN</h3>
        <form action="process.php" class="form_submit" method="POST">

            <p class="name_label">USERNAME</p>
            <input type="text" name="admin_username"></input>

            <p class="name_label">PASSWORD</p>
            <input type="password" name="admin_password"></input><br><br><br>

            <input type="submit" name="submit_admin" value="SUBMIT"></input>
        </form>
</body>
</html>
