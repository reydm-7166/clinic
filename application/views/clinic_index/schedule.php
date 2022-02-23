<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a schedule</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../user_guide/_static/css/book_style.css">
    <style>
        .notif {
            margin-bottom: 0;
            margin-top: .5rem;
            height: 8vh;
        }
    </style>
</head>
<body>
        <?php $this->load->view('clinic_index/headers') ?>
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
        </div>
    <h3 class="text-center">Schedule</h3>
        
    <form action="/Book_schedules/book" method="POST">
        <?php 
            $this->load->library('form_validation');
            echo validation_errors("<div class='text-center lh-1 rounded bg-danger text-white p-0 m-1'>","</div>" ) ;  
            $user = $this->session->userdata('verify');
                if(!empty($user)){ ?>
        <input type="hidden" name="id" value=" <?= $user['id']; ?> ">
            <?php } else {
                redirect('signin');
            } ?>
            
        <label>First Name:</label>
        <input type="text" name="first_name">

        <label>Last Name:</label>
        <input type="text" name="last_name">

        <label>Age:</label>
        <input type="text" name="age">

        <label>Email Address:</label>
        <input type="email" name="email_address"><br>

        <label class="center">Choose Category:</label>
        <select class="center" name="category">
            <option value="1">CANCER</option>
            <option value="2">MALALA</option>
            <option value="3">WALA</option>
        </select>
        
        <label class="center">Choose preferred date:</label>
        <input class="center" type="datetime-local" name="date_pref">

        <input class="bg-primary text-white rounded" type="submit" name="submit" id="submit">
    </form>

</body>
</html>