<?php 

    $conn = mysqli_connect("localhost","root","","login_member_status");

    if(!$conn){
        die("Failed to connect to database" .mysqli_error($conn));
    }
?>