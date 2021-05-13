<?php
include_once "dbconnection.php";
if(count($_POST)>0) 
{
    $staffid =  $_POST['staffid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender =  $_POST['gender'];
    $mobno = $_POST['mobno'];
    $email = $_POST['email'];
    $dept = $_POST['dept'];
    $exp = $_POST['exp'];
    $addr = $_POST['addr'];
    $photo =  $_POST['photo'];


 mysqli_query($conn,"UPDATE employee set staffid= '$staffid',fname='$fname',lname='$lname',
      dob='$dob',gender='$gender',mobileno='$mobno',email='$email',dept='$dept',experience='$exp',addrress='$addr', 
      photo='$photo' WHERE staffid=$staffid");
    $message = "Record Modified Successfully";
    
}

    $roll = $_GET['staffid'];
    $result = mysqli_query($conn,"SELECT * FROM employee WHERE staffid=$roll");
    $row= mysqli_fetch_array($result);
?>
 <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
     </head>
     <style>
        #back{
            text-decoration: none;
        }
     </style>
     <body>
    <form name="frmUser" method="POST" action="">
        <div><?php if(isset($message)) { echo $message; } ?>
        </div>
        <table id="addtable">
                    <tr>
                        <td>Staff Id </td>
                         <td> : <input type="text" name="staffid" value="<?php echo $row['staffid'];?>"></td>
                    </tr>
                    <tr>
                        <td>First Name </td>
                        <td> : <input type="text" name="fname" value="<?php echo $row['fname'];?>"></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td> : <input type="text" name="lname" value="<?php echo $row['lname'];?>"></td>
                    </tr>
                     <tr>
                        <td>DOB</td>
                        <td> : <input type="date" name="dob" value="<?php echo $row['dob'];?>"></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                       <td> : <input type="radio" name="gender" value="<?php echo $row['gender'];?>">
                        <label for="male">Male</label> 
                        <input type="radio" name="gender" value="<?php echo $row['gender'];?>">
                        <label for="female">Female</label>  
                        <input type="radio" name="gender" value="<?php echo $row['gender'];?>">
                        <label for="other">Other</label></td>
                        
                    </tr>
                    <tr>
                        <td>Mobile No</td>
                        <td> : <input type="text" name="mobno" value="<?php  echo $row['mobileno'];?>"></td>
                    </tr>
                    <tr>
                        <td>Email ID</td>
                        <td> : <input type="email" name="email" value="<?php  echo $row['email'];?>"></td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td> : <input type="text" name="dept" value="<?php  echo $row['dept'];?>"></td>
                    </tr>
                    <tr>
                        <td>Experience(year) </td>
                        <td> : <input type="text" name="exp" value="<?php  echo $row['experience'];?>"></td>
                    </tr>
                    <tr>
                        <td>Permanent Address </td>
                       <td colspan="3">: <input type="text" name="addr" value="<?php  echo $row['address'];?>"></td>
                    </tr>
                    <tr>
                        <td>Photo</td>
                        <td> : <input type="file" name="photo" value="<?php  echo $row['photo'];?>"></td>
                    </tr>
                </table>
               <br><br> <input id="submit" type="submit" name="Submit">
               <input id="reset" type="reset" name="Reset">
                <button><a id="back" href="fetchdata.php">Back</a></button>
            </form>
     </body>
     </html>
     