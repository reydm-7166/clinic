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
        .notif {
            width: 40%;
            margin: auto;
            text-align: center;
        }
        h3 {
            padding: 10px;
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
            <div class="notif">
                <?php if (isset($_SESSION['approved'])){ 
                    echo "<h3 class='text-white ml-5 fs-1 text-center bg-success rounded'>" .$_SESSION['approved']. "</h3>"; 
                    } unset($_SESSION['approved']); ?></h3>
            </div>
            
            <table class="customers">
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Concern</th>
                    <th>Date Preferred</th>
                    <th>Action</th>
                </tr>
                <?php if(!empty($this->session->userdata('output'))) {$count = 1; foreach($this->session->userdata('output') as $data){ ?>
                <tr>
                    <td><?= $count++; ?></td>
                    <td><?= $data['name']; ?></td>
                    <td class="emails"><a href=""><?= $data['email']; ?></a></td>
                    <td><?= $data['concern']; ?></td>
                    <td><?= date("F j, Y g:i A",strtotime($data['date'])); ?></td>
                    <td><a href="approve">Finished</td>
                </tr>   
                <?php } } ?>
            </table>
        </div> 
    </main>
</body>
</html>