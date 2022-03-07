<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Schedule</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
    <link rel="stylesheet" href="../../../user_guide/_static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../../../user_guide/_images/doctor.ico"/>


    <style>
        .notif {
            margin-bottom: 0;
            margin-top: 1rem;
            height: 9vh;
            width: 25%;
            margin: auto;
            text-align: center;
        }
        .topnav {
            background-color: darkseagreen;
        }
        @media only screen and (max-width: 983px){
            .no-ft {
                display: none;
             }
        }
    </style>
</head>
<body class="p-0">
         <?php $this->load->view('partials/header_home') ?>
                                                                            <!-- notif class just for notification if success (line 18)   -->
                                                                            <!--  just for notification if date is invalid   (line 23)   -->
                                                                            <!-- Shows validatior error (line 32)  -->
                                                                            <!-- If user is logged in save it's id in a hidden input for database insertion purpose (line 37)   -->                                       
        <div class="notif"> 
            <?php if(isset($_SESSION['notification'])){ ?>
                    <h1 class="rounded bg-success text-white p-1"><?= $_SESSION['notification'] ?></h1>
            <?php }  unset($_SESSION['notification']); ?>

            <?php if(isset($_SESSION['notification_error'])){ ?>
                    <h3 class="rounded text-center bg-danger fw-light text-white p-1"><?= $_SESSION['notification_error'] ?></h3>
            <?php } unset($_SESSION['notification_error']);?>
            <?php $this->load->library('form_validation');
              echo validation_errors("<div class='text-center lh-1 rounded bg-danger text-white p-0 m-1'>","</div>" ); ?>
        </div>     
        
   <?php $this->load->view('partials/schedules_partials') ?>

   <?php $this->load->view('partials/footer_home'); ?>

</body>
</html>