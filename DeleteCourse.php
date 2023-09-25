<?php
include_once("connectpage.php");

$delete=$_GET['delete'];
$deletefromtb="DELETE FROM course where cid='$delete'";
$rundelete=mysqli_query($con,$deletefromtb);

if($rundelete){
    header("location:ReadCourse.php");
}
else{
    echo "not deleted";
}

?>