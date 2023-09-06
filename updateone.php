<?php
$con=mysqli_connect("localhost","root","","mypro") or die("not connected");

error_reporting(0);
$ad=$_GET['i'];
$um=$_GET['u'];
$ema=$_GET['e'];
$role=$_GET['r'];
$ph=$_GET['p'];
$gen=$_GET['g'];
$pa=$_GET['paa'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
       form{
        width:400px;
        align:center;
        
        margin-left:220px;
       }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-primary fixed-top">Update User</h1>
    <form action="updatetwo.php"class="form rounded shadow"method="GET">
        <div class="mx-5"><label for="id"class="form-label">Userid <div><input type="text"class="form-control px-5" value="<?php echo $ad;?>"readonly name="aid"></div></label></div>
        <div class="mx-5"><label for="id"class="form-label">Username <div><input type="text"class="form-control px-5" value="<?php echo $um;?>" name="name"></div></label></div>
        <div class="mx-5"><label for="id"class="form-label">Email<div><input type="text"class="form-control px-5" value="<?php echo $ema;?>" name="email"></div></label></div>
        <div class="mx-5">
            <div>
               <label for="user type" class="form-label">Role</label>
               <select name="role" id="user type"class="form-select mb-2"style="widht:230px;"value="<?php echo $role;?>" name="role">
                <option  selected value="Student">Student</option>
                <option value="Admin">Admin</option>
                <option value="trainer">Trainer</option>
               </select>
               
            </div>
        </div>
        <div class="mx-5"><label for="id"class="form-label">Phone<div><input type="text"class="form-control px-5" value="<?php echo $ph;?>" name="phone"></div></label></div>

        <div class="mx-5">
           <div>
               <label for="user type" class="form-label">Gender</label>
               <select name="gender" id="user type"class="form-select mb-2"style="widht:230px;"value="<?php echo $gen;?>">
                <option value="male">male</option>
                <option value="female">Female</option>
                
               </select>
               
            </div>
        </div>
        
        
        <div class="mx-5"><label for="id"class="form-label">Password<div><input type="text"class="form-control px-5" value="<?php echo $pa;?>" name="password"></div></label></div>

        <input type="submit"name="update"value="upload"class="btn btn-primary text-center rounded my-3 mx-5">
  
    </form>
</div>

    
</body>
</html>