<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../user_guide/_static/css/admin_appointment.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <title>Edit Users</title>
    <style>
        #container {
            margin-top: 5rem;
        }
        table td:last-child{
            width:100%;
        }
        .customers {
            width: 89%;
        }
        #name, #pass, #number {
            width: 9rem;
        }
        #email, #pass {
            width: 13rem;
        }
        .notif {
            width: 30%;
            margin: auto;
            height: 10vh;
            margin-bottom: 1.5rem;
            padding: 0;
        }
    </style>
    <script>
        function randomPassword(length) {
            var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
            var pass = "";
            for (var x = 0; x < length; x++) {
                var i = Math.floor(Math.random() * chars.length);
                pass += chars.charAt(i);
            }
            form.edit_password.value = pass;
        }
    </script>
</head>
<body>
<?php $this->load->view('/admin_index/admin_headers'); ?>
<main id="container">

        <div>
            <div class="notif">
            <?php 
                if(isset($_SESSION['notification'])){ ?>
                    <h1 class="rounded bg-success text-white p-1 m-2"><?= $_SESSION['notification'] ?></h1>
                <?php } unset($_SESSION['notification']);

                $this->load->library('form_validation');
                    echo validation_errors("<div class='text-center lh-1 rounded bg-danger text-white p-0 m-2'>","</div>" ) ;  
               ?>
            </div>
            <table class="customers">
                <tr>
                    <th>Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>                                                             <!-- DISPLAY DATA FROM APPOINTMENTS TABLE -->
                    <?php if(!empty($this->session->userdata('to_edit_userdata'))){    

                            $count = 1; foreach($this->session->userdata('to_edit_userdata') as $data){ ?>
                                             <!-- /*_____________________________________________________________________________________________________________
                                            |  this script will generate new password for the user. because md5 cant be decrypted we wont be able to decrypt md5 |
                                            |  when admin clicks reset password it will generate randomize new password                                          |
                                            |_____________________________________________________________________________________________________________________  */ -->
                    <form name="form" action="updateusers" method="post">
                        <tr>
                            <input type="hidden" name="id" value="<?= $data['id']?>">
                            <td><?= $count++; ?></td>
                            <td><input id="name"  class="border border-success rounded p-2" type="text" name="edit_firstname" value="<?= $data['first_name']?>"></td>
                            <td><input id="name"  class="border border-success rounded p-2" type="text" name="edit_lastname" value="<?= $data['last_name']?>"></td>
                            <td><input id="email" class="border border-success rounded p-2" type="text" name="edit_email" value="<?= $data['email_address']; ?>"></td>
                            <td><input id="number"  class="border border-success rounded p-2" type="text" name="edit_number" value="<?= $data['contact_number']; ?>"></td>
                            <td><input id="pass" class="border border-success rounded p-2" type="text" name="edit_password" value=""></td>
                            <td id="actions">   <input class="btn m-0 btn-warning" type="button" onClick="randomPassword(15);" name="NewPass" id="reset" value="Reset Password"> 
                                                        <?php $this->load->view('/admin_index/confirm_modal'); ?> 
                                                <input class="btn m-0 btn-danger" type="submit" name="Cancel" value="Cancel">
                            </td>
                        </tr>
                    </form>
                <?php } }  ?>
            </table>
        </div>
    </main>
</body>
</html>