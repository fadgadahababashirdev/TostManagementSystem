<?php
session_start();
$con=mysqli_connect("localhost","root","","mypro")or die("echo denied");

$tna=$_POST['tname'];
$tpa=$_POST['tpassword'];

$sel=mysqli_query($con,"SELECT *FROM trainer WHERE  tname='$tna' and tpassword='$tpa'");

$fetch=mysqli_fetch_array($sel);

if($fetch){
    $tn=$fetch['tname'];
    $tp=$fetch['tpassword'];

    $_SESSION['tname']=$fetch['tname'];
    $_SESSION['tpassword']=$fetch['tpassword'];
    
    if( $_SESSION['tname']==$fetch['tname'] and  $_SESSION['tpassword']==$fetch['tpassword']){
        include("trainercheckcourse.php");
    }
}
else{
    echo "<script>alert('invalid username or password')</script>";
    echo "<script>history.back</script>";
}

?>