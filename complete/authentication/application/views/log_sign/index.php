<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            padding: 4rem;
        }

        form {
            padding: 1rem;
            border: 1px solid black;
            width: 25%;
            text-align: right;
        }
        form *:not(h1) {
            font-size: 1rem;
        }
        #submit {
            margin-top: 1rem;
        }
        label {
            margin-right: 4rem;
        }
        h1 {
            text-align: center;

        }
        input {
            margin-right: 1rem;
        }
        
        main, .wrong {
            position: absolute;
            right: 15rem;
            top: 11rem;
        }
        .wrong {
            right: 12rem;
            top: 5rem;
        }
        main form {
            width: 100%;
            text-align: right;
        }
        main #login{
            text-align: center;
        }
        main label {
            margin: 1rem;
        }
        
    </style>
</head>
<body>
        <?php if(isset($_SESSION['notification'])){ ?>
            <header class="w-25 rounded bg-success text-white p-1 m-2">
                <h1><?= $_SESSION['notification'] ?></h1>
            </header>
        <?php } unset($_SESSION['notification']); ?>
    
    <form action="/Authentications/sign_up" method="post">
        <h1>Sign Up</h1>
        <?php 
            $this->load->library('form_validation');
            echo validation_errors("<div class='text-center lh-1 rounded bg-danger text-white p-0 m-1'>","</div>" ) ;  
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

        <input class="bg-primary text-white rounded" type="submit" id="submit" name="submit" value="register">
    </form>

    <?php if (isset($_SESSION['notification_error'])){ ?>
            <div class="wrong w-25 rounded bg-danger text-white p-1 m-2">
                <h1><?= $_SESSION['notification_error'] ?></h1>
            </div>
    <?php } unset($_SESSION['notification_error']); ?>
    
    <main>
        <form action="/Authentications/user" method="post">
            <h1>Sign In</h1>
            <label>Contact Number: </label>
            <input type="text" name="username"><br><br>

            <label>Password </label>
            <input type="password" name="password"><br><br>

            <input type="submit" id="login" name="submit" value="login">
        </form>
    </main>
</body>
</html>