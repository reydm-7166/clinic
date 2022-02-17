<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        a {
            position: absolute;
            right: 10rem;
            top: 5rem;
            text-decoration: none;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <main class="border border-primary p-5">
        <?php 
            if(!empty($this->session->userdata('verify'))){
                $data_show = $this->session->userdata('verify'); 
            } else {
                redirect('Authentications/index');
            }
        ?>
        <a href="/Authentications/logout">Logout</a>
        <h1 class="mb-5">Basic Information</h1>
        <p class="mb-5">First Name: <?= $data_show['first_name'] ?></p>
        <p class="mb-5">Last Name: <?= $data_show['last_name'] ?></p>
        <p class="mb-5">Contact Number: <?= $data_show['contact_number']; ?></p>
        <p class="mb-5">Last Failed Login:</p>
    </main>
</body>
</html>