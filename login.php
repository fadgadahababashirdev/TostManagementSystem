<?php
session_start();
include_once("connectpage.php");

//fetch data from form

$email=$_POST['email'];
$password=$_POST['password'];


$select=mysqli_query($con,"SELECT *FROM  users WHERE email='$email' and password='$password'");


$row=mysqli_num_rows($select);
if($row==1){
    $fetch=mysqli_fetch_array($select);
    //data from db
  
       
        $_SESSION['role']=$fetch['role'];
        
    
        
            if($_SESSION['role']==='Admin'){
                $_SESSION['SessionEmail']=$email;
                include('admindashboard.php');
            }
            elseif ($_SESSION['role']==='student') {
                $_SESSION['SessionEmail']=$email;

                include("studentdashboar.php");
            }
    
            elseif($_SESSION['role']==='Trainer'){
                $_SESSION['SessionEmail']=$email;

                include("location:Trainerdashboard.php");
            }
        
    }

   
    

else{
    echo "<script>alert('invalid username or password');</script>";
    echo "<script>window.location.assign('index.php')</script>";
}



/*


*/?>

