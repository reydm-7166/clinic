<?php
    session_start();
    session_destroy();


    header("Location: adminlogin.php");

    echo "<script type='text/javascript'>alert('Successfully Logged out');</script>";