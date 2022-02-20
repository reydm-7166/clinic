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
    <style>
        #container {
            margin-top: 6rem;
        }
        #actions {
            width: 20%;
        }
        .customers {
            width: 90%;
        }
        #date {
            width: 90%;
        }
        .notif {
            width: 30%;
            margin: auto;
            height: 10vh;
            margin-bottom: 1rem;
            padding: 0;
        }

    </style>
</head>
<body>
<?php $this->load->view('/admin_index/admin_headers'); ?>
<main id="container">

        <div>
            <div class="notif">
            <?php 
                $this->load->library('form_validation');
                    echo validation_errors("<div class='text-center lh-1 rounded bg-danger text-white p-0 m-2'>","</div>" ) ;  
            ?>

                <?php if(isset($_SESSION['notification_error'])){ ?>
                    <h3 class="rounded text-center bg-danger fw-light text-white p-1 m-2"><?= $_SESSION['notification_error'] ?></h3>
                <?php } unset($_SESSION['notification_error']);?>
            </div>
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
                    <form action="update" method="post">
                        <tr>
                            <input type="hidden" name="id" value="<?=$data['id'] ?>">
                            <input type="hidden" name="customer_id" value="<?=$data['customers_info_id'] ?>">
                            <td><?= $count++; ?></td>
                            <td><input class="border border-success rounded p-2" type="text" name="edit_firstname" value="<?= $data['patient_firstname']?>"></td>
                            <td><input class="border border-success rounded p-2" type="text" name="edit_lastname" value="<?= $data['patient_lastname']?>"></td>
                            <td><input class="border border-success rounded p-2" type="text" name="edit_email" value="<?= $data['patient_email']; ?>"></td>
                            <td>
                                <select class="border border-success rounded p-2" class="center" name="edit_category">
                                    <option value="1">CANCER</option>
                                    <option value="2">MALALA</option>
                                    <option value="3">WALA</option>
                                </select>
                            </td>
                            <td><input id="date" class="border border-success rounded p-2" type="datetime-local" name="edit_date"></td>
                            <td id="actions">   <input class="btn m-0 btn-success" type="submit" name="Save" value="Save"> 
                                                <input class="btn m-0 btn-danger" type="submit" name="Cancel" value="Cancel">
                            </td>
                        </tr>
                    </form>
                <?php } }  ?>
            </table>
        </div> 
    </main>

    <?php if(!empty($this->session->userdata('to_edit'))){ ?>






        <?php } ?>
</body>
</html>