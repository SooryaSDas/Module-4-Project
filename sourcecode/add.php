
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="add.css"> 
</head>
<body>
    <div id="body">
        <div id="nav">
            <img id="homeimg" src="image/hospital logo.png" alt="This image does not support your browser";
            <ul>
                <li class="li"><a href="#">Logout</a></li>
                <li class="li"><a href="contact.html">Contact Us</a></li>
                <li class="li"><a href="#"> About Us</a></li>
                <li class="li"><a href="home.php"> Home</a></li>
            </ul>
        </div>
        <div id="formbody">
            <h1 id="reg">Registration Form</h1>
            <br><br>
            <form action="view.php" method="POST" enctype="multipart/form-data">
                <table id="addtable">
                    <tr>
                        <td>Staff Id </td>
                        <td> : <input type="text" name="staffid"></td>
                    </tr>
                    <tr>
                        <td>First Name </td>
                        <td> : <input type="text" name="fname"></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td> : <input type="text" name="lname"></td>
                    </tr>
                     <tr>
                        <td>DOB</td>
                        <td> : <input type="date" name="dob"></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                       <td> : <input type="radio" name="gender">
                        <label for="male">Male</label> 
                        <input type="radio" name="gender">
                        <label for="female">Female</label>  
                        <input type="radio" name="gender">
                        <label for="other">Other</label></td>
                        
                    </tr>
                    <tr>
                        <td>Mobile No</td>
                        <td> : <input type="text" name="mobno"></td>
                    </tr>
                    <tr>
                        <td>Email ID</td>
                        <td> : <input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td> : <input type="text" name="dept"></td>
                    </tr>
                    <tr>
                        <td>Experience(year) </td>
                        <td> : <input type="text" name="exp"></td>
                    </tr>
                    <tr>
                        <td>Permanent Address </td>
                       <td colspan="3">: <input type="text" name="addr"></td>
                    </tr>
                    <tr>
                        <td>Photo</td>
                        <td> : <input type="file" name="photo"></td>
                    </tr>
                </table>
               <br><br> <input id="submit" type="submit" name="Submit">
               <input id="reset" type="reset" name="Reset">
            </form>
        </div>
    </div>
</body>
</html>