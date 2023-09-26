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




<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
     <a href="admindashboard.php"> <p>Tost Academy</p></a>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="RegisterStudent.php">Add Student</a></li>
        <li><a href="AddCourse.php">Add course</a></li>
        <li><a href="AddTrainer.php">Add Trainer</a></li>
        <li><a href="ReadUsers.php">Operations</a></li>
        <li><a href="ReadCourse.php">EditCourse</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="colu">

      <?php
       include_once("connectpage.php");

      $select = "SELECT * FROM users";
      $runselect =mysqli_query($con,$select);
      $fetch =mysqli_fetch_array($runselect);
      
      ?>

     
      <div ><img src="UserImages/<?php echo $fetch['userimage'];?>" alt=""></div>
       
      <div class="content"> <p><?php echo $fetch['username'];?></p></div>

      <div class="content2"> <a href="logout.php">LOGOUT</a></div>
      </div>
