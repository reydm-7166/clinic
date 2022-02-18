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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Concern</th>
                    <th>Date Preferred</th>
                    <th>Edit</th>
                    <th>Approval</th>
                    <th>History</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="emails"><a href="">email</a></td>
                    <td></td>
                    <td></td>
                    <td class="edit"><a href=""> Edit Data</td>
                    <td class="approval"><a href="">Approve!</td>
                    <td></td>
                </tr>   
            </table>
        </div> 
    </main>
</body>
</html>