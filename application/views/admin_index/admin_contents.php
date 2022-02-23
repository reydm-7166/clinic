<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../user_guide/_static/css/admin_appointment.css">
    <style>
        .notif {
            width: 40%;
            margin: auto;
            height: 6vh;
            margin-bottom: 1rem;
            padding: 0;
        }
        h1 {
            padding: 10px;
            text-align: center;
        }
    </style>
    <title>Manage Contents</title>
</head>
<body>
    <?php  if(empty($this->session->userdata('admin'))) { redirect('login'); } ?>  <!-- CHECKS IF ADMIN IS LOGGED IN -- IF NOT SEND BACK TO LOGIN PAGE CODE BELOW IS FOR HEADER -->
                                                                                    
                                                                                    <?php $this->load->view('/admin_index/admin_headers'); ?>

        <main id="container">                                                                     <!-- FOR NOTIFICATION IN APPROVE/APPOINTMENTS/ETC -->
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
                        <td><?= $count++; ?></td>
                        <td><?= $data['name']; ?></td>
                        <td><?= $data['age']; ?></td>
                        <td class="emails"><a href=""><?= $data['email']; ?></a></td>
                        <td><?= $data['concern']; ?></td>
                        <td><?= date("F j, Y g:i A",strtotime($data['date'])); ?></td>
                        <td>    <a class="btn m-0 mr-1 text-white btn-primary" href="edit/<?= $data['appointment_id'] ?>">Edit Data 
                                <a class="btn m-0 ml-1 btn-success" href="move/<?= $data['appointment_id']?>">Approve</a>
                        </td>
                    </tr>   
                    <?php } }  ?>
                </table>
            </div> 
        </main>
    
</body>
</html>