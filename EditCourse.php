<?php

include_once("connectpage.php");

if(isset($_GET['edit'])){
    $cid=$_GET['cid'];
    $cname=$_GET['cname'];
    $cimage=$_GET['courseimage'];
    $cdes=$_GET['cdescription'];
    $cfile=$_GET['cfile'];
  

    //update codes
    $update=mysqli_query($con,"UPDATE course SET  cname='$cname' , courseimage='$cimage' , cdescription='$cdes' , cfile='$cfile'  WHERE cid='$cid'");

    if($update){
        echo "updated";
    }
    else{
        echo "not updated";
    }
}

?>