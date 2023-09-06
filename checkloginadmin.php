<?php
session_start();
$con=mysqli_connect("localhost","root","","mypro") or die("echo not connected");

/*login names from the form*/

$email=$_POST['email'];
$password=$_POST['password'];

// $role=$_POST['role'];

/*selecting*/

$runsel=mysqli_query($con,"SELECT *FROM Admin WHERE email='$email'");
/*fetching from */

$fetch=mysqli_fetch_array($runsel);

if($fetch){
    $emailfromdatabase=$fetch['email'];
    $passwordfromdatabase=$fetch['password'];
    $rolefromdatabase =$fetch['role'];

    $session['email']=$emailfromdatabase;
    $session['password']=$passwordfromdatabase;
    $session['role']=$rolefromdatabase;


    if($session['email']==$email && $session['password']==$password ){


        if( $session['role']==='Admin')
        {
            header("location:dashboard.php");
        }
        elseif( $session['role']==='Student')
        {header("location:checkcourse.php");}
        
        elseif($rolefromdatabase==='Trainer')
        {
            header("location:checkcourse.php");
        }
    }
}

else{
    echo"<script>('invalid username or password')</script>";
    echo "<script>history.back()</script>";
}



?>

