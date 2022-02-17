<?php

    include_once("connection.php");
    $conn = connectDB();

    session_start();
    if($_SESSION['adminuser'] == NULL){
        header('Location: index.html');
    } 
    include_once("process.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newcss.css">
    <title>View Email Records</title>
</head>
<body>
    <h1 style="text-align: center;">VIEW EMAIL RECORDS</h1>
    <p style="text-align: right;"><a href="logout.php">Logout</a></p>

            <table class="customers">
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Concern</th>
                    <th>Date Preferred</th>
                </tr>
                <?php while($row = $execute_email->fetch_assoc()) { ?>
                <tr>
                    <td>    <?php echo $count; ?></td>
                    <td>    <?php echo $row["first_name"]. " " . $row["last_name"]; ?></td>
                    <td class="emails"><?php echo $row['email'];?></a></td>
                    <td>    <?php echo $row['sub_code']; ?></td>
                    <td>    <?php echo date("F j, Y, g:i a",strtotime($row['pref_date'])); ?></td>
                    <?php $count++; }  ?>
                </tr>    
            </table>

</body>
</html>
