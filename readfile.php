<?php
include_once("connectpage.php");

if(isset($_GET)){
    $pdfile=$_GET['pdffile'];
}

$sel="SELECT *FROM `course` where cid='$pdfile'";
$result=$con->query($sel);

while($data=$result->fetch_object()){
    $pdf=$data->cfile;
    $path="CoursePdf/";

    $file=$path.$pdf;

    //add header files
    header('Content-type:application/pdf');
    header('Content-Disposition:inline;filename="'.$file.'"');
    header('Content-Transfer-Encoding:binary');
    header('Accept-Ranges:bytes');

    @readfile($file);

}

?>