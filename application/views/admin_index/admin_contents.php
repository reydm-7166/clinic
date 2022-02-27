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
    <style>
        .notif {
            width: 40%;
            margin: auto;
            height: 6vh;
            margin-bottom: 1rem;
            padding: 0;
        }
        h1 {
            text-align: center;
        }
        #container {
            margin-top: 2rem;
            text-overflow: scroll;
            overflow-y: scroll;
        }
        #container h1 {
            margin: 0;
        }
        .customers {
            margin-bottom: .8rem;
        }
        #add_new {
            color: blue;
            margin-left: 10rem;
        }
        .customers {
            width: 80%; 
        }
        .customers a {
            color: blue;
            border: none;
        }

    </style>
    <title>Manage Contents</title>
</head>
<body>
    <?php  if(empty($this->session->userdata('admin'))) { redirect('login'); } ?>  <!-- CHECKS IF ADMIN IS LOGGED IN -- IF NOT SEND BACK TO LOGIN PAGE CODE BELOW IS FOR HEADER -->
                                                                                    
               <?php $this->load->view('/partials/admin_headers'); ?>

                                                                                   
        <main id="container"> 
            <div class="notif">
                <?php if(isset($_SESSION['success'])){ 
                    echo "<h1 class='text-white m-0 fs-1 text-center bg-success rounded'>" .$_SESSION['success']. "</h1>"; 
                } unset($_SESSION['success']); ?>

                <?php if(isset($_SESSION['added_success'])){ 
                    echo "<h1 class='text-white m-0 fs-1 text-center bg-success rounded'>" . $_SESSION['added_success']. "</h1>"; 
                } unset($_SESSION['added_success']); ?>

                <?php if(isset($_SESSION['deleted_treatment'])){ 
                    echo "<h1 class='text-white m-0 fs-1 text-center bg-danger rounded'>" . $_SESSION['deleted_treatment']. "</h1>"; 
                } unset($_SESSION['deleted_treatment']); ?>
            </div>   
        <h1 class="mb-3">Treatments</h1>                                                           <!-- FOR NOTIFICATION IN APPROVE/APPOINTMENTS/ETC -->
            <div>   
                <table class="customers">
                    
                    <tr>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Cost</th>
                        <th>Image Name</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>                                                             <!-- DISPLAY DATA FROM APPOINTMENTS TABLE -->
                    <?php if(!empty($this->session->userdata('treatment_contents'))) {                              
                            $count = 1; foreach($this->session->userdata('treatment_contents') as $data){ ?>
                    <tr>
                    <form action="manage/delete/<?= $data['treatments_id']?>" method="post">
                        <td><?= $count++; ?></td>
                        <td><?= $data['treatment_name']; ?></td>
                        <td>₱<?= $data['treatment_cost']; ?></td>
                        <td><a href="../../uploads/<?= $data['treatment_image']?>" target="_blank"><?= $data['treatment_image'] ?></a></td>
                        <td><?= $data['category_title']; ?></td>
                        <td>    <a class="btn m-0 mr-1 text-white btn-primary" href="Manages_admin/edit/<?= $data['treatments_id'] ?>">Edit Data </a>
                                <a class="btn m-0 mr-1 text-white btn-danger" href="Manages_admin/delete/<?= $data['treatments_id'] ?>">Delete </a>
                        </td>
                        </form>
                    </tr>   
                    <?php } }  ?>
                </table>
                <?php $this->load->view('admin_index/add_treatment_service_modal'); ?>

            </div> 

            <div>   
            <h1 class="mb-3">Services</h1>      
            <table class="customers">      
                    <tr>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Cost</th>
                        <th>Image Name</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>                                                             <!-- DISPLAY DATA FROM APPOINTMENTS TABLE -->
                    <?php if(!empty($this->session->userdata('services_contents'))) {                              
                            $count = 1; foreach($this->session->userdata('services_contents') as $data){ ?>
                    <tr>
                    <form action="manage/delete/<?= $data['treatments_id']?>" method="post">
                        <td><?= $count++; ?></td>
                        <td><?= $data['treatment_name']; ?></td>
                        <td>₱<?= $data['treatment_cost']; ?></td>
                        <td><a href="../../uploads/<?= $data['treatment_image']?>" target="_blank"><?= $data['treatment_image'] ?></a></td>
                        <td><?= $data['category_title']; ?></td>
                        <td>    <a class="btn m-0 mr-1 text-white btn-primary" href="Manages_admin/edit/<?= $data['treatments_id'] ?>">Edit Data </a>
                                <a class="btn m-0 mr-1 text-white btn-danger" href="Manages_admin/delete/<?= $data['treatments_id'] ?>">Delete </a>
                    </form>
                        </td>
                    </tr> 
                    <?php } }  ?>
                </table>
                <?php $this->load->view('admin_index/add_treatment_service_modal'); ?>
            </div> 
        
        
        </main>
    
</body>
</html>