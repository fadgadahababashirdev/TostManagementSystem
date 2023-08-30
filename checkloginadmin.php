<?php
session_start();
$con=mysqli_connect("localhost","root","","mypro") or die("echo not connected");

/*login codes*/



$name=$_POST['name'];
$password=$_POST['password'];

$sel=mysqli_query($con,"SELECT *FROM admin WHERE name='$name' and password='$password'");

$fetch=mysqli_fetch_array($sel);

if($fetch){
    $na=$fetch['name'];
    $pa=$fetch['password'];

    $session['name']=$fetch['name'];
    $session['password']=$fetch['password'];

    if($session['name']==$fetch['name'] and  $session['password']==$fetch['password']){
        include("dashboard.php");
    }
}
else{
    echo "<script>alert('invalid username or password')</script>";
    echo "<script>history.back();</script>";
}
?>

