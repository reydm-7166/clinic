<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../user_guide/_static/css/admin_appointment.css">
    <title>Admin</title>
    <style>
        .delete a{
            color: white;
            border: none;
        }
        
    </style>
</head>
<body>
    <?php $this->load->view('/admin_index/admin_headers'); ?>

    <main id="container">
        <form action="result.php" method="get" style="text-align: right">
            <input type="text" name="search" id="search" value=""></input>
            <input type="submit" name="search_btn" value="SEARCH"></input>
        </form>
        <div>
            <table class="customers">
                <tr>
                    <th>Number</th>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Edit</th>
                    <th>Action</th>
                </tr>
                <?php $count = 1; foreach($this->session->userdata('output') as $data){ ?>
                <tr>
                    <td><?= $count++; ?></td>
                    <td><?= $data['id']; ?></td>
                    <td><?= $data['first_name']; ?></a></td>
                    <td><?= $data['last_name']; ?></a></td>
                    <td><?= $data['email_address']; ?></td>
                    <td><?= $data['contact_number']; ?></td>
                    <td class="edit"><a href="">Edit</td>
                    <td class="bg-danger delete"><a href="">Delete</a></td>
                </tr>   
                <?php } ?>
            </table>
        </div> 
    </main>
</body>
</html>