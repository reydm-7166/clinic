<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../user_guide/_static/css/admin_header.css">
</head>
<body>
    <header class="p-2 bg-secondary rounded-right">
        <h1 class="text-white text">WELCOME ADMIN </h1>
        
        <div class="panel">
            <h5><a href="dashboard">&ensp;Dashboard&ensp;</a></h5>
            <h5><a href="">&ensp;Chart&ensp;</a></h5>
            <h5><a href="receipt">&ensp;All Receipts&ensp;</a></h5>
            <h5><a href="user">&ensp;User Accounts&ensp;</a></h5>
            <h5><a href="appointment">&ensp;Appointments&ensp;</a></h5>
            <h5><a href="approved">&ensp;Approved Appointments&ensp;</a></h5>
            <h5 id="logout_admin"><a href="">Logout</a></h5>
        </div>
        
    </header>
    <?php 
            $user = $this->session->userdata('verify');
    ?>  


</body>
</html>