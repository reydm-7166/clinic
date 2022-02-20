<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../user_guide/_static/css/admin_appointment.css">
    <title>Edit Appointment</title>
</head>
<body>
<?php $this->load->view('/admin_index/admin_headers'); ?>
<main id="container">
                                                                                <!-- FOR NOTIFICATION IN APPROVE/APPOINTMENTS/ETC -->
        <div class="notif">
                <?php if (isset($_SESSION['approved'])){ 
                    echo "<h3 class='text-white ml-5 fs-1 text-center bg-success rounded'>" .$_SESSION['approved']. "</h3>"; 
            } unset($_SESSION['approved']); ?></h3>
            <h2 class="text-center">EDIT DATA</h2>
        </div> 
            
        <div>       
            <table class="customers">
                <tr>
                    <th>Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Concern</th>
                    <th>Date Preferred</th>
                    <th>Action</th>
                </tr>                                                             <!-- DISPLAY DATA FROM APPOINTMENTS TABLE -->

                <?php if(!empty($this->session->userdata('to_edit'))){                  
                        $count = 1; foreach($this->session->userdata('to_edit') as $data){ ?>
                <tr>
                    <td><?= $count++; ?></td>
                    <td><input class="border-0 rounded p-2"  type="text" name="edit_firstname" value="<?= $data['patient_firstname']?>"></td>
                    <td><input class="border-0 rounded p-2"  type="text" name="edit_lastname" value="<?= $data['patient_lastname']?>"></td>
                    <td><input class="border-0 rounded p-2"  type="text" name="edit_email" value="<?= $data['patient_email']; ?>"></td>
                    <td>
                        <select class="border-0 rounded p-2" class="center" name="edit_category">
                            <option value="1">CANCER</option>
                            <option value="2">MALALA</option>
                            <option value="3">WALA</option>
                        </select>
                    </td>
                    <td><input class="border-0 rounded p-2" type="datetime-local" name="edit_date"></td>
                    <td><a class="btn m-0 btn-success" href="">Save</td>
                </tr>   
                <?php } }  ?>
            </table>
        </div> 
    </main>



    <?php if(!empty($this->session->userdata('to_edit'))){ ?>






        <?php } ?>
</body>
</html>