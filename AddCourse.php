<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="pagecss/dashboard.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }

  
  </style>
</head>
<body>

<?php
include_once("connectpage.php");
$sel="SELECT *FROM users";
$runselect=mysqli_query($con,$sel);

$fetch=mysqli_fetch_array($runselect);
?>



<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">

    <div class="tex"><a href="admindashboard.php"style="text-decoration:none;color:black;">Tost Academy</a></div><hr>
    <div class="mt-3 tex"><a href="RegisterStudent.php" style="text-decoration:none;">Add Student</a></div>
    <div class="mt-3 tex"><a href="AddCourse.php"style="text-decoration:none;">Add Course</a></div>
    <div class="mt-3 tex"><a href="AddTrainer.php"style="text-decoration:none;">Add Trainer</a></div>
     
    </div>
    <br>
    
    <div class="col-sm-10">
      <div class="colu mt-5">
      <div ><img src="UserImages/<?php echo $fetch['userimage'];?>" alt=""></div>
       
      <div class="content"> <p><?php echo $fetch['username'];?></p></div>


      <div class="content2"> <a href="logout.php">LOGOUT</a></div>
      
      </div>



      <div class="row one">

      <form action="#"method="POST"enctype="multipart/form-data">

      
        <h1>Add Course</h1>
         

        <div>
            <div><label for="sid"></label></div>
            <div><input type="hidden"name="cid"placeholder=""class=" form-control"required></div>
        </div>


        <div>
            <div><label for="Coursename">Coursename</label></div>
            <div><input type="text"name="cname"placeholder="Coursename"class="form-control pr-5"required></div>
        </div>


        <div>
            <div><label for="courseimage">Courseimage</label></div>
            <div><input type="file"name="courseimage"class="form-control"required></div>
        </div>


        <div>
            <div><label for="description">Description</label></div>
            <div><input type="text"name="cdescription"placeholder="Description"class="form-control"required></div>
        </div>

        <div>
            <div><label for="Coursefile">CourseFile</label></div>
            <div><input type="file"name="cfile"placeholder="Password"class="form-control mt-3 "required></div>
        </div>

        <div>
           
            <div><input type="submit"name="Add"class="form-control btn-sm btn-primary mt-3 "></div>
        </div>





      </form>


      
      </div>



     
    
    </div>
  </div>
</div>

</body>
</html>
<?php

 //connection 
 include_once("connectpage.php");
if(isset($_POST['Add'])){
  $cid=$_POST['cid'];
  $cname=$_POST['cname'];
  
  // upload file

  $filename=$_FILES["courseimage"]["name"];
  $tempname=$_FILES["courseimage"]["tmp_name"];

  $folder="./CourseImage/".$filename;

  $cdescription=$_POST['cdescription'];

  //uploading pdf file

  $file=$_FILES["cfile"]["name"];
  $tfile=$_FILES["cfile"]["tmp_name"];

  $tfolder="./CoursePdf/".$file;

  $insert=mysqli_query($con,"INSERT INTO course(cid,cname,courseimage,cdescription,cfile) VALUES('$cid','$cname','$filename','$cdescription','$file')");

  if($insert && move_uploaded_file($tempname,$folder) && move_uploaded_file($tfile,$tfolder)){
    echo "inserted";
  }
  else{
    echo "not inserted";
  }

}

?>





