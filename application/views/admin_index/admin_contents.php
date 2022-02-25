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
            text-align: center;
        }
        #container {
            border: 1px solid black;
            margin-top: 4rem;
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
        <h1>Treatments</h1>                                                           <!-- FOR NOTIFICATION IN APPROVE/APPOINTMENTS/ETC -->
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
                        <td><?= $count++; ?></td>
                        <td><?= $data['treatment_name']; ?></td>
                        <td>$<?= $data['treatment_cost']; ?></td>
                        <td><a href="../../uploads/<?= $data['treatments_image']?>" target="_blank"><?= $data['treatments_image'] ?></a></td>
                        <td><?= $data['category_title']; ?></td>
                        <td>    <a class="btn m-0 mr-1 text-white btn-primary" href="Manages_admin/edit/<?= $data['treatments_id'] ?>">Edit Data 
                                <a class="btn m-0 ml-1 text-white btn-danger" href="manage/delete/<?= $data['treatments_id']?>">Delete</a>
                        </td>
                    </tr>   
                    <?php } }  ?>
                </table>
                <a id="add_new" href="">Add New</a>
            </div> 

            <div>   
            <h1>Services</h1>      
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
                        <td><?= $count++; ?></td>
                        <td><?= $data['treatment_name']; ?></td>
                        <td>$<?= $data['treatment_cost']; ?></td>
                        <td><a href="../../uploads/<?= $data['treatments_image']?>" target="_blank"><?= $data['treatments_image'] ?></a></td>
                        <td><?= $data['category_title']; ?></td>
                        <td>    <a class="btn m-0 mr-1 text-white btn-primary" href="Manages_admin/edit/<?= $data['treatments_id'] ?>">Edit Data 
                                <a class="btn m-0 ml-1 text-white btn-danger" href="manage/delete/<?= $data['treatments_id']?>">Delete</a>
                        </td>
                    </tr>   
                    <?php } }  ?>
                </table>
                <a id="add_new" href="">Add New</a>
            </div> 
        
        
        </main>
    
</body>
</html>