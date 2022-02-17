<?php

include_once("connection.php");

    $conn = connectDB();


    // KAILANGAN ANG INPUT NI USER SA TIME IS 1 DAY AFTER SA DATE NG PAG SIGN UP NYA.

    if(isset($_POST['submit'])){

        $name = $_POST['f_name_sched'];
        $lname = $_POST['l_name_sched'];
        $email = $_POST['email_sched'];
        $subject = $_POST['subject_sched'];
        $time = $_POST['date_pref'];

        date_default_timezone_set('Asia/Manila');

        $today = date('Y-m-d H:i: a', strtotime("+1 day"));
        $time_dummy = date("Y-m-d H:i: a",strtotime($time));
        
	echo $time;

        if($name != NULL && $lname != NULL && $email != NULL && $subject != NULL && $time != NULL && $time_dummy > $today){
            $insert = "INSERT INTO `schedule`(`first_name`,`last_name`,`email`, `sub_code`, `pref_date`)
                   VALUES('$name','$lname','$email', '$subject', '$time')";

            $conn->query($insert) or die ($conn->error);
            //echo "<script type='text/javascript'>alert('Successfully booked {$name}, Awaiting Apporval');</script>";
            
        }
        else {
            echo "<script type='text/javascript'>alert('Input field cannot be empty || Time Input Invalid');</script>";
            }
        }
      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule(SAMPLE)</title>
</head>
<body>
    <h3 style="text-align: center">Schedule</h3>
    <form action="" onsubmit="alertFunction()" method="POST">

    <p class="name_label">FIRST NAME</p>
    <input type="text" name="f_name_sched"</input>

    <p class="name_label">LAST NAME</p>
    <input type="text" name="l_name_sched"</input>

    <p class="name_label">E-MAIL</p>
    <input type="email" name="email_sched"</input><br><br>
    
    <select name="subject_sched">
        <option value="CANCER">CANCER</option>
        <option value="MALALA">MALALA</option>
        <option value="WALA">WALA</option>
    </select><br><br>
    
    <label for="date">Choose preferred date</label><br><br>
    <input type="datetime-local" name="date_pref"> Book for schedule </input><br><br>

    <input type="submit" name="submit" value="SUBMIT"></input>
    </form>

</body>
</html>