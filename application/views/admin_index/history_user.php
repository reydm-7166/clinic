<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../user_guide/_static/css/admin_appointment.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>History</title>
    <style>
        .delete a{
            color: white;
            border: none;
        }
        .notif {
            width: 40%;
            margin: auto;
            height: 6vh;
            margin-bottom: 1rem;
            padding: 0;
        }
        nav{
            margin-left: 5rem;
            text-align: center;
        }

        .mb-0 {
            display: inline-block;
            margin-left: 5rem;
        }
        .warning {
            height: 5vh;
            width: 45%;
            text-align: center;
            margin: 1.5rem auto 1rem auto;
        }

    </style>
</head>
<body>
    <?php $this->load->view('/partials/admin_headers'); ?>   
    <main id="container">

        <nav>
            <h1 class="mt-1">History</h1>
        </nav>
                                                                    <!-- /*
                                                                    *       session[empty_history] is if a user has no appointment history, it will display warning 
                                                                    *       that it has no history yet
                                                                    */ -->
        <?php if(isset($_SESSION['empty_history'])) { 
                $this->session->unset_userdata('details'); 
                $this->session->unset_userdata('history');?>
                
                <div class="warning rounded bg-danger">
                    <h2 class='m-0 fw-bold text-white'> <?= $_SESSION['empty_history']?> </h2><br>
                </div>

        <?php }  unset($_SESSION['empty_history']);
               /*
               *       notify 
               *       that it has no history yet
               */ 
            if(!empty($this->session->userdata('details'))) { $details = $this->session->userdata('details');?>
                <h5 class='mb-0 fw-bold fst-italic'>Account Name: <?=  $details['name']?> </h5><br>
                <h5 class='mb-0 fw-bold fst-italic'>Account ID: <?= $details['id'] ?> </h5><br>
                <h5 class='mb-0 fw-bold fst-italic'>Total Appointment Visits: <?php echo $details['total'] ?></h5><br>
            <?php } ?>
        
        <div>
            <table class="customers">
                <tr>
                    <th>Number</th>
                    <th>Appointment ID</th>
                    <th>Patient First Name</th>
                    <th>Patient Last Name</th>
                    <th>Patient Email Address</th>
                    <th>Appointment Date</th>
                    <th>Action</th>
                </tr>   
                <?php if(!empty($this->session->userdata('history'))) {$count = 1; foreach($this->session->userdata('history') as $data){ ?>
                <tr>
                    <td><?= $count++; ?></td>
                    <td><?= $data['id']; ?></td>
                    <td><?= $data['patient_firstname']; ?></td>
                    <td><?= $data['patient_lastname']; ?></td>
                    <td><?= $data['patient_email']; ?></td>
                    <td><?= date("F j, Y g:i A",strtotime($data['appointment_date'])); ?></td>
                    <td class="p-1"> <a class="btn m-0 mr-1 btn-warning" href="">Email
                                    <a class="btn m-0 ml-1 btn-info" href="">Print</a>
                    </td>

                </tr>   
                <?php } }?>
            </table>
        </div>
    </main>
</body>
</html>