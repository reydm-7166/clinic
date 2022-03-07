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
    <?php if (isset($_SESSION['email_receipt'])){ 
                    echo "<h3 class='text-white ml-5 fs-4 text-center bg-success rounded'>" .$_SESSION['email_receipt']. "</h3>"; 
                    } unset($_SESSION['email_receipt']); ?></h3>
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
                        <form action="receipt_send" method="post">
                            <input name="recipient_name" type="hidden" value="<?php echo $data['recipient_name']?>">
                            <input name="recipient_email" type="hidden" value="<?= $data['recipient_email']; ?>">

                            <input name="patient_name" type="hidden" value="<?php echo $data['patient_name']?>">
                            <input name="patient_email" type="hidden" value="<?= $data['patient_email']; ?>">

                            <input name="treatment_name"  type="hidden" value="<?= $data['treatment_name']; ?>">
                            <input name="treatment_cost"  type="hidden" value="<?= $data['treatment_cost']; ?>">
                <tr>
                    <td><?= $count++; ?></td>
                    <td><?= $data['recipient_name']; ?></td>
                    <td><?= $data['recipient_email']; ?></td>
                    <td><?= $data['patient_name']; ?></td>
                    <td><?= $data['patient_email']; ?></td>
                    <td><?= date("F j, Y g:i A",strtotime($data['appointment_date'])); ?></td>
                    <td><?= $data['treatment_name'] ?></td>
                    <td>₱<?= $data['treatment_cost']?>.00</td>
                    <td style="width: 10%"> <input class="btn mt-0 btn-primary" type="submit" value="Email"></td>
                   
                </tr> 
                        </form>  
                <?php } } ?>
            </table>
        </div> 
    </main>
    
</body>
</html>