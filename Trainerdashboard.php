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
$sel="SELECT *FROM users";
$runselect=mysqli_query($con,$sel);

$fetch=mysqli_fetch_array($runselect);
?>

<?php
include_once("connectpage.php");
$sel="SELECT *FROM coursename FROM  users where courseid ";
$runselect=mysqli_query($con,$sel);

$fetch=mysqli_fetch_array($runselect);
?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs">
     
    </div>
    <br>
    
    <div class="col-sm-10">
      <div class="colu">
        <div ><img src="UserImages/<?php echo $fetch['userimage'];?>" alt=""></div>
       
        <div class="content"> <p><?php echo $fetch['username'];?></p></div>

        <div class="content2"> <a href="logout.php">Logout</a></div>
      </div>



      <div class="row one">

      <h1>Dear <?php echo $fetch['username'];?> welcome at tost you will be assisting trainers  course name!</h1>


      </div>



     
    
    </div>
  </div>
</div>

</body>
</html>
