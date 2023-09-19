<?php
include_once("connectpage.php");

$delete=$_GET['delete'];
$deletefromtb="DELETE FROM users where courseid='$delete'";
$rundelete=mysqli_query($con,$deletefromtb);

if($rundelete){
    header("location:ReadUsers.php");
}
else{
    echo "not deleted";
}

?>