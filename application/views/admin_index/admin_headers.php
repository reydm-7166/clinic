<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../user_guide/_static/css/admin_header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        header h1 {
            margin-top: 10rem;
        }
        h1 a {
            display: block;
            font-size: 22px;
            margin-top: 1rem;
            border: none;
        }

    </style>
    
</head>
<body>
    <header class="p-2 bg-secondary rounded-right">
        <?php $data = $this->session->userdata('admin'); ?>
            <h1 class="text-white text">WELCOME <a href=""> <?= $data['first_name']?> </a></h1>
        
        
        <div class="panel">
            <h5><i class="fa fa-list-alt text-white"></i>&ensp;<a href="dashboard">&ensp;Dashboard&ensp;</a></h5>
            <h5><i class="fa fa-area-chart text-white"></i>&ensp;<a href="charts">&ensp;Chart&ensp;</a></h5>
            <h5><i class="fas fa-receipt text-white"></i>&ensp;<a href="receipt">&ensp;All Receipts&ensp;</a></h5>
            <h5><i class="fa fa-users text-white"></i>&ensp;<a href="user">&ensp;User Accounts&ensp;</a></h5>
            <h5><i class="fa fa-calendar text-white"></i>&ensp;<a href="appointment">&ensp;Appointments&ensp;</a></h5>
            <h5><i class="fa fa-check-circle text-white"></i>&ensp;<a href="approved">&ensp;Approved&ensp;</a></h5>
            <h5 id="logout_admin"><i id="icon" class="fas fa-sign-out-alt text-white"></i>&ensp;<a href="Signin_admins/logout">Logout</a></h5>

            
        </div>
        
    </header>


</body>
</html>
