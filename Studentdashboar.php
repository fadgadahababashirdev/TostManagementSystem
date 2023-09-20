
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


$user=$_SESSION['SessionEmail'];
$sel="SELECT *FROM users where email='$user'";
$runselect=mysqli_query($con,$sel);

$fetch=mysqli_fetch_array($runselect);

 //joining tables

$select="SELECT course.cname FROM `course` INNER JOIN `users` ON course.cid=users.courseid";


$runsel=mysqli_query($con,$select);
$fetchrunsel=mysqli_fetch_array($runsel);
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

        <div class="content2"> <a href="logout.php">LOGOUT</a></div>
      </div>



      <div class="row one">

      <h1>Dear <span class="text-primary"><?php echo $fetch['username'];?></span> welcome at tost you will be learning  <span class="text-danger"><?php echo $fetchrunsel['cname'];?></span>!</h1>


      </div>



     
    
    </div>
  </div>
</div>

</body>
</html>
