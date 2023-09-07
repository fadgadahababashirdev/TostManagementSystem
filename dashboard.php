<?php
$con=mysqli_connect("localhost","root","","mypro");

?>


<?php
$sel="SELECT *from admin";
$runsel=mysqli_query($con,$sel);
$fetch=mysqli_fetch_assoc($runsel);

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
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    .hallo{
      display:flex;
      justify-content:space-between;
    }
        


    
  </style>
</head>
<body>



<div class="container-fluid ">
  <div class="row content my-5">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Tost training academy</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Admin activities</a></li>
        <li><a href="registerstudentbyadmin.php">Register Student</a></li>
        <li><a href="registercoursebyadmin.php">Register Course</a></li>
        <li><a href="registertrainerbyadmin.php">Register Trainer</a></li>
        <li><a href="select.php">Operations</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class=" hallo bg-primary">
        <div><h1 style="font-size:22px;color:black;margin-top:0;padding-top:0; margin-left:23px;"><?php echo $fetch['name'];?></h1></div>
        <div><a href="logout.php" style="margin-right:23px;color:red;">Logout</a></div>
       
      </div>
      <div class="row"style="margin-top:23px;">
        <div class="col-sm-3">
          <div class="well">
            <h4>Courses number</h4>
            <p>12</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Courses Trainer</h4>
            <p>2</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Students</h4>
            <p>10 </p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>projects built</h4>
            <p>2</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
           <p>Enrolled Students</p>
           <p>2</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
           <p>graduating students</p>
           <p>2</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <p>unenlolled Student</p> 
            <p>3</p> 
           
          </div>
        </div>
      
      
    
    </div>
  </div>
</div>

</body>
</html>
