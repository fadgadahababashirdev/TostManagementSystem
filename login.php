

<?php
session_start();
$con=mysqli_connect("localhost","root","","mypro") or die("not connected");


// getting data from the form

$email=$_POST['email'];
$password=$_POST['password'];

$sel=mysqli_Query($con,"SELECT *FROM admin WHERE email='$email'");

$fetch=mysqli_fetch_array($sel);

if($fetch){
    $_SESSION['email']=$fetch['email'];
    $_SESSION['password']=$fetch['password'];
    $_SESSION['role']=$fetch['role'];

    if($_SESSION['email']==$email and  $_SESSION['password']==$password){
        if($_SESSION['role']==='Admin')
        {
            include("dashboard.php");

        }

        elseif($_SESSION['role']==='Student')
        {
            include("checkcourse.php");

        }
      
    }
}
else{
    echo "invalid username or password";
}
   