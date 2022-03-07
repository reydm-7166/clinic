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
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://kit.fontawesome.com/14990fae2a.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="../../../user_guide/_images/doctor.ico"/>
    <title>User Account</title>
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
        h3 {
            padding: 10px;
        }
        #container {
            text-align: center;
        }
        
    </style>
</head>
<body>
    <?php $this->load->view('/partials/admin_headers'); ?>

    <main id="container">
        <h1 class="mt-0">User Accounts</h1>
        <div class="notif">
                <?php if (isset($_SESSION['approved'])){ 
                    echo "<h3 class='text-white ml-5 fs-1 text-center bg-success rounded'>" .$_SESSION['approved']. "</h3>"; 
                    } unset($_SESSION['approved']); 
                    
                    if(isset($_SESSION['deleted'])){
                        echo "<h3 class='rounded text-center bg-danger fw-light text-white p-1'>". $this->session->flashdata('delete') . "</h3>";
                    } unset($_SESSION['deleted']);
                    ?>

        </div>

        <div>
            <table class="customers">
                <tr>
                    <th>Number</th>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                </tr>   
                <?php if(!empty($this->session->userdata('output'))) {$count = 1; foreach($this->session->userdata('output') as $data){ ?>
                <tr>
                    <td><?= $count++; ?></td>
                    <td><?= $data['id']; ?></td>
                    <td><?= $data['first_name']; ?></td>
                    <td><?= $data['last_name']; ?></td>
                    <td><?= $data['email_address']; ?></td>
                    <td><?= $data['contact_number']; ?></td>
                    <td class="p-1"> <a class="btn m-0 mr-1 btn-warning" href="editusers/<?= $data['id'] ?>">Edit
                                    <a class="btn m-0 ml-1 btn-info" href="history/<?= $data['id'] ?>">View</a>
                    </td>

                </tr>   
                <?php } }?>
            </table>
        </div> 
    </main>
</body>
</html>