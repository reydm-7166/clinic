<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../user_guide/_static/css/admin_appointment.css">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://kit.fontawesome.com/14990fae2a.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="../../../user_guide/_images/doctor.ico"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Approved</title>
    <style>
        .notif {
            width: 70%;
            margin: auto;
            height: 6vh;
            margin-bottom: 1rem;
            padding: 0;
        }
        h3 {
            padding: 10px;
        }
        #container {
            text-align: center;
        }
        .customers {
            width: 90%;
        }

    </style>
</head>
<body>
    
<?php  if(empty($this->session->userdata('admin'))) { redirect('login'); } ?>  <!-- CHECKS IF ADMIN IS LOGGED IN -- IF NOT SEND BACK TO LOGIN PAGE CODE BELOW IS FOR HEADER -->


    <?php $this->load->view('/partials/admin_headers'); ?>

    <main id="container">
        <h1 class="mt-0">Approved</h1>
        <div>
            <div class="notif">
                <?php if (isset($_SESSION['approved'])){ 
                    echo "<h3 class='text-white ml-5 fs-1 text-center bg-success rounded'>" .$_SESSION['approved']. "</h3>"; 
                    } unset($_SESSION['approved']); ?></h3>
                    
                <?php if (isset($_SESSION['email_sent'])){ 
                    echo "<h3 class='text-white ml-5 fs-4 text-center bg-success rounded'>" .$_SESSION['email_sent']. "</h3>"; 
                    } unset($_SESSION['email_sent']); ?></h3>
            </div>
            
            <table class="customers">
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Concern</th>
                    <th>Date Preferred</th>
                    <th>Action</th>
                    <th>Email</th>
                </tr>
                <?php if(!empty($this->session->userdata('approved_data'))) { // 
                        $count = 1; foreach($this->session->userdata('approved_data') as $data){ ?>
                    <form action="approve" method="post">
                        <input id="fullname" type="hidden" name="fullname" value="<?php echo $data['patient_firstname']. " " . $data['patient_lastname'] ; ?>">
                        <input id="email" type="hidden" name="email" value="<?= $data['patient_email']; ?>">
                        <input id="treatment_name"  type="hidden" name="treatment_name" value="<?= $data['treatment_name']; ?>">
                        <input id="date"  type="hidden" name="date" value="<?= date("F j, Y g:i A",strtotime($data['appointment_date'])); ?>">
                       
                    
                <tr>
                <tr>
                    <td><?= $count++; ?></td>
                    <td><?php echo $data['patient_firstname']. " " . $data['patient_lastname'] ; ?></td>
                    <td class="emails"><a href=""><?= $data['patient_email']; ?></a></td>
                    <td><?= $data['treatment_name']; ?></td>
                    <td><?= date("F j, Y g:i A",strtotime($data['appointment_date'])); ?></td>
                    <td><a class="btn btn-success m-0" href="finish/<?= $data['main_id'] ?>">
                        Finished</a>
                    </td>
                    <td> <input class="btn btn-primary ml-2" type="submit" name="submit" value="Approved"></td>
                    </form>

                </tr> 
                  
                <?php }  } else { $this->session->unset_userdata('appointment_output'); } ?>
            </table>
        </div> 
    </main>

</body>
</html>