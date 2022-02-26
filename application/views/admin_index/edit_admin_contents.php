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
        table td:last-child{
            width:10%;
        }
        table td:first-child{
            width:5%;
        }
        .customers {
            width: 75%;
        }
        #date {
            width: 90%;
        }
        .notif {
            width: 30%;
            margin: auto;
            height: 10vh;
            margin-bottom: 1.5rem;
            padding: 0;
        }
        
    </style>
</head>
<body>
<?php $this->load->view('/partials/admin_headers'); ?>
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
                    <th>Name</th>
                    <th>Cost</th>
                    <th>Edit Image</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>                                                           <!-- DISPLAY DATA FROM APPOINTMENTS TABLE -->
                
                <?php if(!empty($this->session->userdata('edit_contents'))) {                              
                            $count = 1; foreach($this->session->userdata('edit_contents') as $data){ ?>

                <?php echo form_open_multipart('insert');?> 

                        <tr>
                            <input type="hidden" name="id" value="<?= $data['treatments_id']; ?>">
                            <input type="hidden" name="treatment_image" value="<?= $data['treatment_image']; ?>">
                            <td><?= $count++; ?></td>
                            <td><input class="border border-success rounded p-2" type="text" name="edit_treatmentsname" value="<?= $data['treatment_name']; ?>"></td>
                            <td>$ <input class="border border-success rounded p-2" type="text" name="edit_treatmentscost" value="<?= $data['treatment_cost']; ?>"></td>
                            <td><input type="file" name="userfile" size="20" /></td>
                            <td><?= $data['category_title']; ?></td>
                            <td>    <input class="btn btn-primary rounded p-2" type="submit" name="submit" value="Save"></td>
                        </tr> 
                    <?php echo form_close(); ?>

                <?php } }  ?>
            </table>
            
        </div> 
    </main>
</body>
</html>