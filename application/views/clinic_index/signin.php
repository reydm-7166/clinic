<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../user_guide/_static/css/signin_style.css">
</head>
<body>
        <div class="notif">
            <?php if(isset($_SESSION['notification_error'])){ ?>
                    <h1 class="rounded bg-danger text-white p-1 m-2"><?= $_SESSION['notification_error'] ?></h1>
            <?php } unset($_SESSION['notification_error']);?>
        </div>
    <main>
        <form action="/Signin_users/user_login" method="post">
                <h1>Sign In</h1>
                <label>Contact Number: </label>
                <input type="text" name="username"><br><br>

                <label>Password </label>
                <input type="password" name="password"><br><br>

                <input type="submit" id="login" name="submit" value="Login">
        </form>
    </main>
</body>
</html>