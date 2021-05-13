<?php
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $db = "hospital";
    $conn = mysqli_connect($servername,$username,$pass,$db);
    if($conn)
    {
        //  echo " Database connected succcessfully";
    }
    else{
        echo " failed to connect".mysqli_connect_error();
    }
    
?>