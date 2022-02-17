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
    <title>EDIT FILE</title>
</head>
<body>

    <form action="" onsubmit="SuccessfullyEdited()" method="POST">
    <input type="submit" name="Back" value="Back"></input>


    <p class="name_label">FIRST NAME</p>
    <input type="text" name="f_name_edit" value="<?php echo $print['first_name'];?>"></input>

    <p class="name_label">LAST NAME</p>
    <input type="text" name="l_name_edit" value="<?php echo $print['last_name'];?>"></input></input>

    <p class="name_label">E-MAIL</p>
    <input type="email" size="30" disabled name="email_sched_edit" value="<?php echo $print['email']. " ". "[Uneditable]";?>"></input><br><br>
    
    <select name="subject_sched_edit" value="<?php echo $print['subj_name'];?>"></input>
        <option value="CANCER">CANCER</option>
        <option value="MALALA">MALALA</option>
        <option value="WALA">WALA</option>
    </select><br><br>
    
    <label for="date">Choose preferred date</label><br><br>
    <input type="datetime-local" name="date_pref_edit" value="<?php echo $print['pref_date'];?>"></input> Book for schedule </input><br><br>

    <input type="submit" name="submit_changes" value="Save Changes"></input>

    
    </form>


</body>
</html>