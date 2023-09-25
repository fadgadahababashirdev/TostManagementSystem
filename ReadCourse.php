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

    
   
    $sel="SELECT * FROM users";
    $runsel=mysqli_query($con,$sel);
    $fetch=mysqli_fetch_array($runsel);

    
    ?>




<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
    <div class="tex"><a href="readusers.php"style="text-decoration:none;color:black;">Tost Academy</a></div><hr>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="RegisterStudent.php">Add Student</a></li>
        <li><a href="AddCourse.php">Add course</a></li>
        <li><a href="AddTrainer.php">Add Trainer</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="colu">
        <div ><h4><img src="UserImages/<?php echo $fetch['userimage'];?>" alt=""></h4></div>
       
        <div class="content"> <p><?php echo $fetch['username'];?></p></div>

        <div class="content2"> <p><a href="logout.php">Logout</a></p></div>
      </div>



      <div class="row one">

      <table class="table">
        <thead>
            <tr>
                <th>CourseId</th>
                <th>CourseName</th>
                <th>CourseImage</th>
                <th>CourseDescription</th>
                <th>CourseFile</th>
             
                <th colspan="2">operations</th>
            </tr>
        </thead>

        <?php

        $selecto = "select *from course";
        $runselecto = mysqli_query($con,$selecto);
        while($row=mysqli_fetch_array($runselecto)){
            $cid=$row['cid'];
            $cname=$row['cname'];
            $cimage=$row['courseimage'];
            $cdes=$row['cdescription'];
            $cfile=$row['cfile'];
         
         
        
        
        ?>

        <tbody>
            <tr>
                <td><?php echo $cid;?></td>
                <td><?php echo $cname;?></td>
                <td><?php echo $cimage;?></td>
                <td><?php echo $cdes;?></td>
                <td><?php echo $cfile;?></td>
               
                
                <td><a href="EditCourseForm.php? cid=<?php echo $row['cid'];?>& cname=<?php echo $row['cname'];?>& courseimage=<?php echo $row['courseimage'];?>& cdescription=<?php echo  $row['cdescription'];?> & cfile=<?php echo $row['cfile'];?> "class="btn rounded text-center btn-primary">Edit</a></td>
                <td><a href="DeleteCourse.php? delete=<?php echo $row['cid'];?>"class="btn rounded text-center btn-danger">Delete</a></td>
               
               
            </tr>
        </tbody>

        <?php 
        }
        ?>

      </table>





     
    
    </div>
  </div>
</div>

</body>
</html>
