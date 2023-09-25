<?php
include_once("connectpage.php");

$select="SELECT *FROM course";
$runselect=mysqli_query($con,$select);

error_reporting(1);
$Courseid=$_GET['cid'];
$Coursename=$_GET['cname'];
$Courseimage=$_GET['courseimage'];
$Coursedescription=$_GET['cdescription'];
$Coursefile=$_GET['cfile'];

?>

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



<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">

    <div class="tex"><a href="readusers.php"style="text-decoration:none;color:black;">Tost Academy</a></div><hr>
    <div class="mt-3 tex"><a href="RegisterStudent.php" style="text-decoration:none;">Add Student</a></div>
    <div class="mt-3 tex"><a href="AddCourse.php"style="text-decoration:none;">Add Course</a></div>
    <div class="mt-3 tex"><a href="AddTrainer.php"style="text-decoration:none;">Add Trainer</a></div>
     
    </div>
    <br>
    
    <div class="col-sm-10">
      <div class="colu mt-5">
        <div class="content"><h4>Userimage</h4></div>
       
        <div class="content"> <p>Username</p></div>

        <div class="content2"> <p>Logout</p></div>
      </div>



      <div class="row one">

      <form action="EditCourse.php"method="GET"enctype="multipart/form-data">

      
        <h1>EDIT</h1>
         

        <div>
            <div><label for="userid">Courseid</label></div>
            <div><input type="text"name="cid"placeholder=""class=" form-control"required value="<?php echo $Courseid;?>"readonly></div>
        </div>


        <div>
            <div><label for="username">Coursename</label></div>
            <div><input type="text"name="cname"placeholder=""class="form-control pr-5"required value="<?php echo $Coursename;?>"></div>
        </div>


        <div>
            <div><label for="Email">Courseimage</label></div>
            <div><input type="file"name="courseimage"placeholder=""class="form-control"required value="<?php echo $Courseimage;?>"></div>
        </div>


        <div>
            <div><label for="userimage">Course Description</label></div>
            <div><input type="text"name="cdescription"placeholder=""class="form-control"required value="<?php echo $Coursedescription;?>"></div>
        </div>

        <div>
            <div><label for="courseid">Course file</label></div>
            <div><input type="file"name="cfile"placeholder=""class="form-control"required value="<?php echo $Coursefile;?>"></div>
        </div>
       

        <div>
           
            <div><input type="submit"name="edit"class="form-control btn-sm btn-primary mt-3 " value="Update"></div>
        </div>





      </form>


      
      </div>



     
    
    </div>
  </div>
</div>

</body>
</html>

















