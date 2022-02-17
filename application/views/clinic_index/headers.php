<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../user_guide/_static/css/index.css">
    <style>
        #home a {
            font-size: 45px;
        }
    </style>
</head>
<body>
    <header class="p-2 bg-secondary rounded-bottom">
            <h1 id="home" class="ml-5 text-white"><a href="index">Clinic</a></h1>
            <h2 id="book"><a href="book">Book for schedule</a></h2>
            <h2 id="logout"><a href="logout">Logout</a></h2>
    </header>
    <?php 
            $user = $this->session->userdata('verify');
    ?>  
</body>
</html>