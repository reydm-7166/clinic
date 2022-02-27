<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../user_guide/_static/css/admin_appointment.css">
    <title>Receipts</title>
    <style>
        
        h3 {
            padding: 10px;
        }
        a {
            margin: 0;
        }
        #container {
            height: 91.5vh;
        }
        .customers {
            width: 100%;
            
        }
        #container {
            text-align: center;
        }
        
    </style>
</head>
<body>

<?php  if(empty($this->session->userdata('admin'))) { redirect('login'); } ?>  <!-- CHECKS IF ADMIN IS LOGGED IN -- IF NOT SEND BACK TO LOGIN PAGE CODE BELOW IS FOR HEADER -->

    <?php $this->load->view('/partials/admin_headers'); ?>

    <main id="container" class="pt-0 mt-3">
        <h1 class="mt-0">Receipt</h1>   
        <div> 
            <table class="customers mt-4">
                <tr>
                    <th>Number</th>
                    <th>Recipient Name</th>
                    <th>Recipient Email</th>
                    <th>Patient Name</th>
                    <th>Patient Email</th>
                    <th>Appointment Date</th>
                    <th>Treatment Performed</th>
                    <th>Treatment Cost</th>
                    <th>Action</th>
                </tr>
                <?php if(!empty($this->session->userdata('receipt'))) { 
                        $count = 1; foreach($this->session->userdata('receipt') as $data){ ?>
                <tr>
                    <td><?= $count++; ?></td>
                    <td><?= $data['recipient_name']; ?></td>
                    <td><?= $data['recipient_email']; ?></td>
                    <td><?= $data['patient_name']; ?></td>
                    <td><?= $data['patient_email']; ?></td>
                    <td><?= date("F j, Y g:i A",strtotime($data['appointment_date'])); ?></td>
                    <td><?= $data['treatment_name'] ?></td>
                    <td>$<?= $data['treatment_cost']?>.00</td>
                    <td style="width: 10%"><a class="btn mr-1 mt-0 btn-success href="">Print</a><a class="btn mt-0 btn-primary" href="">Email</a></td>
                </tr>   
                <?php } } ?>
            </table>
        </div> 
    </main>
</body>
</html>