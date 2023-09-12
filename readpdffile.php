<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


// Database Connection 
$conn = new mysqli("localhost","root","","mypro");



//id declaration

if(isset($_GET)){
$id=$_GET['cid'];

//selecting data from db table course

$select = "SELECT *FROM `course` where cid='$id'";
$result = $conn->query($select);
while($row = $result->fetch_object()){
  $pdf = $row->coursepdffile;
  $path = "file/";

  $file = $path.$pdf;
}


}


// Add header to load pdf file
header('Content-type: application/pdf'); 
header('Content-Disposition: inline; filename="'.$file.'"'); 
header('Content-Transfer-Encoding: binary'); 
header('Accept-Ranges: bytes'); 
@readfile($file);   

//

?>
    
</body>
</html>