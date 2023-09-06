<?php
$con=mysqli_connect("localhost","root","","mypro")or die("not connected");

$del=$_GET['dee'];
$rund=mysqli_query($con,"DELETE FROM admin WHERE aid='$del'");

if($rund){
    header("location:select.php");
}
else{
    echo "<script>alert('not deleted')</script>";
}

?>