<?php
include_once "dbconnection.php";
        $staffid = $_GET['staffid'];
        $query = "DELETE FROM employee WHERE staffid = $staffid";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            echo " Record deleted from database";
        }
        else{
            echo " failed to delete from database";
        }
   
?>