<?php

// <!-- notif class just for notification if success (line 18)   -->
// <!--  just for notification if date is invalid   (line 23)   -->
// <!-- Shows validatior error (line 32)   -->
// <!-- If user is logged in save it's id in a hidden input for database insertion purpose (line 37)   -->

    if(isset($_SESSION['notification'])){ 
        echo "<h1 class='rounded bg-success text-white p-1 m-2'><?=" . $_SESSION['notification'] . '</h1>';
        unset($_SESSION['notification']);
    }

    if(isset($_SESSION['notification_error'])){ 
        echo "<h1 class='rounded bg-danger text-white p-1 m-2'><?=" . $_SESSION['notification_error'] . '</h1>';
        unset($_SESSION['notification_error']);
    }
    
    if(!empty($this->session->userdata('verify'))){
        redirect('index');
    }

    if(empty($this->session->userdata('verify'))){
        redirect('signin');
    }

?>