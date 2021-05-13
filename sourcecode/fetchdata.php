<?php
include_once "dbconnection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <style>
    table
    {
        margin-left: 20px;
    }
    tr,td{
        padding: 10px;
    }
    body{
       
       background-color: lightseagreen;
    }
    </style>
</head>
<body>
<div id="nav">
            <img id="homeimg" src="image/hospital logo.png" alt="This image does not support your browser";
            <ul>
                <li class="li"><a href="logout.php">Logout</a></li>
                <li class="li"><a href="contact.html">Contact Us</a></li>
                <li class="li"><a href="#"> About Us</a></li>
                <li class="li"><a href="home.php"> Home</a></li>
            </ul>
        </div>
        <br><br>
    <h2 style="text-align: center;"> Employee Details</h2><br>
    <table border="2" style="width: 40%; float:left;">
        <tr>
            <th> Staff Id </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> DOB </th>
            <th> Gender </th>
            <th> Mobile Number </th>
            <th> Email </th>
            <th> Department </th>
            <th> Experirnce </th>
            <th> Address </th>
            <th> Photo </th>
            <th colspan="2">Operatioans </th>
        </tr>
        <?php
            $query = "SELECT * FROM employee";
            $data = mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);
            if($total !=0)
            {
                while($result = mysqli_fetch_assoc($data))
                {
        ?>
                    <!-- echo " -->
                    <tr>
                    <td><?php echo $result['staffid'] ?></td>
                    <td><?php echo $result['fname']?></td>
                    <td><?php echo $result['lname'] ?></td>
                    <td><?php echo $result['dob']?></td>
                    <td><?php echo $result['gender'] ?></td>
                    <td><?php echo $result['mobileno']?></td>
                    <td><?php echo $result['email']?> </td>
                    <td><?php echo $result['dept']?></td>
                    <td><?php echo $result['experience']?> </td>
                    <td><?php echo $result['address']?></td>
                    <td><img src="<?php echo $result['photo'];?>" width="100px" height="100px"></td>
                    <td><a href="delete.php?staffid= <?php echo $result['staffid'];?>">Delete </a></td>
                    <td><a href="update.php?staffid= <?php echo $result['staffid'];?>">Update/Modify </a></td>    
                    </tr>
                    <?php
                }
            }
            ?>
    </table>    
</html>