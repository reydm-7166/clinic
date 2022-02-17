<?php
include_once("connection.php");
include_once("process.php");
$conn = connectDB();

session_start();
if($_SESSION['adminuser'] == NULL){
    header('Location: index.html');
} 
 
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="newcss.css">
    <title>Admin panel(SAMPLE)</title>
</head>
<body>
    <h1 style="text-align: center;">ADMIN</h1>

    <a href="admin.html"><input type="button" value="BACK"></input></a>
    
    <div class="table">
            <table class="customers">
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Concern</th>
                    <th>Date Preferred</th>
                    <th>EDIT</th>
                    <th>APPROVAL</th>
                </tr>
                <?php while($row_result = $display_result->fetch_assoc()) { ?>
                <tr>
                    
                    <td>    <?php echo $count; ?></td>
                    <td>    <?php echo $row_result["first_name"]. " " . $row_result["last_name"]; ?></td>
                    <td class="emails"><a href="ViewEmail.php?email=<?php echo $row_result['email'];?>"><?php echo $row_result['email'];?></a></td>
                    <td>    <?php echo $row_result['sub_code']; ?></td>
                    <td>    <?php echo date("F j, Y, g:i a",strtotime($row_result['pref_date'])); ?></td>
                    <td class="edit"><a href="edit.php?ID=<?php echo $row_result['id'];?>"> Edit Data</td>
                    <td class="approval"><a href="approve.php">Approve!</td>
                    <?php $count++; }  ?>
                </tr>   
            </table>
    </div> 




</body>
</html>