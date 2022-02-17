<?php

    include_once("connection.php");
    $conn = connectDB();
    if(isset($_POST['submit_admin'])){

        $admin_user = $_POST['admin_username'];
        $admin_pass = $_POST['admin_password'];

        $validate = "SELECT * FROM admin
                    WHERE admin_username = '$admin_user' AND admin_password = '$admin_pass'";

        $sql = $conn->query($validate) or die($conn->error);
        $row = $sql->fetch_assoc();
        $num = $sql->num_rows;

        if($num){
            $_SESSION['adminuser'] = $row['admin_username'];
            echo "Welcome". " ". $_SESSION['adminuser'];
            header("Location: admin.html");
        }else {
            echo "mali";
        }

    }
    if(isset($_GET['search_btn'])){
        
        $search_item = $_GET['search'];
        
        $searchquery = "SELECT * FROM schedule WHERE first_name LIKE '%$search_item%' || last_name LIKE '%$search_item%'";
        $display_result = $conn->query($searchquery) or die($conn->error);
        $count = 1;
    
    }

    $EmailVar = $_GET['email'];

    $getinfo_email = " SELECT * FROM schedule WHERE email = '$EmailVar'";
    $execute_email = $conn->query($getinfo_email) or die($conn->error);
    $count = 1;

    $IdVar = $_GET['ID'];
    $getinfo = " SELECT * FROM schedule WHERE id = '$IdVar'";
    $execute = $conn->query($getinfo) or die($conn->error);

    $print = $execute->fetch_assoc();

    if(isset($_POST['Back'])){
        header('Location: admin.html');
    }

    if(isset($_POST['submit_changes'])){

        $name_edit = $_POST['f_name_edit'];
        $lname_edit = $_POST['l_name_edit'];
        $subject_edit = $_POST['subject_sched_edit'];
        $time_edit = $_POST['date_pref_edit'];

        date_default_timezone_set('Asia/Manila');

        $today = date("Y-m-d H:i: a");
        $time_edit_dummy = date("Y-m-d H:i: a",strtotime($time_edit));
		
		echo $time_edit;

      
        if($name_edit != NULL && $lname_edit != NULL && $subject_edit != NULL && $time_edit != NULL && $time_edit_dummy > $today){
    
            $insert_edit = "UPDATE schedule SET first_name = '$name_edit', last_name = '$lname_edit', 
            sub_code = '$subject_edit', pref_date = '$time_edit' WHERE id = '$IdVar'";  

            $conn->query($insert_edit) or die ($conn->error);

            $alert = "<script type='text/javascript'>alert('Successfully Edited!');</script>";
            echo $alert;
        }
        else {
            echo "<script type='text/javascript'>alert('Input field cannot be empty OR Date Invalid');</script>";
            }
    }