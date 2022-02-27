<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <link rel="stylesheet" href="../../../user_guide/_static/css/admin_appointment.css">
    <title>Appointment</title>
    <style>
        .notif {
            width: 40%;
            margin: auto;
            height: 6vh;
            margin-bottom: 1rem;
            padding: 0;
        }
        h3 {
            padding: 10px;
        }
        table td:last-child{
            width:25%;
        }
        #container {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php  if(empty($this->session->userdata('admin'))) { redirect('login'); } ?>  <!-- CHECKS IF ADMIN IS LOGGED IN -- IF NOT SEND BACK TO LOGIN PAGE CODE BELOW IS FOR HEADER -->
                                                                                 
    <?php $this->load->view('/partials/admin_headers'); ?>

    <main id="container" class="pt-0">
        <h1 class="mt-0">Appointments</h1>                                                                         <!-- FOR NOTIFICATION IN APPROVE/APPOINTMENTS/ETC -->
        <div class="notif">
                <?php if (isset($_SESSION['approved'])){ 
                    echo "<h3 class='text-white m-0 fs-1 text-center bg-success rounded'>" .$_SESSION['approved']. "</h3>"; 
                } unset($_SESSION['approved']); ?>

                <?php if (isset($_SESSION['deleted'])){ 
                    echo "<h3 class='text-white m-0 fs-1 text-center bg-danger rounded'>" .$_SESSION['deleted']. "</h3>"; 
                } unset($_SESSION['deleted']); ?>
        </div>
        
        <div>       
            <table class="customers">
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Concern</th>
                    <th>Date Preferred</th>
                    <th>Action</th>
                </tr>                                                             <!-- DISPLAY DATA FROM APPOINTMENTS TABLE -->
                <?php if(!empty($this->session->userdata('appointment_output'))) {                              
                        $count = 1; foreach($this->session->userdata('appointment_output') as $data){ ?>
                <tr>
                <form action="delete_appointment/<?= $data['appointment_id']; ?>" method="post">
                    <td><?= $count++; ?></td>
                    <td><?= $data['name']; ?></td>
                    <td><?= $data['age']; ?></td>
                    <td class="emails"><a href=""><?= $data['email']; ?></a></td>
                    <td><?= $data['concern']; ?></td>
                    <td><?= date("F j, Y g:i A",strtotime($data['date'])); ?></td>
                    <td>    <a class="btn m-0 mr-1 text-white btn-primary" href="edit/<?= $data['appointment_id'] ?>">Edit Data </a>
                            <a class="btn m-0 ml-1 btn-success" href="move/<?= $data['appointment_id']?>">Approve</a>
                            
                                <?php $this->load->view('admin_index/delete_modal'); ?>
                </form>
                    </td>
                </tr>   
                <?php } }  ?>
            </table>
        </div> 
    </main>
    
</body>
</html>