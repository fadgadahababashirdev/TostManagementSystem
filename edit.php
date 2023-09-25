<?php
include_once("connectpage.php");

if(isset($_GET['Edit'])){
    $userid=$_GET['userid'];
    $username=$_GET['username'];
    $email=$_GET['email'];
    $userimage=$_GET['userimage'];
    $courseid=$_GET['courseid'];
    $password=$_GET['password'];
    $role=$_GET['role'];
    $status=$_GET['status'];

    //update codes
    $update=mysqli_query($con,"UPDATE users SET username='$username' , email='$email' , userimage='$userimage' , courseid='$courseid' , password='$password' , role='$role' , status ='$status' WHERE userid='$userid'");

    if($update){
        echo "updated";
    }
    else{
        echo "not updated";
    }
}

?>