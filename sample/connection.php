<?php

function connectDB(){

    $conn = new mysqli ("localhost:4306", "root", "", "sample");

    if($conn->connect_error){
        echo $conn->connect_error;
    } else {
        return $conn;
    }

}










