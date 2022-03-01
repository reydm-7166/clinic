<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            padding: 4rem;
            text-align: center;
        }
        .notif {
            position: absolute;
            top: 2rem;
            left: 38.9%;
            width: 22%;
            height: 7vh;
        }
        form {
            padding: 1rem;
            border: 1px solid green;
            border-radius: .5rem;
            width: 22%;
            text-align: left;
            margin: 4rem auto;
        }
        form *:not(h1) {
            font-size: 1rem;
        }
        form h1 {
            margin: 1rem 0 2rem 8rem;
        }
    </style>
</head>
<body>
        <div class="notif">
            <?php if(isset($_SESSION['notification_error'])){ ?>
                    <h1 id="notif" class="rounded bg-danger text-white p-1 m-2"><?= $_SESSION['notification_error'] ?></h1>
            <?php } unset($_SESSION['notification_error']);?>
        </div>

       <?php if (!empty($this->session->userdata('admin'))){
                redirect('dashboard');
       } ?>

    <main>        
        <form action="/Signin_admins/admin_login" method="post">
            <h1>Sign In</h1>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Username</label>
                <input type="text" name="username" id="form2Example1" class="form-control" />
                
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Password</label>
                <input type="password" name="password" id="form2Example2" class="form-control" />
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                    <label class="form-check-label" for="form2Example34"> Remember me </label>
                </div>
                </div>

            </div>

            <!-- Submit button -->
            <input type="submit" name="submit" value="Login" class="btn btn-success btn-block mb-4">
        </form>
    </main>
</body>
</html>