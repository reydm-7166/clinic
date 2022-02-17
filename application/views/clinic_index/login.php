<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../user_guide/_static/css/signup_style.css">
</head>
<body>
        <div class="notif">
            <?php if(isset($_SESSION['notification'])){ ?>
                    <h1 class="rounded bg-success text-white p-1 m-2"><?= $_SESSION['notification'] ?></h1>
            <?php } unset($_SESSION['notification']);?>
        </div>
    
    <form action="/Signup_users/sign_up" method="post">
        <h1>Sign Up</h1>
        <?php 
            $this->load->library('form_validation');
            echo validation_errors("<div class='text-center lh-1 rounded bg-danger text-white p-0 m-1'>","</div>" );  
        ?>

        <label>First Name: </label>
        <input type="text" name="fname"><br><br>

        <label>Last Name: </label>
        <input type="text" name="lname"><br><br>

        <label>Contact Number: </label>
        <input type="text" name="number"><br><br>

        <label>Email: </label>
        <input type="text" name="email"><br><br>

        <label>Password: </label>
        <input type="password" name="pass"><br><br>

        <label>Repeat Password: </label>
        <input type="password" name="c_pass"><br><br>

        <input class="bg-primary text-white rounded" type="submit" id="submit" name="submit" value="Register">
    </form>

</body>
</html>