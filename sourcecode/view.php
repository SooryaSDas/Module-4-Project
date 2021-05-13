<?php
    include("dbconnection.php");
        $staffid = $_POST['staffid'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $mobno = $_POST['mobno'];
        $email = $_POST['email'];
        $dept = $_POST['dept'];
        $exp = $_POST['exp'];
        $addr = $_POST['addr'];
        $file = $_FILES['photo'];
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        $destfile = 'photo/'.$filename;
        move_uploaded_file($filepath,$destfile);

    $query = "INSERT INTO employee (staffid,fname,lname,dob,gender,mobileno,email,dept,experience,address,photo)values('$staffid','$fname','$lname','$dob','$gender','$mobno','$email','$dept','$exp','$addr','$destfile')";
    $data = mysqli_query($conn,$query);
   
    if($data)
    {
        echo " inserted";
    }
    else{
        echo "failed";
    }

?>