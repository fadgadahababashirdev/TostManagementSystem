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
      <h2>Tost Academy</h2>
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
                <th>Userid</th>
                <th>Username</th>
                <th>Email</th>
                <th>Userimage</th>
                <th>Courseid</th>
                <th>Password</th>
                <th>Role</th>
                <th colspan="2">operations</th>
            </tr>
        </thead>

        <?php
        while($row=mysqli_fetch_array($runsel)){
            $userid=$row['userid'];
            $username=$row['username'];
            $email=$row['email'];
            $userimage=$row['userimage'];
            $courseid=$row['courseid'];
            $password=$row['password'];
            $role=$row['role'];
         
        
        
        ?>

        <tbody>
            <tr>
                <td><?php echo $userid;?></td>
                <td><?php echo $username;?></td>
                <td><?php echo $email;?></td>
                <td><?php echo $userimage;?></td>
                <td><?php echo $courseid;?></td>
                <td><?php echo $password;?></td>
                <td><?php echo $role;?></td>
                <td><a href="editform.php? userid=<?php echo $row['userid'];?>& username=<?php echo $row['username'];?>& email=<?php echo $row['email'];?>& userimage=<?php echo  $row['userimage'];?> & courseid=<?php echo $row['courseid'];?> & password=<?php echo $row['password'];?>& role=<?php echo $row['role'];?>"class="btn rounded text-center btn-primary">Edit</a></td>
                <td><a href=""class="btn rounded text-center btn-danger">Drop</a></td>
               
               
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
