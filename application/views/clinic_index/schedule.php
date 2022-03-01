<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Schedule</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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
            background-color: skyblue;
        }
    </style>
</head>
<body class="p-0">
                <div class="topnav mt-0">
                <div class="topnav-logo"><a href="home"><img src="../../../user_guide/_images/Logo.png" width='250' height='40'></a></div>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="service">Services</a></li>
                    <li><a href="faq">FAQs</a></li>
                    <li><a href="book" class="current">Book A Schedule</a></li>
                    <li><a href="logout" class="text-danger">Logout</a></li>
                </ul>
                </div>
                <?php if(empty($this->session->userdata('verify'))){
                    redirect('signin');
                } ?>
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

</body>
</html>